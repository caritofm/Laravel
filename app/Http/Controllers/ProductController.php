<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Models\Product;

class ProductController extends Controller
{
    public function index():View
    {
        $products = Product::all();
        return view('product.index', compact('product'));

    }
}
