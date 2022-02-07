<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
        
    }
    //my information
    public function myinfo(){
        $user=auth()->user();
        return view('users.myinfo')->with('user',$user);

    }
    //
    //update info
    public function showupdateinfo(){
        $user=auth()->user();
        return view('users.showupdateinfo')->with('user',$user);

    }
    //post info
    public function updateinfo(Request $request){
        $this->validate($request,[
            'name'=>'required|min:4',
            'email'=>'required'
    ]);

       $user=auth()->user();
       $user->name=$request->name;
       $user->email=$request->email;
       $user->save();
       return redirect('/myinfo')->with('success','your information updated');
       

    }
     //change pass
     public function showchangepass(){
        $user=auth()->user();
        if($user!=null)
        return view('users.showchangepass')->with('user',$user);

    }
    //post new pass
    public function changepass(Request $request){

        $user=auth()->user();
       if( Hash::check($request->oldpassword,$user->password)){
        $user->password=Hash::make($request->newpassword);
        $user->save();
        return redirect('/myinfo');
       }
       return redirect()-> back();
 
     }

     //show all user
     public function allusers(){
         $user=auth()->user();
        //  dd($user->role);
         if($user->role=="admain"){
        $allusers=User::where('role','user')->get();
         return view('users.allusers')->with('allusers',$allusers);
     }
      return redirect()->back();
    }


     //delete user
     public function deleteuser($id){
        $user=auth()->user();
        if($user->role=="admin"){
         $user=User::where('id',$id)->first();
         //$user=User::find($id);
         $user->delete();
         return redirect('/allusers')->with('success','user deleted');
        }
     }
      //upgrade user
      public function upgradeuser($id){
        $user=auth()->user();
        if($user->role=="admain"){
         $user=User::where('id',$id)->first();
         $user->role='admain';
         //$user=User::find($id);
         $user->save();
         return redirect('/allusers')->with('success','user upgraded');
        }
     }
     //showupdate user
     public function showupdate($id){
        $user=auth()->user();
        if($user->role=="admain"){
            $userinfo=User::where('id',$id)->first();
         return view('users.showupdate')->with('userinfo',$userinfo);
        }
     }
     //update user
     public function update(Request $request){
          $user=User::where('id',$request->id)->first();
          $user->name=$request->name;
          $user->save();
          return redirect('/allusers')->with('success','user updated');
       
     }
}
