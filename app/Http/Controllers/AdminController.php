<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Language;
use App\Models\License;
use App\Models\Product;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $file = $request->file('font');

        $filename = $file->store('fonts');

        $product = Product::query()->create([
            'name' => $request->name,
            'filename' => $filename,
        ]);

        Storage::url('fonts/' . $filename);

        return redirect()->route('admin.product.create');
    }

    public function updateProduct(UpdateProductRequest $request)
    {
        Product::query()->where('id', $request->productId)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.product.edit');
    }

    public function show()
    {
        return view('pages.admin');
    }
}
