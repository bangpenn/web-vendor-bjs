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
                'image'                 => 'coba 1.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 2,
                'name'                  => 'Amplop HVS',
                'image'                 => 'AH 002-2.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 3,
                'name'                  => 'Cartridge',
                'image'                 => 'Cartridge CF276A-2.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Agenda Eksklusif',
                'image'                 => 'AE001_1.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 1,
                'name'                  => 'Kaos Jersey',
                'image'                 => 'coba 3.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 1,
                'name'                  => 'Jaket Kantor',
                'image'                 => 'coba 2.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],

            [
                'categories_id'         => 1,
                'name'                  => 'Kaos Polo CVC Pique Hexagon',
                'image'                 => 'coba 5.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 1,
                'name'                  => 'Topi Drill',
                'image'                 => 'coba 9.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 1,
                'name'                  => 'Kaos Katun 30s',
                'image'                 => 'coba 4.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 1,
                'name'                  => 'Topi Rimba',
                'image'                 => 'coba 12.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 1,
                'name'                  => 'Kaos Polo Lengan Panjang',
                'image'                 => 'coba 7.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 2,
                'name'                  => 'Amplop HVS Mika',
                'image'                 => 'AMH 004-2.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 2,
                'name'                  => 'Amplop Samson',
                'image'                 => 'AMP 001-2.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 2,
                'name'                  => 'Kalendar Meja',
                'image'                 => 'KML 002.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 2,
                'name'                  => 'Kalender Dinding Spiral Gantung Atas',
                'image'                 => 'KDSGA 001.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 2,
                'name'                  => 'Leaflet Lipat 3',
                'image'                 => 'LL3 001.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 2,
                'name'                  => 'Leaflet Lipat 4',
                'image'                 => 'LL4002 1.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Agenda Premium',
                'image'                 => 'AP001_1.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Agenda Standard',
                'image'                 => 'AS 003_1.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Alat Set Makan',
                'image'                 => 'SSG003.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Tatakan Gelas',
                'image'                 => 'Tatakan Gelas.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Bantal Kotak',
                'image'                 => 'Bantal Kotak.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Bantal Mobil',
                'image'                 => 'Bantal Mobil.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Bantal Leher',
                'image'                 => 'Bantal Leher.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Ballpoint Stainless',
                'image'                 => 'bolpoint.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Card Holder',
                'image'                 => 'card holder.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Card Holder',
                'image'                 => 'card holder 2.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Gantungan Kunci Premium',
                'image'                 => 'GKP_BARU_1.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Gantungan Kunci STNK',
                'image'                 => 'GKST 003-2.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Giftset 2 In',
                'image'                 => 'Giftset 2 In.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Giftset 3 In',
                'image'                 => 'Giftset 3 In.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'categories_id'         => 4,
                'name'                  => 'Handuk Sport',
                'image'                 => 'HS001_1.webp',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
        ];

        Product::insert($products);
    }
}
