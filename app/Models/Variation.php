<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use Cknow\Money\Money;

class Variation extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //add to trait to re-use later
    public function formattedPrice()
    {
        return Money::USD($this->price);
    }
}
