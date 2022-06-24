<?php

namespace App\Http\Controllers;

use App\Models\PicaUser;
use App\Models\User;
use Illuminate\Http\Request;

class PicaUserController extends Controller
{
    public function index($userid)
    {
        $user=User::find($userid);
        if($user==null) abort(404);
    
        return $user->picas;

    }
    public function getAllInfo(){
        return PicaUser::all();
    }
}
