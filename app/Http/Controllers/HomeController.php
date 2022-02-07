<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function myproduct(){
        $user=auth()->User();
        $products=Product::where('user_id',$user->id)->get();
        return view('products.myproduct',['products'=>$products]);

    }

    public function assignto($id){
       $user=auth()->user();
       if($user->role=='admain');
   //  $users=User::where('role','user')->get();
       $users=User::all();
       $product=Product::find($id);
       return view('admain.assignto')->with('users',$users)->with('product',$product);      
    }

     public function assign(Request $request){
        $user=auth()->user();
        if($user->role=='admain');
        $product=Product::find($request->product_id);
        $product->user_id=$request->user_id;
        $product->save();
        return  redirect('/products');
     }

}
