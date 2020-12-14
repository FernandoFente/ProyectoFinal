<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnoAfiliado extends Model
{
    use HasFactory;

    public function afiliado(){
        return $this->belongsTo('App\Models\Afiliado');
    }
}
