<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Language;
use App\Models\License;
use App\Models\Pair;
use App\Models\Product;
use App\Models\Style;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function adminView()
    {
        $products = Product::query()->get();
        $users = User::query()->get();
        $pairs = Pair::query()->get();
        return view('pages.admin', compact('products', 'users', 'pairs'));
    }

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

    public function editProduct(UpdateProductRequest $request, int $productId)
    {
        $id = $request->input('productId');
        $product = Product::find($productId);
        $categories = Category::query()->get();
        $styles = Style::query()->get();
        $languages = Language::query()->get();
        $licenses = License::query()->get();

        return view('pages.product.edit', [
            'product' => $product,
            'categories' => $categories,
            'styles' => $styles,
            'languages' => $languages,
            'licenses' => $licenses
        ]);
    }

    public function storeProduct(CreateProductRequest $request)
    {
        $file = $request->file('file');
        $file_download = $request->file('file_download');

        $filename = $file->store('fonts');
        $filename_download = $file_download->store('fonts_download');

        $products = Product::query()->create([
            'name' => $request->name,
            'information' => $request->information,
            'price' => $request->price,
            'category' => $request->category,
            'license' => $request->license,
            'styles' => $request->styles,
            'file' => $filename,
            'file_download' => $filename_download,
        ]);

        dd($products);

        Storage::url('fonts/' . $filename);
        Storage::url('fonts_download/' . $filename_download);

        return redirect()->route('admin.product.create');
    }

    public function updateProduct(UpdateProductRequest $request)
    {
        Product::query()->where('id', $request->productId)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.product.edit');
    }

}
