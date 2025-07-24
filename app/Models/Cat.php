<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'cats';
    protected $fillable = ['No', 'Gambar', 'Nama Produk', 'Kategori', 'Warna', 'Stok', 'Harga'];
}
