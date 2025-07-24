<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 12; $i++) {
            Cat::create([
                'No' => $faker->increments,
                'Gambar' => $faker->imagePath($storagePath = 'storage/img',$width = 640, $height = 480, 'cats', false),
                'Nama Produk' => $faker->name(['Kansai Anti Mosquito','Kansai FTALIT DUO','Kansai FTALIT','Kansai Glimmer','Kansai Pearl Sheen','Kansai Property Eksterior','Kanssai Property','Kansai Tropic','Kansai Diamond-Shield','RAIN BLOCK Kaleng Plastik','SPLESH Kaleng PLastik']),
                'Kategori' => $faker->randomElement(['Cat Eksterior', 'Cat Interior', 'Cat Besi&Kayu', 'Cat Premium']),
                'Warna' => $faker->randomElement(['Neutral', 'Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Purple']),
                'Stok' => $faker->numberBetween(1, 100),
                'Harga' => $faker->numberBetween(10000, 100000),
            ]);
        }
    }
}
