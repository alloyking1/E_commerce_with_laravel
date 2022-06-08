<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cknow\Money\Money;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Manipulations;
// use App\Models\Manipulations;


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

    //add fall back image
    // public function registerMediaCollections(): void
    // {


    // }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('thumb200x200')
            ->fit(Manipulations::FIT_CROP, 200, 200);
    }
}
