<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pair extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'first_id',
        'second_id'
    ];

    public function first(): BelongsTo
    {
        return $this->belongsTo(Font::class, 'first_id', 'id');
    }

    public function second(): BelongsTo
    {
        return $this->belongsTo(Font::class, 'second_id', 'id');
    }

    public function fonts(): BelongsToMany
    {
        return $this->belongsToMany(Font::class, 'pairs', 'second_id', 'first_id');
    }
}
