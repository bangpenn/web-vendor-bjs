<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
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
                'categories_id'         => 1,
                'name'                  => 'Jaket Kantor',
                'image'                 => 'coba 1.jpg',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 2,
                'name'                  => 'AMPLOP',
                'image'                 => 'AH 002-2.jpg',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 3,
                'name'                  => 'Cartridge',
                'image'                 => 'Cartridge CF276A-2.jpg',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Agenda',
                'image'                 => 'AE001_1.jpg',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
        ];

        Product::insert($products);
    }
}
