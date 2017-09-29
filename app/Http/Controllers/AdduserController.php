<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdduserController extends Controller
{
    public function index(){
        return view('admin.adduser');
    }

    public function adduser(Request $request){
        
        $this->validate($request,[
//            'username'=> 'required|unique:users',
            'email' => 'required|email',
            'nama' => 'required',
            'password'=>'required|min:6|confirmed',

        ]);

//        return $request->all();

        $user = new User();
        $user->name = $request->nama;
        $user->nickname = $request->nicknamee;
        $user->password = bcrypt($request->password);
        $user->level = $request->levell;
        $user->email = $request->email;
        $user->phone = $request->phonee;
        $user->steam = $request->steamm;
        $user->rank = $request->rankk;
//        $user->games_id = $request->game;
        $user->fee = $request->feee;
        $user->save();

        if($request->levell==2){
            return redirect('/admin/coachtable');
        }else{
            return redirect('/admin/usertable');
        }



    }
}
