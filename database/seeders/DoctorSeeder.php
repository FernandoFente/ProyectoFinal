<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctores')->insert([
            'departamento' => 'Clinico',
            'matricula' => '524324385',
            'apellido' => 'Sancho',
        ]);

        DB::table('doctores')->insert([
            'departamento' => 'Pediatra',
            'matricula' => '845743241',
            'apellido' => 'Rodriguez',
        ]);

        DB::table('doctores')->insert([
            'departamento' => 'Traumatologo',
            'matricula' => '35261789',
            'apellido' => 'Fernandez',
        ]);

        DB::table('doctores')->insert([
            'departamento' => 'Dermatologo',
            'matricula' => '56464654',
            'apellido' => 'Gomez',
        ]);
    }
}
