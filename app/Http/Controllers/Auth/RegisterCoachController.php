<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterCoachController extends Controller
{
    //
    public function index(){
        return view('auth.registercoach');
    }
    public function regist(Request $request)
    {
        $this->validate($request,[
            // 'username'=> 'required|unique:users',
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password'=>'required|min:6|confirmed',
            'steam' => 'required',
            'nickname' => 'required',
            'rank' => 'required',
            'phone' => 'required|numeric|min:2',
            'fee' => 'required|numeric',
               
        ]);


        // return $request->All();
        $user = new User();
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->steam = $request->steam;
        $user->rank = $request->rank;
        $user->games_id = $request->game;
        $user->fee = $request->fee;
        $user->save();

        return redirect('/login');
        
     }
    
}



