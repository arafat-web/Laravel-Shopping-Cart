<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::take(8)->orderBy('id', 'desc')->get();
        return view('home', compact('products'));
    }
    public function productList()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('products', compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }
}
