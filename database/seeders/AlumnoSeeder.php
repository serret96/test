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

        $alumno = new Alumno();

        $alumno->Nombre = "Marc";
        $alumno->Apellidos = "Serret";
        $alumno->Nacimiento = '06-05-1998';
        $alumno->Ciudad = "Tarragona";
        $alumno->escuela_id = 1;

        $alumno->save();

        $alumno = new Alumno();

        $alumno->Nombre = "Lluis";
        $alumno->Apellidos = "Gomez";
        $alumno->Nacimiento = '06-05-1998';
        $alumno->Ciudad = "Tarragona";
        $alumno->escuela_id = 1;

        $alumno->save();

        $alumno = new Alumno();

        $alumno->Nombre = "Anna";
        $alumno->Apellidos = "Campas";
        $alumno->Nacimiento = '06-05-1999';
        $alumno->Ciudad = "Balaguer";
        $alumno->escuela_id = 1;

        $alumno->save();

        $alumno = new Alumno();

        $alumno->Nombre = "Ruben2";
        $alumno->Apellidos = "Serret";
        $alumno->Nacimiento = '06-05-1996';
        $alumno->Ciudad = "Tarragona";
        $alumno->escuela_id = 1;

        $alumno->save();

        $alumno = new Alumno();

        $alumno->Nombre = "Ruben3";
        $alumno->Apellidos = "Serret";
        $alumno->Nacimiento = '06-05-1996';
        $alumno->Ciudad = "Tarragona";
        $alumno->escuela_id = 1;

        $alumno->save();

    }
}
