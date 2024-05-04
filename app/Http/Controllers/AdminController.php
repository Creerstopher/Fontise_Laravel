<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Language;
use App\Models\License;
use App\Models\Style;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addProduct()
    {
        $categories = Category::query()->get();
        $styles = Style::query()->get();
        $languages = Language::query()->get();
        $licenses = License::query()->get();

        return view('pages.product.add', [
            'categories' => $categories,
            'styles' => $styles,
            'languages' => $languages,
            'licenses' => $licenses
        ]);
    }

    public function editProduct()
    {
        return view('pages.product.edit');
    }

    public function storeProduct(CreateProductRequest $request)
    {
        return redirect()->route('admin.product.create');
    }

    public function updateProduct(UpdateProductRequest $request)
    {
        return redirect()->route('admin.product.edit');
    }

    public function show()
    {
        return view('pages.admin');
    }
}
