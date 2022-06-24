<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {

   
    //   $us=$email = Auth::user();
       //dd($us);
      
       $users=User::all();
 

        
     
        return view('Users',['users' => $users]);
  
    }
    public function getUser($id)
    {
       
       
     $user=User::find($id);
        if($user==null) abort(404);
        return view('Users',['users'=>[$user]]);
    }

    public function show($id)
    {
       
     $user=User::find($id);
        if($user==null) abort(404);
        return view('Users',['users'=>[$user]]);
    }
    public function Specific(Request $req)
    { 
        
        $id=   $req->all()['id'];
        if($id==null) $id=-1;
     return redirect()->route('SpecificUser',[$id]);
    }
}
