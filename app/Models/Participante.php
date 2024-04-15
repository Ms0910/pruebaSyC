<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
  
   
    protected $fillable = [
        'tipodoc',
        'documento',
        'fullname',
        'fechanac',
        'direccion',
        'telefono',
        'email',
        'archivo',
        'id_estado',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
