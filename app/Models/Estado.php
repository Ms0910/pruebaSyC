<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_estado'; 

    protected $fillable = [
        'estado',
    ];

    // Definir la relación con los participantes
    public function participantes()
    {
        return $this->hasMany(Participante::class, 'id_estado');
    }
}
