<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function dashboard()
    {
    return view('admin.dashboard');
    }
    public function icon()
    {
    return view('admin.pages.icon');
    }
    public function map()
    {
    return view('admin.pages.map');
    }
    public function profile()
    {
    $user = auth()->user();
    return view('admin.pages.profile',['user'=>$user]);
    //return view('admin.pages.profile');
    }
    public function login()
    {
    return view('admin.pages.login');
    }
    public function signup()
    {
    return view('admin.pages.register');
    }
    // public function index()
    // {
    // return view('admin.category.index');
    // }
    public function createPage()
    {
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));    
    }
    public function create(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->input('category_name');
        $category->parent_category = $request->input('parent_category');
        $category->code = $request->input('code');
        $category->brand = $request->input('brand');
        $category->price = $request->input('price');
        $category->status = $request->input('status-input') === 'On' ? 1 : 0;
        $result = $category->save();
        
        if ($result) {
            return redirect()->route('list')->with('success', 'Registered successfully!');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
    public function list(){
    	$data = category::get();
    	return view('admin.category.index',['getData'=>$data]);
    }
    //edit fetch data
    public function showData($id){
        $category = category::find($id);
        return view('admin.category.edit',['display'=>$category]);
     }
     //finaly update
     public function update(Request $request,$id){
        $data = category::findOrFail($id);
        $data->category_name   = $request->category_name;
        $data->parent_category = $request->parent_category;
        $data->code            = $request->code;
        $data->brand           = $request->brand;
        $data->price           = $request->price;
        $result                = $data->save();
        
        if ($result) {
             return redirect()->route('list')->with('success', 'User Updated successfully!');
        } else {
            return back()->with('fail', 'User Not Updated');
        }
    }
     //delete data;
     public function category_delete($id)
     {
        $data = category::find($id);
        $result = $data->delete();
        if ($result) {
            return back()->with('success', 'User Deleted successfully!');
        } else {
            return back()->with('fail', 'User Not Deleted');
        }
     }
  ///userprofile inserted data
  public function createUser(Request $request)
{
    if (auth()->check()) {
        $user = auth()->user();
        $user->user_name = $request->input('user_name');
        $user->last_name = $request->input('last_name');
        //$user->name = $request->input('name');
        //$user->email = $request->input('email');
        //$user->password = bcrypt($request->input('password'));
        $user->adress = $request->input('adress');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->postal_code = $request->input('postal_code');
        $user->about_me = $request->input('about_me');
        $image_names = [];

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $ext = $image->getClientOriginalExtension();
                $image_name = time() . '.' . $ext;
                $image->move('client/images', $image_name);
                $image_names[] = $image_name;
            }
        }

        $user->image = implode(',', $image_names);

        $result = $user->update();

        if ($result) {
            return back()->with('success', 'Profile updated successfully!');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    } else {
        return redirect()->route('login');
    }
}



}
