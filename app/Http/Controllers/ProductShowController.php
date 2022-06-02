<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductShowController extends Controller
{
    //

    public function __invoke(Product $product)
    {
        return view('products.show', [
            "product" => $product
        ]);
    }
}
