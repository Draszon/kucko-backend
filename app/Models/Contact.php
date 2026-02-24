<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'key',
        'value',
        'label',
        'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    /**
     * Elérhetőség lekérése kulcs alapján.
     * Pl. Contact::getByKey('phone') => '+36 20 931 7207'
     */
    public static function getByKey(string $key): ?string
    {
        return static::where('key', $key)->value('value');
    }

    /**
     * Összes elérhetőség asszociatív tömbként.
     * Pl. ['address' => 'Eger, ...', 'phone' => '+36 ...', ...]
     */
    public static function getAllAsArray(): array
    {
        return static::ordered()
            ->pluck('value', 'key')
            ->toArray();
    }
}
