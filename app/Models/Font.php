<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Font extends Model
{
    protected $guarded = [];

    public function firstPair(): HasMany
    {
        return $this->hasMany(Pair::class, 'first_id', 'id');
    }

    public function secondPair(): HasMany
    {
        return $this->hasMany(Pair::class, 'second_id', 'id');
    }

    public function pairs(): BelongsToMany
    {
        return $this->belongsToMany(Pair::class, 'pairs', 'first_id', 'second_id');
    }

    public function license(): BelongsTo
    {
        return $this->belongsTo(License::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function fontLanguages(): HasMany
    {
        return $this->hasMany(FontLanguage::class);
    }

    public function fontStyles(): HasMany
    {
        return $this->hasMany(FontStyle::class);
    }

    public function styles(): BelongsToMany
    {
        return $this->belongsToMany(Style::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }
}
