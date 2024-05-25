<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Font;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function catalogView()
    {
        $products = Font::all();
        $categories = Category::all();
        return view('pages.catalog', compact('products', 'categories'));
    }

    public function productView(int $productId)
    {
        $font = Font::query()->with(['license', 'category', 'styles', 'languages'])->where('id', $productId)->first();

        return view('pages.product.product', compact('font'));
    }
}
