<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaitingForItem extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon_type',
        'type',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    public function scopeBlocks($query)
    {
        return $query->where('type', 'block');
    }

    public function scopeListItems($query)
    {
        return $query->where('type', 'list_item');
    }
}
