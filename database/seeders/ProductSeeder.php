<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 15 Pro',
                'description' => 'Smartphone premium con chip A17 Pro, cámara de 48MP y pantalla Super Retina XDR de 6.1 pulgadas. Incluye Dynamic Island y grabación de video 4K.',
                'price' => 3999.99,
                'status' => 'active',
                'barcode' => '194253773474',
                'weight' => 187.50,
                'color' => 'Natural Titanium',
                'marca' => 'Apple'
            ],
            [
                'name' => 'MacBook Air M2',
                'description' => 'Laptop ultradelgada con chip M2, 8GB RAM, 256GB SSD y pantalla Liquid Retina de 13.6 pulgadas. Diseño ligero y batería de hasta 18 horas.',
                'price' => 4999.00,
                'status' => 'active',
                'barcode' => '194253164647',
                'weight' => 1240.00,
                'color' => 'Space Gray',
                'marca' => 'Apple'
            ],
            [
                'name' => 'Samsung Galaxy S24 Ultra',
                'description' => 'Smartphone Android flagship con IA integrada, cámara de 200MP, pantalla Dynamic AMOLED 2X de 6.8 pulgadas y S Pen integrado.',
                'price' => 4299.99,
                'status' => 'active',
                'barcode' => '887276791234',
                'weight' => 232.00,
                'color' => 'Titanium Black',
                'marca' => 'Samsung'
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'description' => 'Audífonos inalámbricos premium con cancelación de ruido líder en la industria, 30 horas de batería y audio de alta resolución.',
                'price' => 1299.99,
                'status' => 'active',
                'barcode' => '027242923683',
                'weight' => 250.00,
                'color' => 'Black',
                'marca' => 'Sony'
            ],
            [
                'name' => 'LG OLED C3 55 pulgadas',
                'description' => 'Smart TV OLED 4K con procesador α9 Gen6 AI, HDR Dolby Vision, webOS 23 y compatibilidad con NVIDIA G-SYNC para gaming.',
                'price' => 5999.99,
                'status' => 'active',
                'barcode' => '195174033234',
                'weight' => 18500.00,
                'color' => 'Black',
                'marca' => 'LG'
            ],
            [
                'name' => 'iPad Pro 12.9 pulgadas',
                'description' => 'Tablet profesional con chip M2, pantalla Liquid Retina XDR, 128GB de almacenamiento y compatibilidad con Apple Pencil de 2da generación.',
                'price' => 4599.99,
                'status' => 'active',
                'barcode' => '194253773689',
                'weight' => 682.00,
                'color' => 'Silver',
                'marca' => 'Apple'
            ],
            [
                'name' => 'Dell XPS 13 Plus',
                'description' => 'Laptop ultrabook con procesador Intel Core i7 de 12va generación, 16GB RAM, 512GB SSD y pantalla InfinityEdge de 13.4 pulgadas.',
                'price' => 4799.99,
                'status' => 'active',
                'barcode' => '884116401234',
                'weight' => 1260.00,
                'color' => 'Platinum Silver',
                'marca' => 'Dell'
            ],
            [
                'name' => 'Samsung Galaxy Tab S9',
                'description' => 'Tablet Android premium con pantalla Dynamic AMOLED 2X de 11 pulgadas, S Pen incluido y resistencia al agua IP68.',
                'price' => 2799.99,
                'status' => 'active',
                'barcode' => '887276623456',
                'weight' => 498.00,
                'color' => 'Graphite',
                'marca' => 'Samsung'
            ],
            [
                'name' => 'Sony PlayStation 5',
                'description' => 'Consola de videojuegos de nueva generación con SSD ultra rápido, ray tracing en tiempo real y audio 3D inmersivo.',
                'price' => 2199.99,
                'status' => 'active',
                'barcode' => '711719541234',
                'weight' => 4200.00,
                'color' => 'White',
                'marca' => 'Sony'
            ],
            [
                'name' => 'Microsoft Surface Pro 9',
                'description' => 'Tablet 2 en 1 con procesador Intel Core i5 de 12va generación, 8GB RAM, 256GB SSD y pantalla PixelSense de 13 pulgadas.',
                'price' => 3899.99,
                'status' => 'active',
                'barcode' => '889842612345',
                'weight' => 879.00,
                'color' => 'Platinum',
                'marca' => 'Microsoft'
            ],
            [
                'name' => 'Xiaomi Mi 13 Pro',
                'description' => 'Smartphone Android con cámara Leica de 50MP, procesador Snapdragon 8 Gen 2, carga rápida de 120W y pantalla AMOLED de 6.73 pulgadas.',
                'price' => 2899.99,
                'status' => 'active',
                'barcode' => '674123456789',
                'weight' => 210.00,
                'color' => 'Ceramic Black',
                'marca' => 'Xiaomi'
            ],
            [
                'name' => 'Canon EOS R6 Mark II',
                'description' => 'Cámara mirrorless profesional de 24.2MP con estabilización de imagen de 8 paradas, grabación 4K 60p y enfoque automático dual pixel.',
                'price' => 8999.99,
                'status' => 'active',
                'barcode' => '013803345678',
                'weight' => 588.00,
                'color' => 'Black',
                'marca' => 'Canon'
            ],
            [
                'name' => 'Nintendo Switch OLED',
                'description' => 'Consola portátil híbrida con pantalla OLED de 7 pulgadas, audio mejorado, 64GB de almacenamiento interno y dock incluido.',
                'price' => 1599.99,
                'status' => 'active',
                'barcode' => '045496879234',
                'weight' => 420.00,
                'color' => 'White',
                'marca' => 'Nintendo'
            ],
            [
                'name' => 'HP Spectre x360 14',
                'description' => 'Laptop convertible premium con procesador Intel Core i7, 16GB RAM, 1TB SSD, pantalla táctil OLED de 13.5 pulgadas y diseño 2 en 1.',
                'price' => 5299.99,
                'status' => 'active',
                'barcode' => '195161234567',
                'weight' => 1350.00,
                'color' => 'Nightfall Black',
                'marca' => 'HP'
            ],
            [
                'name' => 'AirPods Pro 2da Generación',
                'description' => 'Audífonos inalámbricos in-ear con cancelación de ruido adaptativa, audio espacial personalizado y estuche de carga MagSafe.',
                'price' => 899.99,
                'status' => 'active',
                'barcode' => '194253774567',
                'weight' => 50.80,
                'color' => 'White',
                'marca' => 'Apple'
            ],
            [
                'name' => 'Google Pixel 8 Pro',
                'description' => 'Smartphone Android puro con chip Google Tensor G3, cámaras AI avanzadas, pantalla LTPO OLED de 6.7 pulgadas y 7 años de actualizaciones.',
                'price' => 3599.99,
                'status' => 'active',
                'barcode' => '193575012345',
                'weight' => 213.00,
                'color' => 'Obsidian',
                'marca' => 'Google'
            ],
            [
                'name' => 'Amazon Echo Show 15',
                'description' => 'Display inteligente de 15.6 pulgadas Full HD con Alexa integrada, ideal para cocina, centro de control del hogar inteligente.',
                'price' => 1099.99,
                'status' => 'discontinued',
                'barcode' => '841667181234',
                'weight' => 2200.00,
                'color' => 'Black',
                'marca' => 'Amazon'
            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon Gen 11',
                'description' => 'Laptop empresarial ultraliviana con procesador Intel Core i7 de 13va generación, 16GB RAM, 512GB SSD y pantalla 2K de 14 pulgadas.',
                'price' => 6299.99,
                'status' => 'active',
                'barcode' => '198153456789',
                'weight' => 1120.00,
                'color' => 'Black',
                'marca' => 'Lenovo'
            ],
            [
                'name' => 'OnePlus 11 5G',
                'description' => 'Smartphone flagship con procesador Snapdragon 8 Gen 2, carga rápida SUPERVOOC de 100W, cámaras Hasselblad y pantalla AMOLED de 120Hz.',
                'price' => 2499.99,
                'status' => 'active',
                'barcode' => '611820012345',
                'weight' => 205.00,
                'color' => 'Titan Black',
                'marca' => 'OnePlus'
            ],
            [
                'name' => 'Asus ROG Strix G15',
                'description' => 'Laptop gaming con procesador AMD Ryzen 7, GPU NVIDIA RTX 4060, 16GB RAM, 1TB SSD y pantalla 165Hz de 15.6 pulgadas.',
                'price' => 4199.99,
                'status' => 'active',
                'barcode' => '195553123456',
                'weight' => 2300.00,
                'color' => 'Eclipse Gray',
                'marca' => 'Asus'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
