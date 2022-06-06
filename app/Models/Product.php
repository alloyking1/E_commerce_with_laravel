<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cknow\Money\Money;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function formattedPrice()
    {
        return Money::USD($this->price);
    }

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
}
