<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    use HasFactory;

    protected $table = "escuelas";


    protected $fillable = ["id", "Nombre", "Direccion", "logotipo", "Correo", "Telefono", "Web"];




    public function alumno()
    {
        return $this->hasOne(Alumno::class, 'escuela_id');
    }

}
