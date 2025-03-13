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
            ],
            [
                'empresa' => 'Innovatech Corp',
                'direccion' => 'Calle 456, Zona Empresarial, Ciudad',
                'telefono' => '555-987-6543',
                'correo' => 'info@innovatech.com',
                'pagina_web' => 'https://www.innovatech.com',
                'logotipo' => 'https://via.placeholder.com/200',
                'razon_social' => 'Innovatech Corporation',
                'rfc' => Str::upper(Str::random(10)),
                'representante_legal' => 'María Gómez',
                'num_empleados' => 500,
                'tamano' => 'Grande',
                'linkedln' => 'https://www.linkedin.com/company/innovatech',
                'youtube' => 'https://www.youtube.com/innovatech',
                'facebook' => 'https://www.facebook.com/innovatech',
                'twitter' => 'https://twitter.com/innovatech',
                'certificado' => 0,
            ],
        ]);
    }
}
