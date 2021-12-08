<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImageImageProduct;
use App\ImageProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageProductController extends Controller
{
    public function addImageProduct(Request $request)
    {
        $this->authorize('checkemployee');
        $id = $request['id'];

        $file = $request->file('image_product');
        $imgFile = time() . "_" . $file->getClientOriginalName();
        $file->move('storage/images/products/', $imgFile);
        $attr['filename'] = $imgFile;
        $attr['product_id'] = $id;

        ImageProduct::create($attr);
        session()->flash('success', 'New ImageProduct Succesfully Added');
        return back();
    }

    public function destroyImageProduct(Request $request)
    {
        $this->authorize('checkemployee');
        $imageProduct = ImageProduct::find($request['id']);
        File::delete($imageProduct->takeImage());
        $imageProduct->delete();
        session()->flash('success', "ImageProduct $imageProduct->id successfuly deleted");

        return response()->json(array(
            'msg' => "Success"
        ), 200);
    }
}
