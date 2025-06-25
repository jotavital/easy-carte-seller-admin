<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'store_id',
    ];

    public function getPriceAttribute($value)
    {
        return $value / 100;
    }

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 2);
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = (int) round($value * 100);
    }
}
