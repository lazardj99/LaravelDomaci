<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pica extends Model
{
    use HasFactory;
   
    public function Drzava()
    {
     return $this->hasOne(pica::class);
    }
    public function users()
    {
     //   return $this->belongsToMany('App\User','users','pica_id','user_id');                 
        return $this->belongsToMany(User::class);
    }

}
