<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();

        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = '$2y$10$NAqpWF07SzRao9tfICNWiuHZsaY032r0SoqoGvvgeql0bkzdfjgvi';

        $user->save();


        $this->call(EscuelaSeeder::class);
        $this->call(AlumnoSeeder::class);
    }
}
