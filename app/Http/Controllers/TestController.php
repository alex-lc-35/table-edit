<?php

namespace App\Http\Controllers;

use App\Models\Product;

class TestController extends Controller
{
    public function index()
    {
        $products = Product::query()->select(['name', 'price'])->get();

        dd($products);
    }
}
