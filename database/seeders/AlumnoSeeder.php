<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $alumno = new Alumno();

        $alumno->Nombre = "Ruben";
        $alumno->Apellidos = "Serret";
        $alumno->Nacimiento = '06-05-1996';
        $alumno->Ciudad = "Tarragona";
        $alumno->escuela_id = 1;

        $alumno->save();

    }
}
