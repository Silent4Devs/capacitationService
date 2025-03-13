<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener los IDs de los grupos existentes
        $grupos = DB::table('grupos')->pluck('id');

        if ($grupos->isEmpty()) {
            // Si no hay grupos, creamos algunos de prueba
            $grupos = DB::table('grupos')->insertGetId([
                'grupo' => 'General',
                'descripcion' => 'Grupo predeterminado para usuarios',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $grupos = collect([$grupos]); // Convertimos a colección
        }

        // Insertar 5 usuarios de prueba
        DB::table('users')->insert([
            [
                'name' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'email_verified_at' => now(),
                'estatus' => 'activo',
                'grupo_id' => $grupos->random(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'María Gómez',
                'email' => 'maria.gomez@example.com',
                'email_verified_at' => now(),
                'estatus' => 'activo',
                'grupo_id' => $grupos->random(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos López',
                'email' => 'carlos.lopez@example.com',
                'email_verified_at' => now(),
                'estatus' => 'inactivo',
                'grupo_id' => $grupos->random(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ana Rodríguez',
                'email' => 'ana.rodriguez@example.com',
                'email_verified_at' => now(),
                'estatus' => 'activo',
                'grupo_id' => $grupos->random(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luis Fernández',
                'email' => 'luis.fernandez@example.com',
                'email_verified_at' => null,
                'estatus' => 'pendiente',
                'grupo_id' => $grupos->random(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
