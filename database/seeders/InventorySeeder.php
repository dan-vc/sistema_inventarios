<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los productos
        $products = Product::all();

        // Definir stocks específicos para cada producto
        $stockData = [
            1 => 25,   // iPhone 15 Pro
            2 => 12,   // MacBook Air M2
            3 => 8,    // Samsung Galaxy S24 Ultra
            4 => 35,   // Sony WH-1000XM5
            5 => 3,    // LG OLED C3 55"
            6 => 15,   // iPad Pro 12.9"
            7 => 7,    // Dell XPS 13 Plus
            8 => 18,   // Samsung Galaxy Tab S9
            9 => 5,    // Sony PlayStation 5
            10 => 22,  // Microsoft Surface Pro 9
            11 => 30,  // Xiaomi Mi 13 Pro
            12 => 4,   // Canon EOS R6 Mark II
            13 => 40,  // Nintendo Switch OLED
            14 => 9,   // HP Spectre x360 14
            15 => 45,  // AirPods Pro 2da Gen
            16 => 16,  // Google Pixel 8 Pro
            17 => 0,   // Amazon Echo Show 15 (discontinued)
            18 => 6,   // Lenovo ThinkPad X1 Carbon
            19 => 28,  // OnePlus 11 5G
            20 => 11   // Asus ROG Strix G15
        ];

        foreach ($products as $product) {
            Inventory::create([
                'product_id' => $product->id,
                'stock' => $stockData[$product->id] ?? rand(5, 50), // Stock por defecto si no está definido
            ]);
        }
    }
}
