<?php

namespace Database\Seeders;

use App\Models\Escuela;
use Illuminate\Database\Seeder;

class EscuelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $escuela = new Escuela();

        $escuela->Nombre = "IES TGN";
        $escuela->Direccion = "C/ 1";
        $escuela->logotipo = "apple.png";
        $escuela->Correo = "correo@gmail.com";
        $escuela->Telefono = "123456789";
        $escuela->Web = "web1.com";

        $escuela->save();

        $escuela = new Escuela();
        $escuela->Nombre = "escuela part alta ";
        $escuela->Direccion = "C/ 2";
        $escuela->logotipo = "apple.png";
        $escuela->Correo = "correo2@gmail.com";
        $escuela->Telefono = "123456789";
        $escuela->Web = "web2.com";

        $escuela->save();

        $escuela = new Escuela();
        $escuela->Nombre = "randomize";
        $escuela->Direccion = "C/ 3";
        $escuela->logotipo = "apple.png";
        $escuela->Correo = "correo3@gmail.com";
        $escuela->Telefono = "123456789";
        $escuela->Web = "web3.com";

        $escuela->save();

        $escuela = new Escuela();
        $escuela->Nombre = "IES tarragona";
        $escuela->Direccion = "C/ 4";
        $escuela->logotipo = "apple.png";
        $escuela->Correo = "correo4@gmail.com";
        $escuela->Telefono = "123456789";
        $escuela->Web = "web4.com";

        $escuela->save();

        $escuela = new Escuela();
        $escuela->Nombre = "IES prova";
        $escuela->Direccion = "C/ 5";
        $escuela->logotipo = "apple.png";
        $escuela->Correo = "correo5@gmail.com";
        $escuela->Telefono = "123456789";
        $escuela->Web = "web5.com";

        $escuela->save();
    }
}
