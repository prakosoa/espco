<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;

class ListcoachController extends Controller
{
    public function index()
    {
        $coach = User::where('level',2)->paginate(4);
//        return $coach = User::where('id',1)->first();
//        return view('admin.coachtable')
        return view('guess.listcoach')->with('coach',$coach);
    }
    public function search(Request $request){
        // return $request->all();

        $temp=array();
        $i=0;
        if ($request->coachname != null){
            $temp[$i]=array("name",'like','%'.$request->coachname.'%');
            $i++;
        }
       
        if ($request->games != null){
            $temp[$i]=array("games_id",'like','%'.$request->games.'%');
            $i++;
        }

        $coach = User::where('level',2)->where($temp)->paginate(4);
        // return view('galery', [
        //     'show' => $show->appends(Input::except('page'))
        // ])->with('ind',$ind);
        
        // return view('guess.listcoach')
        // ->with('coach',$coach);
        return view('guess.listcoach', [
            'coach' => $coach->appends(Input::except('page'))
        ]);
    }

    
}
