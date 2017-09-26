<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class EditprofilecoachController extends Controller
{
    public function index(){
        $user=Auth::user();
        return view('coach.editprofilecoach')->with('user',$user);
    }

    public function editCoach(Request $request){
//        $this->validate($request)
   //return $request->all();

        $this->validate($request,[
//            'username'=> 'required|unique:users',
            'email' => 'required|email|unique:users',
            'nama' => 'required',
            'password'=>'required|min:6|confirmed',
            'phone'=>'required',
            'rank'=>'required',
            'steam'=>'required',
            'fee'=>'required',

//            'gender' => 'required',
//            'tgl_lahir' => 'required',
//            'email' => 'required|email|unique:users',
//            'nomor' => 'required|numeric|min:12',
//            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::find($request->id);
        $user->name = $request->nama;
        $user->email = $request->emaill;
        $user->password = bcrypt($request->password);
        $user->nickname = $request->nicknamee;
        $user->phone = $request->phonee;
        $user->steam = $request->steamm;
        $user->rank = $request->rankk;
        $user->fee = $request->feee;
        $user->about = $request->aboutme;
        $user->save();
//        $coach = Auth::user();


        return redirect('/coach/editprofilecoach');
    }
}
