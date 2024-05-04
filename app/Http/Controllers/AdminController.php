<?php

namespace App\Http\Controllers;

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

        return view('pages.item.add', [
            'categories' => $categories,
            'styles' => $styles,
            'languages' => $languages,
            'licenses' => $licenses
        ]);
    }
}
