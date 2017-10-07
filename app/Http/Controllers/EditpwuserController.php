<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Toastr;

class EditpwuserController extends Controller
{
    public function index(){
        return view('user.editpwuser');
    }
    public function edit(Request $request){
        $this->validate($request,[
            'password'=>'required|min:6|confirmed',
        ]);
        $user = User::find($request->id);
        $user->password = bcrypt($request->password);
        Toastr::success('Sueccess Update Password', 'Success!');
        $user->save();

        return redirect('/user/editprofileuser');
    }
}
