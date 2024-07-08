<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // Show all Product
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show create Product form
    public function createProductForm()
    {
        $categories = ProductCategory::all();
        return view('products.create', compact('categories'));
    }
    // Store new Product
    public function storeProduct(Request $request)
    {
        $request->validate([
            'ProductName' => 'required|string|max:255|unique:products,ProductName',
            'ProductPrice' => 'required|numeric',
            'ProductBarcode' => 'required|integer',
            'ProductStock' => 'required|string|max:255',
            'ProductDescription' => 'nullable|string',
            'product_category_id' => 'required|exists:product_categories,id',
        ]);

        // Product'i büyük harfe çevirme
        $productName = mb_convert_case($request->input('ProductName'), MB_CASE_TITLE, "UTF-8");

        $product = Product::create([
            'ProductName' => $productName,
            'ProductPrice' => $request->ProductPrice,
            'ProductBarcode' => $request->ProductBarcode,
            'ProductStock' => $request->ProductStock,
            'ProductDescription' => $request->ProductDescription,
            'product_category_id' => $request->product_category_id,
        ]);

        return redirect()->route('products.index');
    }


    // Show edit Product form
    public function editProductForm($id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::all();
        return view('products.edit', compact('product', 'categories'));
    }

    // Update Product
    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'ProductName' => 'required|string|max:255|unique:products,ProductName',
            'ProductPrice' => 'required|numeric',
            'ProductBarcode' => 'required|integer',
            'ProductStock' => 'required|string|max:255',
            'ProductDescription' => 'nullable|string',
            'product_category_id' => 'required|exists:product_categories,id',
        ]);
        $productName = mb_convert_case($request->input('ProductName'), MB_CASE_TITLE, "UTF-8");

        $product = Product::findOrFail($id);
        $product->update([
            'ProductName' => $productName,
            'ProductPrice' => $request->ProductPrice,
            'ProductBarcode' => $request->ProductBarcode,
            'ProductStock' => $request->ProductStock,
            'ProductDescription' => $request->ProductDescription,
            'product_category_id' => $request->product_category_id,
        ]);

        return redirect()->route('products.index');
    }

    // Show all Product categories
    public function showProductCategories()
    {
        $categories = ProductCategory::all();
        return view('products.categories.index', compact('categories'));
    }

    // Show create Product category form
    public function createCategoryForm()
    {
        return view('products.categories.create');
    }

    // Store new Product category
    public function storeCategory(Request $request)
    {
        $request->validate([
            'ProductCategoryName' => 'required|string|max:255|unique:product_categories,ProductCategoryName',
        ]);
        $productCategoryName = mb_convert_case($request->input('ProductCategoryName'), MB_CASE_TITLE, "UTF-8");

        $category = ProductCategory::create([
            'ProductCategoryName' => $productCategoryName,
        ]);

        return redirect()->route('products.categories.index');
    }

    // Show edit Product category form
    public function editCategoryForm($id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('products.categories.edit', compact('category'));
    }

    // Update Product category
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'ProductCategoryName' => 'required|string|max:255|unique:product_categories,ProductCategoryName',
        ]);
        $productCategoryName = mb_convert_case($request->input('ProductCategoryName'), MB_CASE_TITLE, "UTF-8");

        $category = ProductCategory::findOrFail($id);
        $category->update([
            'ProductCategoryName' => $productCategoryName,
        ]);

        return redirect()->route('products.categories.index');
    }
}
