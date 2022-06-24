<?php

namespace App\Http\Controllers;

use App\Models\Drzava;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DrzavaController extends Controller
{
    public function index()
    {
        
        
        $picas=Drzava::all();
     
        return view('Drzave',['drzave' => $picas]);
        
    }
    public function insertDrzava()
    {
        return view('Drzava');
        
    }

    public function getDrzava($drzavaId)
    {
        
     
     $Drzava=  Drzava::find($drzavaId);
     if($Drzava==null) abort(404);
     
     return  view('Drzave',['drzave'=>[$Drzava]]);
     
    }
    public function insert(Request $req)
    {
        
     
        $all= $req->all();
        $naziv=$req['Naziv'];
        $Drzava =new Drzava();
        $Drzava->Naziv=$naziv;
        $result=$Drzava->save();
        return view('resultView',['result'=>$result]);
    }
    public function Specific(Request $req)
    {
        
      
        $id=   $req->all()['id'];
        if($id==null) $id=-1;
     return redirect()->route('SpecificDrzava', [$id]);
    }
}
