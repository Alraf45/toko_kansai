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
        for ($i = 0; $i < 11; $i++) {
            Cat::create([
                'Gambar' => 'storage/img/' . $faker->randomElement(['Kansai Anti Mosquito.png', 'KANSAI FTALIT DUO.png', 'Kansai FTALIT.png', 'Kansai Glimmer.png', 'Kansai Pearl Sheen.png', 'Kansai Property Eksterior.png', 'Kanssai Property.png', 'Kansai Tropic.png', 'Kansai Diamond-Shield.png', 'RAIN BLOCK Kaleng Plastik.png', 'SPLESH Kaleng PLastik.png']),
                'Nama Produk' => $faker->randomElement(['Kansai Anti Mosquito','Kansai FTALIT DUO','Kansai FTALIT','Kansai Glimmer','Kansai Pearl Sheen','Kansai Property Eksterior','Kansai Property','Kansai Tropic','Kansai Diamond-Shield','RAIN BLOCK Kaleng Plastik','SPLESH Kaleng PLastik']),
                'Kategori' => $faker->randomElement(['Cat Eksterior', 'Cat Interior', 'Cat Besi&Kayu', 'Cat Premium']),
                'Warna' => $faker->randomElement(['Neutral', 'Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Purple']),
                'Stok' => $faker->numberBetween(300,1000),
                'Harga' => $faker->numberBetween(100000, 1000000), // Adjusted to a more realistic range
            ]);
        }
    }
}
