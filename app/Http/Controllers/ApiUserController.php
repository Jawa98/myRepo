<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiUserController extends Controller
{
    //

    public function register(Request $request){
        $validate=Validator::make($request->all(),[
            'email'=>'required|unique:users',
            'name'=>'required',
            'password'=>'required'
        ]);
        if($validate->fails()){
            return response()->json(['error'=>'all field required'],400);
        }

        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->role='user';
        $user->save();
        
        $accesstoken=$user->createToken('Auth Token')->accessToken;
        return response()->json(['key'=>'success','value'=>$accesstoken]);

    }

    public function login(Request $request){
        $validate=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        if($validate->fails()){
            return response()->json(['error'=>'all field required'],400);
        }

        $user=User::where('email',$request->email)->first();
        if(Hash::check($request->password,$user->password)){
            $accesstoken=$user->createToken('Auth Token')->accessToken;
            return response()->json(['key'=>'success','value'=>$accesstoken]);

        }
        return response()->json(['error'=>'you are not auth'],400);
    }

    public function myinfo(){
        $user=auth('api')->user();
        if($user!=null)
            return response()->json(['key'=>'success','value'=>$user]);
        
        else
        return response()->json(['error'=>'you are not auth'],400);

    }


public function updateinfo(Request $request){
    $validate=Validator::make($request->all(),[
        'email'=>'required',
        'name'=>'required',
    ]);
    if($validate->fails()){
        return response()->json(['error'=>'all field required'],400);
    }
    $user=auth('api')->user();
    if($user!=null){
    $user->name=$request->name;
    $user->email=$request->email;
    $user->save();
    return response()->json(['key'=>'success','value'=>$user]);

}
else
return response()->json(['error'=>'you are not auth'],400);
   
}

public function allproduct(){
    $products=Product::paginate(10);
    return response()->json($products);


}


}
