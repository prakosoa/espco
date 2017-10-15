<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Storage;
use File;
use Toastr;

class EditprofileuserController extends Controller
{
    public function index(){
        Auth::user()->id;
        return view('user.editprofileuser');
    }
    public function editUser(Request $request){
        $this->validate($request,[
            // 'phonee'=> 'required|numeric|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:7168|dimensions:max_height=1300',
        ]);

        // return $request->all();
        

        $user = User::find($request->id);
        $user->name = $request->namee;
        $user->email = $request->emaill;
        $user->phone = $request->phonee;
        $user->steam = $request->steam;
        // Toastr::success('Sueccess Edit Profile', 'Success');
        $user->save();
        $path = $user->photo;
        if($request->image == 'storage/photo-profil/photo-default.jpg') {
            File::delete($path);
        }        

        $photo_profil = Storage::disk('local')->putFile('public/photo-profil', $request->file('image'));
        $user->photo = 'storage'.substr($photo_profil, 6);
        Toastr::success('Sueccess Edit Profile', 'Success');
        $user->save();

        // return redirect('/user/editprofileuser');
        return back();
       }
    }
    


