<!-- resources/views/cart.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Keranjang Belanja</h1>

    <!-- Contoh item di cart -->
    <div class="bg-white shadow rounded p-4 mb-4">
        <h2 class="text-lg font-semibold">Produk A</h2>
        <p>Jumlah: 2</p>
        <p>Harga: Rp50.000</p>
    </div>

    <!-- Tambahkan tombol checkout -->
    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
        Checkout
    </button>
</div>
@endsection
