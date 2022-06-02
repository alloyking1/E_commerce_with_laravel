<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    //

    public function __invoke()
    {
        $category = Category::tree()->get()->toTree();
        return view('home', [
            'category' => $category
        ]);
    }
}
