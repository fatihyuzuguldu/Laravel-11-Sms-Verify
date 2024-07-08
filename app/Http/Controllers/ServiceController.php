<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Show all services
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    // Show create service form
    public function createServiceForm()
    {
        $categories = ServiceCategory::all();
        return view('services.create', compact('categories'));
    }
    // Store new service
    public function storeService(Request $request)
    {
        $request->validate([
            'ServiceName' => 'required|string|max:255|unique:services,ServiceName',
            'ServicePrice' => 'required|numeric',
            'ServiceSessionCount' => 'required|integer',
            'ServiceDuration' => 'required|string|max:255',
            'ServiceDescription' => 'nullable|string',
            'ServiceIsActive' => 'boolean',
            'service_category_id' => 'required|exists:service_categories,id',
        ]);

        // ServiceName'i büyük harfe çevirme
        $serviceName = mb_convert_case($request->input('ServiceName'), MB_CASE_TITLE, "UTF-8");

        $service = Service::create([
            'ServiceName' => $serviceName,
            'ServicePrice' => $request->ServicePrice,
            'ServiceSessionCount' => $request->ServiceSessionCount,
            'ServiceDuration' => $request->ServiceDuration,
            'ServiceDescription' => $request->ServiceDescription,
            'ServiceIsActive' => $request->has('ServiceIsActive'),
            'service_category_id' => $request->service_category_id,
        ]);

        return redirect()->route('services.index');
    }


    // Show edit service form
    public function editServiceForm($id)
    {
        $service = Service::findOrFail($id);
        $categories = ServiceCategory::all();
        return view('services.edit', compact('service', 'categories'));
    }

    // Update service
    public function updateService(Request $request, $id)
    {
        $request->validate([
            'ServiceName' => 'required|string|max:255|unique:services,ServiceName',
            'ServicePrice' => 'required|numeric',
            'ServiceSessionCount' => 'required|integer',
            'ServiceDuration' => 'required|string|max:255',
            'ServiceDescription' => 'nullable|string',
            'service_category_id' => 'required|exists:service_categories,id',
        ]);
        $serviceName = mb_convert_case($request->input('ServiceName'), MB_CASE_TITLE, "UTF-8");

        $service = Service::findOrFail($id);
        $service->update([
            'ServiceName' => $serviceName,
            'ServicePrice' => $request->ServicePrice,
            'ServiceSessionCount' => $request->ServiceSessionCount,
            'ServiceDuration' => $request->ServiceDuration,
            'ServiceDescription' => $request->ServiceDescription,
            'ServiceIsActive' => '1',
            'service_category_id' => $request->service_category_id,
        ]);

        return redirect()->route('services.index');
    }

    // Show all service categories
    public function showServiceCategories()
    {
        $categories = ServiceCategory::all();
        return view('services.categories.index', compact('categories'));
    }

    // Show create service category form
    public function createCategoryForm()
    {
        return view('services.categories.create');
    }

    // Store new service category
    public function storeCategory(Request $request)
    {
        $request->validate([
            'ServiceCategoryName' => 'required|string|max:255|unique:service_categories,ServiceCategoryName',
        ]);
        $serviceCategoryName = mb_convert_case($request->input('ServiceCategoryName'), MB_CASE_TITLE, "UTF-8");

        $category = ServiceCategory::create([
            'ServiceCategoryName' => $serviceCategoryName,
        ]);

        return redirect()->route('services.categories.index');
    }

    // Show edit service category form
    public function editCategoryForm($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return view('services.categories.edit', compact('category'));
    }

    // Update service category
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'ServiceCategoryName' => 'required|string|max:255|unique:service_categories,ServiceCategoryName',
        ]);
        $serviceCategoryName = mb_convert_case($request->input('ServiceCategoryName'), MB_CASE_TITLE, "UTF-8");

        $category = ServiceCategory::findOrFail($id);
        $category->update([
            'ServiceCategoryName' => $serviceCategoryName,
        ]);

        return redirect()->route('services.categories.index');
    }
}
