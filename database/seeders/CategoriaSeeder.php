<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categoria;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++){
            Categoria::create([
                'nombre' => 'Categoria PRO' . Str::random(5) . $i,
                'descripcion' => 'Descripcion Categoria #' . $i,
                'activo' => rand(0, 1) == 1 ? true : false,
            ]);
        }
    }
}
