<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Font extends Model
{
    use HasFactory;

    protected $guarded = [];

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
