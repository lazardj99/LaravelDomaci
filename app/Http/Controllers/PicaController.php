<?php

namespace App\Http\Controllers;

use App\Models\Pica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PicaController extends Controller
{
    public function index()
    {
        
      
        $picas=pica::all();
     
        return view('Picas',['picas' => $picas]);
    }
    public function getPica($picaID)
    {
        
        
     $pica=  Pica::find($picaID);
     if($pica==null) abort(404);
     return  view('Picas',['picas'=>[$pica]]);
     
    }


    public function show($picaID)
    {
        
       
     $pica=  Pica::find($picaID);
     if($pica==null) abort(404);
     return  view('Picas',['picas'=>[$pica]]);
     
    }
    public function insertPica()
    {
        
       
       return view('Pica');
    }
    public function insert(Request $req)
    {
        
     
        $all=$req->all();
        $naziv=$all['PicaName'];
        $cena=$all['Cena'];
        $poreklo=$all['Poreklo'];
        $ocena=$all['Ocena'];

        $pica =new Pica();
        $pica->naziv=$naziv;
        $pica->cena=$cena;
        $pica->poreklo_id=$poreklo;
        $pica->ocena=$ocena;

        $result=$pica->save();
        return view('resultView',['result'=>$result]);
             
    }
    public function Specific(Request $req)
    {
        
       
        
        $id=   $req->all()['id'];
        if($id==null) $id=-1;
       
     return redirect()->route('SpecificPica', [$id]);
    }
}
