<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FontStyle extends Model
{
    protected $table = 'font_style';
    public $timestamps = false;

    protected $fillable = [
        'style_id',
        'font_id'
    ];

    public function font(): BelongsTo
    {
        return $this->belongsTo(Font::class);
    }

    public function style(): BelongsTo
    {
        return $this->belongsTo(Style::class);
    }
}
