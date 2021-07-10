<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = "alumnos";

    protected $fillable = ["id", "Nombre", "Apellidos", "Nacimiento", "Ciudad", "escuela_id"];


    public function escuela()
    {
        return $this->belongsTo(Escuela::class, 'escuela_id');
    }
}
