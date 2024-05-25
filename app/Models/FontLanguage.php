<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FontLanguage extends Model
{
    protected $table = 'font_language';
    public $timestamps = false;

    protected $fillable = [
        'language_id',
        'font_id'
    ];

    public function font(): BelongsTo
    {
        return $this->belongsTo(Font::class);
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }
}
