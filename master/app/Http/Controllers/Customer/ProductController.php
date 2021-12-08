<?php

namespace App\Http\Controllers\Customer;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);
        return view('customers.products.index', ['products' => $products, 'categories' => Category::all(), 'brands' => Brand::all()]);
    }

    public function show(Product $product)
    {
        $categoryProduct = $product->category->id;

        $upsells = Product::where('category_id', $categoryProduct )->get();
        return view('customers.products.show', ['product' => $product,'upsells'=>$upsells]);
    }

    public function compare(Request $request)
    {
        $this->authorize('checkmember');

        $products = Product::all();
        $firstlaptop = "";
        $secondlaptop = "";
        if($request['firstlaptop']) $firstlaptop = Product::find($request['firstlaptop']);
        if($request['secondlaptop']) $secondlaptop = Product::find($request['secondlaptop']);
        return view('customers.products.compare', compact('products', 'firstlaptop', 'secondlaptop'));
    }

    public function addToCart(Product $product)
    {
        $cart = session()->get('cart');
        if (!isset($cart[$product->id])) {
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price * (1 - $product->disc / 100),
                "main_image" => $product->takeImage(),
                "slug" => $product->slug,
            ];
        } else {
            $cart[$product->id]['quantity']++;
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to Cart Succesfully!');
    }

    
    public function removeFromCart($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product removed to Cart Succesfully!');
    }

    public function emptyCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart is now Empty');
    }
}
