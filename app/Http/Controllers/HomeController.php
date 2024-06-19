<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Font;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $fonts = Font::query()
            ->with(['category'])
            ->limit(4)
            ->get();

        return view('pages.index', [
            'fonts' => $fonts,
        ]);
    }

    public function productView(int $productId)
    {
        $font = Font::query()->with(['license', 'category', 'styles', 'languages'])->where('id', $productId)->first();

        return view('pages.product.product', compact('font'));
    }

    public function downloadFont(int $productId)
    {
        $font = Font::query()->where('id', $productId)->first();

        $font->increment('downloads');

        return redirect()->route('font-download');
    }

    public function downloadFile(string $filePath)
    {
        return Storage::disk('public')->download($filePath);
    }
}
