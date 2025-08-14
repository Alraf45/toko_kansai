<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<!-- Navbar -->
<nav class="w-full flex flex-wrap items-center justify-between px-4 py-3 shadow-sm sticky top-0 bg-white z-50">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
        <img src="img/452_main.jpg" class="h-16" alt="Logo">
      
    </div>

    <!-- Search + Add Button -->
    <div class="flex items-center space-x-3">
        <!-- Search -->
        <div class="relative">
            <input type="text" placeholder="Search..."
                  class="border border-gray-300 rounded-full pl-4 pr-10 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-sky-400">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 absolute right-3 top-2.5 text-gray-400"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
        </div>

        <!-- Add new -->
        <button class="bg-black text-white px-4 py-1 rounded hover:bg-gray-800">
            Add new
        </button>
    </div>
</nav>

<div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-sky-400 text-white min-h-screen flex flex-col">
        <div class="p-4 font-bold text-lg flex items-center">
            <span></span>
            <span class="ml-1"></span>
        </div>
        <nav class="flex-1">
<<<<<<< HEAD
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Dashboard</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">User management</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Product management</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Documents</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Statistics</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Settings</a>
=======
            <a href="" class="block py-6 px-14 hover:bg-sky-600 rounded-full"><h1 class="text-lg font-semibold">Dashboard</h1></a>
            <a href="/user_management" class="block py-8 px-8 hover:bg-sky-600 rounded-full">👤 User</a>
            <a href="/product_management" class="block py-8 px-8 hover:bg-sky-600 rounded-full">📦 Product</a>
            <a href="/documents" class="block py-8 px-8 hover:bg-sky-600 rounded-full">📄 Documents</a>
            <a href="/statistics" class="block py-8 px-8 hover:bg-sky-600 rounded-full">📊 Statistics</a>
            <a href="/settings" class="block py-10 px-8  hover:bg-sky-600 rounded-full">⚙️ Settings</a>
>>>>>>> 524a590d9ef8264937c6972b6f19e4575f03d6a4
        </nav>
        <div class="p-8 border-t border-sky-400 mb-4">
            <a href="#" class="flex items-center">
                <span class="mr-2">▶️</span> Logout
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        
    
        <!-- Table -->
        <main class="p-6">
            <h1 class="text-lg font-semibold mb-4">Order catalogue</h1>
            <div class="bg-white rounded shadow">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-2 text-left">#</th>
                            <th class="px-4 py-2 text-left">Product</th>
                            <th class="px-4 py-2 text-left">Serial code</th>
                            <th class="px-4 py-2 text-left">Stock</th>
                            <th class="px-4 py-2 text-left">Category</th>
                            <th class="px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="px-4 py-2">01</td>
                            <td class="px-4 py-2">KANSAI ANTI-MOSQUITO</td>
                            <td class="px-4 py-2">#123-456ABC</td>
                            <td class="px-4 py-2">100</td>
                            <td class="px-4 py-2">Kansai Paint</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500">Edit</a> |
                                <a href="#" class="text-red-500">Delete</a>
                            </td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-2">02</td>
                            <td class="px-4 py-2">KANSAI PROPERTY INTERIOR</td>
                            <td class="px-4 py-2">#123-456ABC</td>
                            <td class="px-4 py-2">100</td>
                            <td class="px-4 py-2">Kansai Paint</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500">Edit</a> |
                                <a href="#" class="text-red-500">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

        <div class="mb-64"></div>
      
<footer class="bg-white border-t font-raleway text-[#1C244B]">
  <div class="max-w-[1200px] mx-auto px-4 py-8">
    <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
      
      <!-- Logo -->
      <div class="col-start-1 col-end-3 md:col-end-auto">
        <img src="/img/452_main.jpg" alt="Kansai Paint Logo" class="h-[68px]">
      </div>

<<<<<<< HEAD
        <!-- Footer -->
        <footer class="bg-sky-500 text-white p-4 flex justify-between items-center">
            <div>
                <p>Jl. Gatot Tunggal No.3 RT.006/RW.005</p>
                <p>Kota Tangerang, Banten 15136</p>
                <p>Email: kpc@kansaicoatings.co.id</p>
                <p>Telp: +62215979058</p>
            </div>
            <div>
                <p><a href="#" class="hover:underline">Privacy Policy</a></p>
                <p><a href="#" class="hover:underline">Terms of Use</a></p>
                <p><a href="#" class="hover:underline">FAQ</a></p>
            </div>
        </footer>
=======
      <!-- Produk -->
      <div>
        <h3 class="font-bold mb-4">Produk</h3>
        <ul class="space-y-2 text-sm font-semibold">
          <li><a href="https://kansaipaint.id/product?wpf_filter_cat_0=18&amp;wpf_fbv=1">Cat Premium</a></li>
          <li><a href="https://kansaipaint.id/product?wpf_filter_cat_0=22&amp;wpf_fbv=1">Cat Interior</a></li>
          <li><a href="https://kansaipaint.id/product?wpf_filter_cat_0=21&amp;wpf_fbv=1">Cat Eksterior</a></li>
          <li><a href="https://kansaipaint.id/product?wpf_filter_cat_0=23&amp;wpf_fbv=1">Cat Kayu &amp; Besi</a></li>
          <li><a href="https://kansaipaint.id/tds">Lihat TDS</a></li>
        </ul>
      </div>

      <!-- Tentang Kami -->
      <div>
        <h3 class="font-bold mb-4">Tentang Kami</h3>
        <ul class="space-y-2 text-sm font-semibold">
          <li><a href="https://kansaipaint.id/artikel">Artikel</a></li>
          <li><a href="https://kansaipaint.id">Hubungi Kami</a></li>
        </ul>
      </div>

      <!-- Simulasi -->
      <div>
        <h3 class="font-bold mb-4">Simulasi</h3>
        <ul class="space-y-2 text-sm font-semibold">
          <li><a href="https://color.kansaipaint.id/paint-calculator">Kalkulator Cat</a></li>
          <li><a href="https://color.kansaipaint.id">Warna</a></li>
        </ul>
      </div>

      <!-- Layanan -->
      <div>
        <h3 class="font-bold mb-4">Layanan</h3>
        <ul class="space-y-2 text-sm font-semibold">
          <li><a href="https://kansaipaint.id/b2b">Business to Business</a></li>
          <li><a href="https://kansaipaint.id/warranty">Garansi 12 Tahun</a></li>
        </ul>
      </div>

    </div>
  </div>

  <!-- Copyright -->
  <div class="border-t bg-sky-400 text-white">
    <div class="max-w-6xl mx-auto px-4 py-4 text-sm text-center">
      ©2025 Kansai Paint. All Rights Reserved.
    </div>
  </div>
</footer>
      
>>>>>>> 524a590d9ef8264937c6972b6f19e4575f03d6a4
    </div>
</div>

</body>
</html>
