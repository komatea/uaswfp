<?php

namespace App\Http\Controllers\Customer;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestProduct = Product::orderBy('created_at','desc')->take(6)->get();
        return view('customers.index', ['latestProduct' => $latestProduct, 'categories' => Category::all(), 'brands' => Brand::all()]);
    }
}
