<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cknow\Money\Money;

class Product extends Model
{
    use HasFactory;

    public function formattedPrice()
    {
        return Money::USD($this->price);
    }
}
