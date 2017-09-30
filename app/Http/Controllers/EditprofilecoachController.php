<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Storage;


class EditprofilecoachController extends Controller
{
    public function index(){
        Auth::user()->id;
        return view('coach.editprofilecoach');
    }

    public function editCoach(Request $request){
        // return $request->all();
        $this->validate($request,[
            // 'emaill' => 'required|email|unique:users',
            // 'name' => 'required',
            // 'password'=>'required|min:6|confirmed',
            // 'phone'=>'required',
            // 'rank'=>'required',
            // 'steam'=>'required',
            // 'fee'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:7168|dimensions:max_height=1300',
        ]);
        

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
        $user->about = $request->about;
        $user->save();

        // $path = 'app/public'.substr($user->photo, 7);
        // if($request->image == 'storage/photo-profil/photo-default.jpg') {
        //     Storage::deleteDirectory($path);
        // }

        $photo_profil = Storage::disk('local')->putFile('public/photo-profil', $request->file('image'));
        $user->photo = 'storage'.substr($photo_profil, 6);
        $user->save();


        // return redirect('/coach/editprofilecoach');
        return back();
        
    }
}
