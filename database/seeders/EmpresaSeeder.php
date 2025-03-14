<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmpresaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('organizacions')->insert([
            [
                'empresa' => 'Tech Solutions S.A.',
                'direccion' => 'Av. Principal 123, Ciudad, País',
                'telefono' => '555-123-4567',
                'correo' => 'contacto@techsolutions.com',
                'pagina_web' => 'https://www.techsolutions.com',
                'logotipo' => 'https://via.placeholder.com/200',
                'razon_social' => 'Tech Solutions S.A. de C.V.',
                'rfc' => Str::upper(Str::random(10)),
                'representante_legal' => 'Juan Pérez',
                'num_empleados' => 250,
                'tamano' => 'Mediana',
                'linkedln' => 'https://www.linkedin.com/company/techsolutions',
                'youtube' => 'https://www.youtube.com/techsolutions',
                'facebook' => 'https://www.facebook.com/techsolutions',
                'twitter' => 'https://twitter.com/techsolutions',
                'certificado' => 1,
            ]
        ]);
    }
}
