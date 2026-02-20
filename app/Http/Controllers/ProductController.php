<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // This is the missing piece!
    public function index()
    {
        $products = Product::all();
        return view('pages.home', compact('products'));
    }
}
