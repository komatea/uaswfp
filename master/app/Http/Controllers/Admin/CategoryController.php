<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = new Category();
        if (request('keyword')) {
            $wildcards = '%' . request('keyword') . '%';
            $categories = $categories->where(request('searchBy'), 'like', $wildcards);
        }
        $categories = $categories->paginate(12);

        return view('admins.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request['name']);
        Category::create($data);
        session()->flash('success', 'New Category Succesfully Created');
        return redirect()->to(route('admins.categories.index'));
    }

    public function updateInline(Request $request)
    {
        $id = $request->get('id');
        $fname = $request->get('fname');
        $value = $request->get('value');

        $category = Category::find($id);
        $category->$fname = $value;
        $category->save();
        return response()->json(array('status' => 'OK', 'msg' => 'Category Data Updated'), 200);
    }

    public function destroyNoReload(Request $request)
    {
        $category = Category::find($request['id']);
        $category->delete();
        return response()->json(array(
            'msg' => "Success"
        ), 200);
    }
}