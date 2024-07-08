<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'asc')->get();
        return view('customer.index', compact('customers'));
    }

    public function all()
    {
        $customers = Customer::onlyTrashed()->orderBy('deleted_at', 'asc')->get();
        return view('customer.all', compact('customers'));
    }

    public function showcreate()
    {
        $customers = Customer::withTrashed()->orderBy('deleted_at', 'asc')->get();
        return view('customer.create', compact('customers'));
    }
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return response()->json(['success' => 'Customer deleted successfully']);
    }
    public function create(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Kullanıcı adını büyük harfle başlayacak şekilde düzenle
        $customername = mb_convert_case($request->input('CustomerName'), MB_CASE_TITLE, "UTF-8");

        $customer = $this->createcustomer(array_merge($request->all(), ['CustomerName' => $customername]));

        return redirect()->route('Customer')->with('success', 'Başarılı.');
    }
    public function showview($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.view', compact('customer'));
    }
    public function showedit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }
    public function update(Request $request, $id)
    {
        // İsteği doğrulama (validation) kuralları
        $validatedData = $request->validate([
            'CustomerName' => 'required|string|max:255',
            'CustomerPhone' => ['required', 'string', 'size:10', Rule::unique('customers')->ignore($id)],
            'CustomerGender' => ['required','in:Erkek,Kız'],
            'CustomerIsActive' => ['required','in:0,1'],
        ]);

        // CustomerName'i büyük harfle başlayacak şekilde düzenleme
        $customername = mb_convert_case($request->input('CustomerName'), MB_CASE_TITLE, "UTF-8");

        // Müşteri verisini güncelle
        $customer = Customer::findOrFail($id);
        $customer->CustomerName = $customername;
        $customer->CustomerPhone = $request->input('CustomerPhone');
        $customer->CustomerGender = $request->input('CustomerGender');
        $customer->CustomerBirthDate = $request->input('CustomerBirthDate');
        $customer->CustomerIsActive = $request->input('CustomerIsActive');
        $customer->save();

        // Başarılı bir şekilde güncelleme yapıldıktan sonra yönlendirme yapabilirsiniz
        return redirect()->route('Customer')->with('success', 'Müşteri bilgileri başarıyla güncellendi.');
    }
    protected function createcustomer(array $data)
    {
        return Customer::create([
            'CustomerName' => $data['CustomerName'],
            'CustomerPhone' => $data['CustomerPhone'],
            'CustomerGender' => $data['CustomerGender'],
            'CustomerBirthDate' => $data['CustomerBirthDate'],
        ]);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'CustomerName' => ['required', 'string', 'max:255'],
            'CustomerPhone' => ['required', 'string', 'size:10', 'unique:customers', new PhoneNumber],
            'CustomerGender' => ['required','in:Erkek,Kız'],
            // size:10 ile 10 haneli olmasını sağlıyoruz
        ]);
    }
    public function rotate($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->restore();
        $customer->save();

        return redirect()->route('Customer')->with('success', 'Müşteri başarıyla aktifleştirildi.');
    }
}
