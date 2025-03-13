<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('grupos')->insert([
            [
                'grupo' => 'Administración',
                'descripcion' => 'Grupo encargado de la gestión administrativa y financiera.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'grupo' => 'Desarrollo',
                'descripcion' => 'Equipo de desarrollo de software y mantenimiento de sistemas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'grupo' => 'Recursos Humanos',
                'descripcion' => 'Responsable de la gestión del personal y cultura organizacional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'grupo' => 'Marketing',
                'descripcion' => 'Departamento de estrategias de marketing y publicidad.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'grupo' => 'Ventas',
                'descripcion' => 'Encargado de la comercialización y atención al cliente.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
