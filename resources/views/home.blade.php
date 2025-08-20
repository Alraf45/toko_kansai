@include('layout.header')

<div class="mt-10 max-w-6xl mx-auto h-96 bg-cover bg-center bg-no-repeat shadow-slate-500"
    style="background-image: url('/img/Web-side-banner-.png');">
</div>

  <div class="font-bold text-center text-4xl mt-10">
  <h1 class="text-black">Browse By Category</h1>
  </div>

<section class="py-20">
  <div class="flex flex-wrap justify-center gap-4">
    <a href="/cat_kayu_besi" class="px-5 py-2 block mx-10 border border-black text-black rounded-full hover:bg-gray-200 transition">
      Cat Besi & Kayu
    </a>
    <a href="/cat_eksterior" class="px-5 py-2 block mx-10 border border-black text-black rounded-full hover:bg-gray-200 transition">
      Cat Eksterior
    </a>
    <a href="/cat_premium" class="px-5 py-2 block mx-10 border border-black text-black rounded-full hover:bg-gray-200 transition">
      Cat Premium
    </a>
    <a href="/cat_interior" class="px-5 py-2 block mx-10 border border-black text-black rounded-full hover:bg-gray-200 transition">
      Cat Interior
    </a>
  </div>
</section>
  <div class="mb-20"></div>
  <div class="border-t border-gray-400 w-10/12 mx-auto">
  <div class="mt-8 font-semibold mx-auto"><h1 class="text-4xl">Best Selling Products</h1></div>
  </div>
  
  <div class="mb-20"></div>

   <div class="mt-3 max-w-full grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 
       gap-x-2 gap-y-12 justify-items-center">

  <!-- ITEM 1 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] hover:shadow-lg transition-shadow">
    <a href="/product_detail">
    <img src="/img/KANSAI FTALIT DUO.png" alt="KANSAI FTALIT DUO"
         class="w-full h-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        KANSAI FTALIT DUO
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
      </a>
    </div>
  </div>

 <!-- ITEM 2 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] hover:shadow-lg transition-shadow">
    <img src="/img/KANSAI GLIMMER.png" alt="KANSAI SPLESH GLIMMER"
         class="w-full h-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="/cart">KANSAI SPLESH GLIMMER</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐</p>
    </div>
  </div>

  <!-- ITEM 3 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] hover:shadow-lg transition-shadow">
    <img src="/img/SPLESH Kaleng Plastik 2,5 L - Copy.png" alt="KANSAI SPLESH"
         class="w-full h-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI SPLESH</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐</p>
    </div>
  </div>

  <!-- ITEM 4 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] hover:shadow-lg transition-shadow">
    <img src="/img/Kansai-Diamond-Shield.png" alt="KANSAI DIAMOND SHIELD"
         class="w-full h-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="/">KANSAI DIAMOND SHIELD 12-IN-1</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
    </div>
  </div>
  </div>

<div class="mb-44"></div>

<button class="my-10 bg-sky-700 px-5 py-2 rounded-full text-white font-semibold font-serif block mx-auto hover:bg-sky-900
active:bg-blue-900 focus:ring-sky-300 animate-bounce">
  <span class="sr-only">View All Products</span>
<a href="/product">
    <span aria-hidden="true" class="absolute inset-0"></span>
    View All Products
  </a>
</button>

<<<<<<< HEAD
<div class="mb-20"></div>
<div class="mb-76"></div>

<footer class="bg-white border-t font-raleway text-[#1C244B]">
  <div class="max-w-[1200px] mx-auto px-4 py-8">
    <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
      
      <!-- Logo -->
      <div class="col-start-1 col-end-3 md:col-end-auto">
        <img src="/img/452_main.jpg" alt="Kansai Paint Logo" class="h-[68px]">
      </div>

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
          <li><a href="https://kansaipaint.id/hubungi-kami">Hubungi Kami</a></li>
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
  <div class="border-t bg-blue-900 text-white">
    <div class="max-w-6xl mx-auto px-4 py-4 text-sm text-center">
      ©2025 Kansai Paint. All Rights Reserved.
    </div>
  </div>
</footer>

=======
<div class="mb-28"></div> 

  <div class="border-t border-gray-400 w-10/12 mx-auto"></div>

<div class="mb-96"></div>

@include('layout.footer')
>>>>>>> 07f3884272e78ac209250ba58779c8f671659e97

</body>
</html>

