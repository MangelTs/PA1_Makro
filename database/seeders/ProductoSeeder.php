<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Obtenemos todas las categorías de la base de datos
        $categorias = Categoria::all();

        // Creamos 100 productos de ejemplo
        for ($i = 1; $i <= 100; $i++) {
            // Elegimos una categoría aleatoria de la lista de categorías
            $categoria = $categorias->random();

            Producto::create([
                'nombre' => 'Producto ' . Str::random(5),
                'descripcion' => 'Descripción del producto ' . Str::random(10),
                'precio' => rand(10, 100),
                'stock' => rand(0, 50),
                'activo' => rand(0, 1) == 1 ? true : false,
                'categoria_id' => $categoria->id,
            ]);
        }
    }
}
