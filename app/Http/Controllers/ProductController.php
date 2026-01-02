<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Product;
use App\Models\Brand;

class ProductController extends Controller
{
    public function product_list()
    {
	    $products = Product::with('brand', 'category')->get();
    	return view('admin.product.index', compact('products'));
    }

    public function getData()
    {
	    $products = Product::with('brand', 'category')->get();
    	return view('admin.product.index', compact('products'));
    }
    public function create_Page()
    {
        $brands = Brand::all();
	    $categories = Category::all();
	    return view('admin.product.create', compact('brands', 'categories'));
    }
     public function create_product(Request $request)
    {
    	if ($request->hasFile('image')) {
	    $image = $request->file('image');
	    $ext = $image->getClientOriginalExtension(); // Get the original extension
	    $image_name = time() . '.' . $ext;
	    $image->move('product/images', $image_name);
	    $save_name = $image_name;
        $product = new Product;
        $product->bar_code = $request->input('bar_code');
        $product->product_code = $request->input('product_code');
        $product->product_name = $request->input('product_name');
        $product->brand_id = $request->input('brand_id');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->stock_level = $request->input('stock_level');
        $product->status = $request->input('status-input') === 'On' ? 1 : 0;
        $product->stock_level = $request->input('stock_level');
        $product->image = $save_name;

        $result = $product->save();

        if ($result) {
            return redirect()->route('product_list')->with('success', 'Product registered successfully!');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
      } else {
        return back()->with('fail', 'Please upload an image');
      }
    }
    public function show_product($id){
         $product = Product::with('brand', 'category')->find($id);
    $brands = Brand::all();
    $categories = category::all(); // Fetch all brands
    return view('admin.product.edit', compact('product', 'brands','categories'));
     }

     public function delete_product($id)
     {
        $data = product::find($id);
        $result = $data->delete();
        if ($result) {
            return back()->with('success', 'User Deleted successfully!');
        } else {
            return back()->with('fail', 'User Not Deleted');
        }
     }
    public function update_product(Request $request,$id)
    {
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $image_name = time() . '.' . $ext;
        $image->move('product/images', $image_name);
        $save_name = $image_name;
        $product =Product::findOrFail($id);;
        $product->bar_code = $request->input('bar_code');
        $product->product_code = $request->input('product_code');
        $product->product_name = $request->input('product_name');
        $product->brand_id = $request->input('brand_id');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->stock_level = $request->input('stock_level');
        $product->stock_level = $request->input('stock_level');
        $product->image = $save_name;
        
        $result = $product->update();

        if ($result) {
             return redirect()->route('product_list')->with('success', 'Product Updated successfully!');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
      } else {
        return back()->with('fail', 'Please upload an image');
      }
    }
}