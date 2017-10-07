<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Toastr;
use Auth;
use Illuminate\Support\Facades\Storage;

class EditprofilecoachController extends Controller
{
    public function index(){
        Auth::user()->id;
        return view('coach.editprofilecoach');
    }

    public function editCoach(Request $request){
        $this->validate($request,[
            // 'emaill' => 'required|email|unique:users',
            // 'name' => 'required',
            // 'password'=>'required|min:6|confirmed',
            // 'phone'=>'required',
            // 'rank'=>'required',
            // 'steam'=>'required',
            // 'fee'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:7168',
        ]);
        // return $request->all();

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        $user->nickname = $request->nickname;
        $user->phone = $request->phone;
        $user->steam = $request->steam;
        $user->rank = $request->rank;
        $user->games_id = $request->games_id;
        $user->fee = $request->fee;
        $user->bank = $request->bank;
        $user->about = $request->about;
        Toastr::success('Sueccess Edit Profile', 'Success');
        $user->save();

        // return $path = 'app/public'.substr($user->photo, 7);
        $path = substr($user->photo, 21);
        if($request->image != 'storage/photo-profil/photo-default.jpg') {
            Storage::delete('app/public/photo-profil/'.$path);
        }

        $photo_profil = Storage::disk('local')->putFile('public/photo-profil', $request->file('image'));
        $user->photo = 'storage'.substr($photo_profil, 6);
        Toastr::success('Sueccess Edit Profile', 'Success');
        $user->save();


        // return redirect('/coach/editprofilecoach');
        return back();
        
    }
}
