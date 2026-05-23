<?php

namespace App\Http\Controllers;

use App\Models\Product;

class LandingController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'umkm'])->latest()->get();
        return view('landing.home', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with(['category', 'umkm'])->findOrFail($id);
        return view('landing.detail-product', compact('product'));
    }
}