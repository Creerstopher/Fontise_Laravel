<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function catalogView()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('pages.catalog', compact('products', 'categories'));
    }

    public function productView(int $productId)
    {
        $product = Product::find($productId);

        return view('pages.product.product', compact('product'));
    }
}
