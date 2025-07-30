<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Pest\Laravel\delete;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id('No')->autoIncrement();
            $table->string('Gambar')->nullable();
            $table->string('Nama Produk')->unique();
            $table->string('Kategori')->unique();
            $table->string('Warna')->unique();
            $table->integer('Stok')->default(0);
            $table->decimal('Harga', 10, 4)->default(0.00);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cats');
    }
};
