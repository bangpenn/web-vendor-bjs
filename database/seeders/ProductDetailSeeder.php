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
                'spesifikasi'           => <<<SPEC
                                            Material Taslan anti air
                                            Ukuran M, L, XL, XXL
                                            Terdapat 2 saku bagian Luar dan 1 saku bagian dalam
                                            Pada bagian bahu dilengkapi spuring
                                        SPEC,
                'deskripsi'             =>  'Material Taslan anti air',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 2,
                'name'                  => 'Amplop HVS',
                'image'                 => 'AH 002-2.jpg',
                'spesifikasi'           => <<<SPEC
                                            Bahan Leather
                                            Ukuran A5
                                            Dimensi 15 x 21 cm ( P x L )
                                            Isi HVS 100 Lembar
                                            Ring besi 6 cincin
                                            Pengunci Magnet
                                            Ada tempat Kartu Nama & Bolpen
                                            Terdapat tempat kartu untuk 3 Kartu
                                            Free Bollpoin stainless
                                            Berat 465 gr
                                            Packaging Box Ivory
                                        SPEC,
                'deskripsi'             =>  'Kertas HVS 100 gsm dan Kertas HVS 100 gsm',

                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 3,
                'name'                  => 'Cartridge',
                'image'                 => 'Cartridge CF276A-2.jpg',
                'spesifikasi'           => <<<SPEC
                                            Type : Toner Cartridge
                                            Colour : Black
                                            Capacity : 9.000 page
                                            Berat 1.286gr

                                            Digunakan pada tipe printer berikut :
                                            HP LaserJet M506
                                            HP LaserJet M527
                                            SPEC,
                'deskripsi'             => 'Type : Toner Catridge',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 4,
                'name'                  => 'Agenda Eksklusif',
                'image'                 => 'AE001_1.jpg',
                'spesifikasi'           => <<<SPEC
                                            Material Leather Glosy
                                            Isi HVS 100 Lembar
                                            Ukuran A5
                                            Dimensi 16 x 21 cm  ( P x L )
                                            Spiral
                                            Pengunci Magnet
                                            Berat 1007 gr
                                            SPEC,
                'deskripsi'             => 'Agenda dengan isi HVS 100 Lembar dan berukuran A5',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],

            [
                'products_id'           => 5,
                'name'                  => 'Kaos Jersey',
                'image'                 => 'coba 3.jpg',
                'spesifikasi'           => <<<SPEC
                                            Bahan Jersey Dri Fit
                                            Kualitas Distro
                                            Ukuran S, M, L, XL, XXL
                                            Berat 164 g
                                            SPEC,
                'deskripsi'             => 'Kaos Jersey Berbahan Dri Fit dan berkualitas Distro',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],

            [
                'products_id'           => 6,
                'name'                  => 'Jaket Kantor',
                'image'                 => 'coba 2.jpg',
                'spesifikasi'           => <<<SPEC
                                                Material Taslan anti air
                                                Ukuran M, L, XL, XXL
                                                Terdapat 2 saku bagian Luar dan 1 saku bagian dalam
                                                Pada bagian bahu dilengkapi spuring
                                            SPEC,
                'deskripsi'             => 'Terdapat 2 saku bagian Luar dan 1 saku bagian dalam. Pada bagian bahu dilengkapi spuring',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],

            [
                'products_id'           => 7,
                'name'                  => 'Kaos Polo CVC Pique Hexagon',
                'image'                 => 'coba 5.jpg',
                'spesifikasi'           => <<<SPEC
                                                Material CVC Pique Hexagon
                                                Ukuran M, L, XL, XXL
                                                Rajutan Bercorak Segi 6 (Hexagon)
                                                Ketebalan 24s
                                                Dilengkapi Karet dibagian ujung lengan
                                                Jahitan rantai
                                                Dilengkapi 2 Kancing
                                                Berat 263 gr
                                            SPEC,
                'deskripsi'             => 'Kaos Polo CVC Pique Rajutan Bercorak Segi 6 (Hexagon)',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 8,
                'name'                  => 'Topi Drill',
                'image'                 => 'coba 9.jpg',
                'spesifikasi'           => <<<SPEC
                                                Material Drill
                                                Ukuran 27 x 18 cm
                                                Pengait topi model resleting
                                                Berat 108 gr
                                            SPEC,
                'deskripsi'             => 'Topi Material Drill',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 9,
                'name'                  => 'Kaos Katun 30s',
                'image'                 => 'coba 4.jpg',
                'spesifikasi'           => <<<SPEC
                                                Material Katun 30s/ cotton combed 30s
                                                Kualitas Distro
                                                Jahit rantai
                                                Ukuran S, M, L, XL, XXL
                                                Berat 208 gr
                                            SPEC,
                'deskripsi'             => 'Kaos Katun berbahan material katun 30s/ cotton combed 30s',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 10,
                'name'                  => 'Topi Rimba',
                'image'                 => 'coba 12.jpg',
                'spesifikasi'           => <<<SPEC
                                                - Bahan topi dari Cotton Ripstop Premium
                                                - Jahitan topi Woven Bordir
                                                - Memiliki 4 Ventilasi Udara
                                                - Tali topi bisa diatur / disesuaikan dengan keinginan
                                                - Dapat dilipat seperti pouch kecil sehingga aman saat dibawa travelling / travel size

                                                Ukuran topi :
                                                Lingkar Topi : 50 cm
                                                Panjang Topi : 32 cm
                                                Panjang Tali : 48 cm
                                            SPEC,
                'deskripsi'             => 'Topi Rimba Sablon',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 11,
                'name'                  => 'Kaos Polo Lengan Panjang',
                'image'                 => 'coba 7.jpg',
                'spesifikasi'           => <<<SPEC
                                                Material CVC Pique
                                                Ukuran M, L, XL, XXL
                                                Ketebalan 24s
                                                Dilengkapi Karet dibagian ujung lengan
                                                Jahitan rantai
                                                Dilengkapi 2 Kancing
                                                Berat 263 gr
                                            SPEC,
                'deskripsi'             => 'Kaos Polo CVC Pique Lengan Panjang',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 12,
                'name'                  => 'Amplop HVS Mika',
                'image'                 => 'AMH 004-2.jpg',
                'spesifikasi'           => <<<SPEC
                                                Kertas HVS 100 gsm
                                                Ukuran 12 x 26 cm
                                                Terdapat Mika Transparan
                                                Berat 8 gr
                                            SPEC,
                'deskripsi'             => 'Kertas HVS 100 gsm Ukuran 12 x 26 cm dan Terdapat Mika Transparan',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 13,
                'name'                  => 'Amplop Samson',
                'image'                 => 'AMP 001-2.jpg',
                'spesifikasi'           => <<<SPEC
                                                Kertas Samson 80 gsm
                                                Ukuran 27 x 40 cm
                                                Berat 21 gr
                                            SPEC,
                'deskripsi'             => 'Kertas Samson 80 gsm dan Ukuran 27 x 40 cm',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 14,
                'name'                  => 'Kalendar Meja Landscape',
                'image'                 => 'KML 002.jpg',
                'spesifikasi'           => <<<SPEC
                                                Ukuran : 20 x 20 cm (Potrait)
                                                Isi 1 Bulan : 13 Lembar / 26 Halaman
                                                Isi 2 Bulan : 7 Lembar / 14 Halaman
                                                Bahan : Art Paper 260 gr
                                                Finishing : Laminasi Doff – Spiral Atas
                                                Warna : Full Color Printing
                                                Packaging : Amplop

                                                Spesifikasi Tatakan :
                                                Ukuran : 24 x 24 cm
                                                Bahan : Hard Cover
                                                Finishing : Laminasi Doff
                                            SPEC,
                'deskripsi'             => 'Kalendar Meja Landscape',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],

            [
                'products_id'           => 15,
                'name'                  => 'Kalender Dinding Spiral Gantung Atas',
                'image'                 => 'KDSGA 001.jpg',
                'spesifikasi'           => <<<SPEC
                                                Ukuran : A3 31 x 47 cm
                                                Isi 1 Bulan : 13 Lembar / 26 Halaman
                                                Isi 2 Bulan : 7 Lembar / 14 Halaman
                                                Bahan : Art Paper 260 gr
                                                Finishing : Spiral Atas
                                                Warna : Full Color Printing
                                             SPEC,
                'deskripsi'             => 'Kalender Dinding Spiral Gantung Atas',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 16,
                'name'                  => 'Leaflet Lipat 3',
                'image'                 => 'LL3 001.jpg',
                'spesifikasi'           => <<<SPEC
                                                Material Art Paper 150 gr
                                                Ukuran 29,7 x 21 cm
                                                Laminasi glossy
                                                Berat 8 gr
                                             SPEC,
                'deskripsi'             => 'Leaflet Lipat 3',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 17,
                'name'                  => 'Leaflet Lipat 4',
                'image'                 => 'LL4002 1.png',
                'spesifikasi'           => <<<SPEC
                                                Material Art Paper 150 gr
                                                Ukuran 39 x 21 cm
                                                Laminasi glossy
                                                Berat 8 gr
                                              SPEC,
                'deskripsi'             => 'Leaflet Lipat 4',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 18,
                'name'                  => 'Agenda Premium ',
                'image'                 => 'AP001_1.jpg',
                'spesifikasi'           => <<<SPEC
                                            Bahan Leather
                                            Ukuran A5
                                            Dimensi 15 x 21 cm ( P x L )
                                            Isi HVS 100 Lembar
                                            Ring besi 6 cincin
                                            Pengunci Magnet
                                            Ada tempat Kartu Nama & Bolpen
                                            Terdapat tempat kartu untuk 3 Kartu
                                            Free Bollpoin stainless
                                            Berat 465 gr
                                            Packaging Box Ivory
                                        SPEC,
                'deskripsi'             => 'Agenda Premium',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 19,
                'name'                  => 'Agenda Standard',
                'image'                 => 'AS 003_1.jpg',
                'spesifikasi'           => <<<SPEC
                                            Material Leather
                                            Florance Blue
                                            Ukuran A6
                                            Dimensi 10 x 15,6 cm  ( P x L )
                                            Isi HVS 100 lembar
                                            Free ballpoint stainless
                                            Pengunci cetekan
                                            Ada tempat kartu nama
                                            Berat 187 gr
                                            Packaging Box
                                        SPEC,
                'deskripsi'             => 'Agenda Standard',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 20,
                'name'                  => 'Alat Set Makan',
                'image'                 => 'SSG003.jpg',
                'spesifikasi'           => <<<SPEC
                                            Material Stainless
                                            Ukuran 23,5 x 6 x 3 cm
                                            Ukuran Tepak  23,5 x 6 cm
                                            Panjang Sumpit 20,5 cm
                                            Panjang Sendok 21 cm
                                            Panjang Garpu 22 cm
                                            Berat 159 gr
                                            Packaging plastik
                                        SPEC,
                'deskripsi'             => 'Alat Set Makan Premium',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 21,
                'name'                  => 'Tatakan Gelas',
                'image'                 => 'Tatakan Gelas.jpg',
                'spesifikasi'           => <<<SPEC
                                            Material Akrilik
                                            Ukuran 10 x 10 cm ( P x L )
                                            Ketebalan 0,2 cm
                                            Packaging plastik
                                        SPEC,
                'deskripsi'             => 'Tatakan Gelas',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 22,
                'name'                  => 'Bantal Kotak',
                'image'                 => 'Bantal Kotak.jpg',
                'spesifikasi'           => <<<SPEC
                                            Material Velboa
                                            Isi Dakron
                                            Ukuran 40 x 8 x 30 cm ( P x L x T )
                                            Packaging Plastik
                                            Berat 300 gr
                                            Packaging plastik
                                        SPEC,
                'deskripsi'             => 'Bantal Kotak',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 23,
                'name'                  => 'Bantal Mobil',
                'image'                 => 'Bantal Mobil.jpg',
                'spesifikasi'           => <<<SPEC
                                            Bahan Velboa
                                            Isi Dakron
                                            Ukuran 28 X 7 X 20 cm ( P x L x T )
                                            Packaging Plastik
                                            Isi 2 pcs
                                            Berat 272 gr
                                            Packaging plastik
                                        SPEC,
                'deskripsi'             => 'Bantal Mobil',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 24,
                'name'                  => 'Bantal Leher',
                'image'                 => 'Bantal Leher.jpg',
                'spesifikasi'           => <<<SPEC
                                            Material Velboa
                                            Isi Dakron
                                            Ukuran 29 x 9 x 28 cm ( P x L x T )
                                            Berat 310 gr
                                            Packaging Plastik
                                        SPEC,
                'deskripsi'             => 'Bantal Leher',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 25,
                'name'                  => 'Ballpoint Stainless',
                'image'                 => 'bolpoint.jpg',
                'spesifikasi'           => <<<SPEC
                                            Material Stainless
                                            Ukuran panjang 14,3 cm
                                            Berat 16 gr
                                            Packaging plastik
                                        SPEC,
                'deskripsi'             => 'Ballpoint Stainless',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 26,
                'name'                  => 'Card Holder',
                'image'                 => 'card holder.jpg',
                'spesifikasi'           => <<<SPEC
                                            Bahan Leather
                                            Ukuran 7,5 x 11 cm ( P x L )
                                            Isi 12 Card
                                            Berat 84 gr
                                            Packaging ziplock
                                        SPEC,
                'deskripsi'             => 'Card Holder Material Kulit Imtasi',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 27,
                'name'                  => 'Card Holder',
                'image'                 => 'card holder 2.jpg',
                'spesifikasi'           => <<<SPEC
                                            Material Leather + Stainless
                                            Ukuran 9,5 x 6,5 cm ( P x L )
                                            Muat untuk 5 kartu nama
                                            Pengunci tutup menggunakan magnet
                                            Berat 77 gr
                                            Packaging ziplock
                                        SPEC,
                'deskripsi'             => 'Card Holder Material Material Leather + Stainless',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 28,
                'name'                  => 'Gantungan Kunci Premium',
                'image'                 => 'GKP_BARU_1.png',
                'spesifikasi'           => <<<SPEC
                                            Material Stainless
                                            Ukuran 8,1 x 2 cm ( P x L )
                                            Diameter ring 3 cm
                                            Berat 27 gr
                                            Packaging ziplock
                                        SPEC,
                'deskripsi'             => 'Gantungan Kunci Premium Material Stainless',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 29,
                'name'                  => 'Gantungan Kunci STNK',
                'image'                 => 'GKST 003-2.jpg',
                'spesifikasi'           => <<<SPEC
                                            Bahan kain Cordura (polyester waterproof)
                                            Ukuran  11,5 x 7 cm ( P x L )
                                            Bagian dalam terdapat gantungan
                                            1 slot kartu diluar
                                            4 slot kartu dan STNK didalam
                                            Berat 61 gr
                                            Packaging plastik
                                        SPEC,
                'deskripsi'             => 'Gantungan Kunci STNK Bahan kain Cordura',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 30,
                'name'                  => 'Giftset 2 In',
                'image'                 => 'Giftset 2 In.jpg',
                'spesifikasi'           => <<<SPEC
                                            Agenda A6 Kulit Sintetis
                                            Bolpoint Stainless
                                            Free box Artpaper
                                        SPEC,
                'deskripsi'             => 'Giftset 2 In',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 31,
                'name'                  => 'Giftset 3 In',
                'image'                 => 'Giftset 3 In.jpg',
                'spesifikasi'           => <<<SPEC
                                            Tumbler suhu
                                            Buku Agenda A6
                                            Cutlery Set sendok dan garpu
                                            Berat 1050 gr
                                        SPEC,
                'deskripsi'             => 'Giftset 3 In',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
            [
                'products_id'           => 32,
                'name'                  => 'Handuk Sport',
                'image'                 => 'GKST 003-2.jpg',
                'spesifikasi'           => <<<SPEC
                                            Material Microcotton
                                            Ukuran 30 x 70 cm ( P x L )
                                            Berat 108 gr
                                            Packaging mika
                                        SPEC,
                'deskripsi'             => 'Handuk Sport',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),

            ],
        ];

        ProductDetail::insert($product_detail);
    }
}
