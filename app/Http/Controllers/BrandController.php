<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
	    return view('admin.brand.index');
    }
    public function createPage()
    {
        return view('admin.brand.create');
    }
    public function create(Request $request)
    {
        $category = new Brand;
        $category->brand_name = $request->input('brand_name');
        $category->code = $request->input('code');
        $category->brand = $request->input('brand');
        $category->price = $request->input('price');
        $category->status = $request->input('status-input') === 'On' ? 1 : 0;
        $result = $category->save();
        
        if ($result) {
           return redirect()->route('brand_list')->with('success', 'Registered successfully!');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
    public function brand_list()
    {
    	$data = Brand::all();
    	return view('admin.brand.index',['brands'=>$data]);
    }
    public function show_brand($id)
     {
        $brand = brand::find($id);
        return view('admin.brand.edit',['brands'=>$brand]);
     }
     public function update_brand(Request $request,$id)
     {
        $data = Brand::findOrFail($id);
        $data->brand_name   = $request->brand_name;
        $data->code            = $request->code;
        $data->brand           = $request->brand;
        $data->price           = $request->price;
        $result                = $data->update();
        
        if ($result) {
            return redirect()->route('brand_list')->with('success', 'User Updated successfully!');
        } else {
            return back()->with('fail', 'User Not Updated');
        }
    }
    public function delete_brand($id)
     {
        $data = brand::find($id);
        $result = $data->delete();
        if ($result) {
            return back()->with('success', 'User Deleted successfully!');
        } else {
            return back()->with('fail', 'User Not Deleted');
        }
     }
}
