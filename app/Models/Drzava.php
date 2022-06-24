<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drzava extends Model
{
    use HasFactory;

    public function pica()
    {
        return $this->belongsTo(pica::class); 
    }
}
