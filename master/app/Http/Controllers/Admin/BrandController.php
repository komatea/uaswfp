<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        $brands = new Brand();
        if (request('keyword')) {
            $wildcards = '%' . request('keyword') . '%';
            $brands = $brands->where(request('searchBy'), 'like', $wildcards);
        }
        $brands = $brands->paginate(12);

        return view('admins.brands.index', compact('brands'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request['name']);
        Brand::create($data);
        session()->flash('success', 'New Brand Succesfully Created');
        return redirect()->to(route('admins.brands.index'));
    }

    public function changeImage(Request $request){
        $id = $request->get('id');
        $brand = Brand::find($id);
       
        // Remove the old Image
        File::delete($brand->takeImage());

        $file = $request->file('logo_image');
        $imgFile = time() . "_" . $file->getClientOriginalName();
        $file->move('storage/images/brands/', $imgFile);


        $brand->logo_image = $imgFile;
        $brand->save();
        return redirect()->route('admins.brands.index')->with('status', 'Brand Logo has Changed');
    }

    public function updateInline(Request $request)
    {
        $id = $request->get('id');
        $fname = $request->get('fname');
        $value = $request->get('value');

        $brand = Brand::find($id);
        $brand->$fname = $value;
        $brand->save();
        return response()->json(array('status' => 'OK', 'msg' => 'Brand Data Updated'), 200);
    }

    public function destroyNoReload(Request $request)
    {
        $brand = Brand::find($request['id']);
        File::delete($brand->takeImage());
        $brand->delete();
        return response()->json(array(
            'msg' => "Success"
        ), 200);
    }
}
