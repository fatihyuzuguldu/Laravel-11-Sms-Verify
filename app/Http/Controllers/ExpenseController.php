<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Customer;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    // Show all expenses
    public function index()
    {
        $expenses = Expense::with(['category', 'customer'])->get();
        return view('expenses.index', compact('expenses'));
    }

    // Show create expense form
    public function createExpenseForm()
    {
        $categories = ExpenseCategory::all();
        $customers = Customer::all();
        return view('expenses.create', compact('categories', 'customers'));
    }

    // Store new expense
    public function storeExpense(Request $request)
    {
        $request->validate([
            'ExpenseName' => 'required|string|max:255',
            'ExpensePrice' => 'required',
            'ExpensePaymentMethod' => 'required|string|max:255',
            'expense_category_id' => 'required|exists:expense_categories,id',
        ]);

        $expenseName = mb_convert_case($request->input('ExpenseName'), MB_CASE_TITLE, "UTF-8");

        $expense = Expense::create([
            'ExpenseName' => $expenseName,
            'ExpensePrice' => $request->ExpensePrice,
            'ExpensePaymentMethod' => $request->ExpensePaymentMethod,
            'expense_category_id' => $request->expense_category_id,
        ]);

        return redirect()->route('expenses.index');
    }

    // Show edit expense form
    public function editExpenseForm($id)
    {
        $expense = Expense::findOrFail($id);
        $categories = ExpenseCategory::all();
        $customers = Customer::all();
        return view('expenses.edit', compact('expense', 'categories', 'customers'));
    }

    // Update expense
    public function updateExpense(Request $request, $id)
    {
        $request->validate([
            'ExpenseName' => 'required|string|max:255',
            'ExpensePrice' => 'required',
            'ExpensePaymentMethod' => 'required|string|max:255',
            'expense_category_id' => 'required|exists:expense_categories,id',
        ]);

        $expenseName = mb_convert_case($request->input('ExpenseName'), MB_CASE_TITLE, "UTF-8");

        $expense = Expense::findOrFail($id);
        $expense->update([
            'ExpenseName' => $expenseName,
            'ExpensePrice' => $request->ExpensePrice,
            'ExpensePaymentMethod' => $request->ExpensePaymentMethod,
            'expense_category_id' => $request->expense_category_id,
        ]);

        return redirect()->route('expenses.index');
    }

    // Delete expense
    public function deleteExpense($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();

        return redirect()->route('expenses.index');
    }

    // Expense Category Methods

    // Show all expense categories
    public function showExpenseCategories()
    {
        $categories = ExpenseCategory::all();
        return view('expenses.categories.index', compact('categories'));
    }

    // Show create expense category form
    public function createCategoryForm()
    {
        return view('expenses.categories.create');
    }

    // Store new expense category
    public function storeCategory(Request $request)
    {
        $request->validate([
            'ExpenseCategoryName' => 'required|string|max:255|unique:expense_categories,ExpenseCategoryName',
            'ExpenseCategoryType' => 'required|in:income,expense',
        ]);

        $categoryName = mb_convert_case($request->input('ExpenseCategoryName'), MB_CASE_TITLE, "UTF-8");

        $category = ExpenseCategory::create([
            'ExpenseCategoryName' => $categoryName,
            'ExpenseCategoryType' => $request->ExpenseCategoryType,
        ]);

        return redirect()->route('expenses.categories.index');
    }

    // Show edit expense category form
    public function editCategoryForm($id)
    {
        $category = ExpenseCategory::findOrFail($id);
        return view('expenses.categories.edit', compact('category'));
    }

    // Update expense category
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'ExpenseCategoryName' => 'required|string|max:255|unique:expense_categories,ExpenseCategoryName,' . $id,
            'ExpenseCategoryType' => 'required|in:income,expense',
        ]);

        $categoryName = mb_convert_case($request->input('ExpenseCategoryName'), MB_CASE_TITLE, "UTF-8");

        $category = ExpenseCategory::findOrFail($id);
        $category->update([
            'ExpenseCategoryName' => $categoryName,
            'ExpenseCategoryType' => $request->ExpenseCategoryType,
        ]);

        return redirect()->route('expenses.categories.index');
    }

    // Delete expense category
    public function deleteCategory($id)
    {
        $category = ExpenseCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('expenses.categories.index');
    }
}
