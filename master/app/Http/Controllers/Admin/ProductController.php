<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $this->authorize('checkemployee');
        $products = new Product();
        $products = $products->join('brands', 'products.brand_id', '=', 'brands.id')->join('categories', 'products.category_id', '=', 'categories.id');
        if (request('keyword')) {
            $wildcards = '%' . request('keyword') . '%';
            $products = $products->where(request('searchBy'), 'like', $wildcards);
        }
        $products = $products->select('products.*')->paginate(5);
        return view('admins.products.index', compact('products'));
    }

    public function create()
    {
        $this->authorize('checkemployee');
        $brands = Brand::all();
        $categories = Category::all();
        return view('admins.products.create', compact('brands', 'categories'));
    }

    public function store(Request $request)
    {
        $this->authorize('checkemployee');
        $request->validate([
            'name' => 'required',
            'price' => ['required', 'numeric'],
            'disc' => ['required', 'numeric'],
            'description' => 'required',
            'weight' => ['required', 'numeric'],
            'slug' => 'required',
            'main_image' => ['required', 'image'],
            'brand_id' => 'required',
            'category_id' => 'required',
        ]);

        $data = $request->all();

        $file = $request->file('main_image');
        $imgFile = time() . "_" . $file->getClientOriginalName();
        $file->move('storage/images/products/', $imgFile);
        $data['main_image'] = $imgFile;

        Product::create($data);
        session()->flash('success', 'New Product Succesfully Created');
        return redirect()->to(route('admins.products.index'));
    }

    public function show(Product $product)
    {
        $this->authorize('checkemployee');
        return view('admins.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $this->authorize('checkemployee');
        $brands = Brand::all();
        $categories = Category::all();
        return view('admins.products.edit', compact('product', 'brands', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $this->authorize('checkemployee');
        $attr = $request->all();

        if ($request->file('main_image')) {
            File::delete($product->takeImage());
            $file = $request->file('main_image');
            $imgFile = time() . "_" . $file->getClientOriginalName();
            $file->move('storage/images/products/', $imgFile);
            $attr['main_image'] = $imgFile;
        }

        $product->update($attr);
        session()->flash("success", "Product $product->id successfuly updated");
        return redirect()->to(route('admins.products.index'));
    }

    public function destroy(Product $product)
    {
        $this->authorize('checkemployee');
        $product->delete();
        session()->flash('success', "Product $product->id successfuly deleted");
        return redirect()->to(route('admins.products.index'));
    }

    public function destroyNoReload(Request $request)
    {
        $this->authorize('checkemployee');
        $product = Product::find($request['id']);
        File::delete($product->takeImage());
        $product->delete();
        return response()->json(array(
            'msg' => "Success"
        ), 200);
    }
}
