<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Toastr;
class EditcoachController extends Controller
{
    public function index($id){
        $coach=User::find($id);
        return view('admin.editcoach')->with('coach',$coach);
    }
    public function editCoach(Request $request){
//        $this->validate($request)
    //    return $request->all();

        $this->validate($request,[
//            'username'=> 'required|unique:users',
            // 'email' => 'required|email|unique:users',
            // 'nama' => 'required',
            // 'password'=>'required|min:6|confirmed',


//            'gender' => 'required',
//            'tgl_lahir' => 'required',
//            'email' => 'required|email|unique:users',
//            'nomor' => 'required|numeric|min:12',
//            'password' => 'required|min:6|confirmed',
        ]);
        $coach = User::find($request->id);
        $coach->name = $request->nama;
        $coach->email = $request->emaill;
        $coach->nickname = $request->nicknamee;
        $coach->phone = $request->phonee;
        $coach->steam = $request->steamm;
        $coach->rank = $request->rankk;
        $coach->fee = $request->feee;
        Toastr::success('Sueccess Edit User', 'Success!!');
        $coach->save();

        return redirect('/admin/coachtable');
    }
    public function destroy(Request $request){

//        return $request->all();
        $coach = User::find($request->id);
        Toastr::success('Sueccess Delete', 'Success!!');
        $coach->delete();

        return redirect('/admin/coachtable');
    }



}
