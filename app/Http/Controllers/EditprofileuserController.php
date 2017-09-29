<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Storage;

class EditprofileuserController extends Controller
{
    public function index()
    {

        // return $c = 'public'.substr('storage/photo-profil/photo-default.jpg', 7);
        Auth::user()->id;
        return view('user.editprofileuser');
    }
    public function editUser(Request $request){
        $this->validate($request,[
            'phonee'=> 'required|numeric|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:7168|dimensions:max_height=1300',
        ]);

        // return $request->all();
        

        $user = User::find($request->id);
        $user->name = $request->namee;
        $user->email = $request->emaill;
        $user->phone = $request->phonee;
        // $user->steam = $request->steamm;
        $user->save();
        $path = 'app/public'.substr($user->photo, 7);
        if($request->image == 'storage/photo-profil/photo-default.jpg') {
            Storage::deleteDirectory($path);
        }

        $photo_profil = Storage::disk('local')->putFile('public/photo-profil', $request->file('image'));
        $user->photo = 'storage'.substr($photo_profil, 6);
        $user->save();

        // return redirect('/user/editprofileuser');
        return back();
       }
    }
    


