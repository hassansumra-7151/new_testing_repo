<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\Product;
use App\Models\Brand;

class CartController extends Controller
{
    public function index_cart($id)
    {
	    $products = DB::select('select * from products where id = ?', [$id]);
	    return view('admin.cart.cart_list', compact('products'));
    }

	public function add_cart()
	{
	    $products = Product::all();
	    return view('admin.cart.add_to_cart', compact('products'));
	}

}
