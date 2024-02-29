<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProductDetail;
use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product_detail = [
            [
                'products_id'           => 1,
                'name'                  => 'Jaket Kantor',
                'image'                 => 'coba 1.jpg',
                'spesifikasi'           => 'Material Taslan anti air',
                'deskripsi'             => 'Jaket Kantor dengan bahan material taslan anti air. Terdapat 2 saku bagian luar dan 1 saku bagian dalam.',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 2,
                'name'                  => 'AMPLOP',
                'image'                 => 'AH 002-2.jpg',
                'spesifikasi'           => 'Kertas HVS 100 gsm',
                'deskripsi'             => 'Amplop kertas HVS 100 gsm, ukuran 18 x 28 cm',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 3,
                'name'                  => 'Cartridge',
                'image'                 => 'Cartridge CF276A-2.jpg',
                'spesifikasi'           => 'Type : Toner Catridge',
                'deskripsi'             => 'Catridge digunakan pada bebearapa macam tipe printer, seperti HP Laserjet Pro M404dn',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 4,
                'name'                  => 'Agenda',
                'image'                 => 'AE001_1.jpg',
                'spesifikasi'           => 'Material Leather Glosy',
                'deskripsi'             => 'Agenda dengan isi HVS 100 Lembar dan berukuran A5',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
        ];

        ProductDetail::insert($product_detail);
    }
}
