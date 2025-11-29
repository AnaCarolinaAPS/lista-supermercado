<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryBebidas = Category::firstOrCreate(['name' => 'Bebidas']);

        Product::create([
            'name' => 'Coca-Cola 2 Litros',
            'description' => 'Refrigerante coca-cola de garafa 2 Litros.',
            'category_id' => $categoryBebidas->id,
            'unit_measure' => 'un',
            'barcode' => '7894900011517',
        ]);

        Product::create([
            'name' => 'Coca-Cola 1.5 Litros',
            'description' => 'Refrigerante coca-cola de garafa 1.5 Litros.',
            'category_id' => $categoryBebidas->id,
            'unit_measure' => 'un',
        ]);

        $categoryPanificados = Category::firstOrCreate(['name' => 'Panificados']);

        Product::create([
            'name' => 'Pão Frances',
            'description' => 'Pão Frances avulso.',
            'category_id' => $categoryPanificados->id,
            'unit_measure' => 'kg',
        ]);

        Product::create([
            'name' => 'Panetone Bauduco 250gr',
            'description' => 'Panetone Bauduco',
            'category_id' => $categoryPanificados->id,
            'unit_measure' => 'un',
        ]);

        $categorySnacks = Category::firstOrCreate(['name' => 'Snacks']);

        Product::create([
            'name' => 'Chocolate ao Leite Nestlé 250gr',
            'description' => 'Chocolate ao Leite Nestlé',
            'category_id' => $categorySnacks->id,
            'unit_measure' => 'un',
        ]);

        $categoryHortifruti = Category::firstOrCreate(['name' => 'Hortifruti']);

        Product::create([
            'name' => 'Banana Ouro',
            'description' => 'Banana',
            'category_id' => $categoryHortifruti->id,
            'unit_measure' => 'kg',
        ]);

        Product::create([
            'name' => 'Brócolis',
            'description' => 'Brócolis',
            'category_id' => $categoryHortifruti->id,
            'unit_measure' => 'un',
        ]);

    }
}
