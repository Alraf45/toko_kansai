<?php

namespace Database\Seeders;

use App\Models\Cat;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CatSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CatSeeder::class;
        $this->call(CatSeeder::class);
        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaiekster1.png', // Example image URL
            'Nama Produk' => 'Kansai Rain Block',
            'Kategori' => 'Eksterior',
            'Warna' => 'Putih',
            'Stok' => 100,
            'Harga' => 200.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaiekster2.png', // Example image URL
            'Nama Produk' => 'Kansai Property',
            'Kategori' => 'Eksterior',
            'Warna' => 'Hitam',
            'Stok' => 120,
            'Harga' => 250.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaiekster3.png', // Example image URL
            'Nama Produk' => 'Kansai Diamond Shield',
            'Kategori' => 'Eksterior',
            'Warna' => 'Abu-abu',
            'Stok' => 154,
            'Harga' => 300.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaiekster4.png', // Example image URL
            'Nama Produk' => 'Kansai Splesh',
            'Kategori' => 'Eksterior',
            'Warna' => 'Putih',
            'Stok' => 200,
            'Harga' => 150.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaiinter1.png', // Example image URL
            'Nama Produk' => 'Kansai Anti-Mosquito',
            'Kategori' => 'Interior',
            'Warna' => 'Biru',
            'Stok' => 80,
            'Harga' => 180.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaiinter2.png', // Example image URL
            'Nama Produk' => 'Kansai Pearl-Sheen',
            'Kategori' => 'Interior',
            'Warna' => 'Hijau',
            'Stok' => 90,
            'Harga' => 220.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaiinter3.png', // Example image URL
            'Nama Produk' => 'Kansai Tropic',
            'Kategori' => 'Interior',
            'Warna' => 'Kuning',
            'Stok' => 110,
            'Harga' => 170.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaiinter4.png', // Example image URL
            'Nama Produk' => 'Kansai Property',
            'Kategori' => 'Interior',
            'Warna' => 'Merah',
            'Stok' => 130,
            'Harga' => 200.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaikaybes1.png', // Example image URL
            'Nama Produk' => 'Kansai FTALIT',
            'Kategori' => 'Kayu & Besi',
            'Warna' => 'Coklat',
            'Stok' => 140,
            'Harga' => 250.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/kansaikaybes2.png', // Example image URL
            'Nama Produk' => 'Kansai FTALIT DUO',
            'Kategori' => 'Kayu & Besi',
            'Warna' => 'Hijau',
            'Stok' => 160,
            'Harga' => 300.000,
        ]);

        Cat::factory()->count()->create([
            'Gambar' => 'storage/img/prem1.png', // Example image URL
            'Nama Produk' => 'Kansai Glimmer',
            'Kategori' => 'Premium',
            'Warna' => 'Biru',
            'Stok' => 170,
            'Harga' => 280.000,
        ]);
    

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}

