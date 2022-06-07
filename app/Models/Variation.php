<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use Cknow\Money\Money;
use App\Models\Stock;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Variation extends Model implements HasMedia
{
    use HasFactory;
    use HasRecursiveRelationships;
    use InteractsWithMedia;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function inStock()
    {
        return $this->stockCount() > 0;
    }

    public function lowStock()
    {
        return !$this->outOfStock() && $this->stockCount() < 5;
    }

    public function outOfStock()
    {
        return !$this->inStock();
    }

    public function stockCount()
    {
        return $this->descendantsAndSelf->sum(fn ($variation) => $variation->stocks->sum('amount'));
    }

    //add to trait to re-use later
    public function formattedPrice()
    {
        return Money::USD($this->price);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('thumb200x200')
            ->fit(Manipulations::FIT_CROP, 200, 200);
    }
}
