<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Font;
use App\Models\Language;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\Component;

class Catalog extends Component
{
    public string $searchFont = "";
    public int $searchCategory = 0;
    public Collection $categories;

    public array $searchLanguages = [];
    public Collection $languages;

    public function mount(): void
    {
        $this->categories = Category::pluck('name', 'id');
        $this->languages = Language::pluck('name', 'id');
    }

    public function render(): Factory|View
    {
        $fonts = Font::query()
            ->with(['category', 'languages'])
            ->when($this->searchFont !== '', fn(Builder $query) => $query->where('name', 'like', '%' . $this->searchFont . '%'))
            ->when($this->searchCategory > 0, fn(Builder $query) => $query->where('category_id', $this->searchCategory))
            ->when(count($this->searchLanguages) > 0, function (Builder $query) {
                $query->whereHas('fontLanguages', function (Builder $b) {
                    $b->whereIn('language_id', $this->searchLanguages);
                });
            })
            ->get();

        return view('livewire.catalog', [
            'fonts' => $fonts,
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
