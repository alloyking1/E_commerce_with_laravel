<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductShowController extends Controller
{


    public function __invoke(Product $product)
    {
        //eager loading to solve the n+1 problem
        $product->load('variations.children', 'variations.descendantsAndSelf.stocks');
        return view('products.show', [
            "product" => $product
        ]);
    }
}
