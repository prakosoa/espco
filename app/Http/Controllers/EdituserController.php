<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EdituserController extends Controller
{
    public function index($id){
        $user=User::find($id);
        return view('admin.edituser')->with('user',$user);
    }
    public function editUser(Request $request){

        $user = User::find($request->id);
        $user->name = $request->namee;
        $user->email = $request->emaill;
        $user->phone = $request->phonee;
        $user->steam = $request->steamm;
        $user->save();

        return redirect('/admin/usertable');
    }
    public function destroy(Request $request){

//        return $request->all();
        $user = User::find($request->id);
        $user->delete();

        return redirect('/admin/usertable');
    }
}
