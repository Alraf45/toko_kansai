<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kansai Paint
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom scrollbar for product sliders or any horizontal scroll if needed */
    ::-webkit-scrollbar {
      height: 6px;
      width: 6px;
    }
    ::-webkit-scrollbar-thumb {
      background-color: rgba(100, 116, 139, 0.5);
      border-radius: 3px; 
    }
  </style>
</head>
<body class="bg-white font-sans text-gray-700">
  <!-- Navbar -->
  <nav class="w-full flex flex-wrap items-center justify-between px-4 py-3 shadow-sm sticky top-0 bg-white z-50">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <img src="img/452_main.jpg" class="h-16">
    </div>

    <!-- Menu -->
    <ul class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm font-medium text-gray-700 mt-3 md:mt-0">
      <li>
        <a href="/" class="nav-link block py-2 px-1 border-b-2 border-transparent hover:border-blue-400 hover:text-blue-400 transition-all">Home</a>
      </li>
      <li>
        <a href="/product" class="nav-link block py-2 px-1 border-b-2 border-transparent hover:border-blue-400 hover:text-blue-400 transition-all">Product</a>
      </li>
      <li>
        <a href="/colors" class="nav-link block py-2 px-1 border-b-2 border-transparent hover:border-blue-400 hover:text-blue-400 transition-all">Colors</a>
      </li>
      <li>
        <a href="/login" class="nav-link block py-2 px-1 border-b-2 border-transparent hover:border-blue-400 hover:text-blue-400 transition-all">Login</a>
      </li>
    </ul>

    <!-- Search + Cart -->
    <div class="flex flex-wrap items-center gap-4 mt-3 md:mt-0">
      <!-- Search -->
      <div class="relative w-48 md:w-72">
        <input
          type="text"
          placeholder="Buruan Cari!"
          class="w-full rounded-lg border border-gray-300 py-2 pl-4 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        />
        <button type="submit" aria-label="Search" class="absolute right-2 top-2.5 text-gray-400 hover:text-blue-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 21l-4.35-4.35m0 0a7.5 7.5 0 10-10.61-10.61 7.5 7.5 0 0010.6 10.6z" />
          </svg>
        </button>
      </div>

      <!-- Cart -->
       <div>
        <a href="/cart">
      <button aria-label="Shopping Cart" class="text-gray-500 hover:text-blue-400 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
          viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m12-9l2 9m-6-9v9" />
        </svg>
      </button>
      </a>
    </div>
  </nav>

  <!-- SCRIPT: tandai menu yang aktif -->
  <script>
    const currentPath = window.location.pathname;
    document.querySelectorAll(".nav-link").forEach(link => {
      if (link.getAttribute("href") === currentPath) {
        link.classList.add("text-blue-400", "border-blue-400");
      }
    });
  </script>
</body>

<div class="mb-16"></div>

<div class="mt-3 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 
  gap-x-2 gap-y-12 justify-items-center">

  <!-- ITEM 1 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/KANSAI FTALIT DUO.png" alt="KANSAI FTALIT DUO"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="/product">KANSAI FTALIT DUO</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
    </div>
  </div>

 <!-- ITEM 2 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/KANSAI GLIMMER 2,5 LITER.png" alt="KANSAI SPLESH GLIMMER"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI SPLESH GLIMMER</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐</p>
    </div>
  </div>

  <!-- ITEM 3 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/SPLESH Kaleng Plastik 2,5 L - Copy.png" alt="KANSAI SPLESH"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI SPLESH</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐</p>
    </div>
  </div>

  <!-- ITEM 4 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/FA_Kansai-Diamond-Shield_2,5L_Display.png" alt="KANSAI DIAMOND SHIELD"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI DIAMOND SHIELD 12-IN-1</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
    </div>
  </div>
</div>
<div class="mb-20"></div>

<div class="mt-3 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-2 gap-y-12">

  <!-- ITEM 1 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/KANSAI FTALIT DUO.png" alt="KANSAI FTALIT DUO"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="/product">KANSAI FTALIT DUO</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
    </div>
  </div>

 <!-- ITEM 2 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/KANSAI GLIMMER 2,5 LITER.png" alt="KANSAI SPLESH GLIMMER"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI SPLESH GLIMMER</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐</p>
    </div>
  </div>

  <!-- ITEM 3 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/SPLESH Kaleng Plastik 2,5 L - Copy.png" alt="KANSAI SPLESH"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI SPLESH</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐</p>
    </div>
  </div>

  <!-- ITEM 4 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/FA_Kansai-Diamond-Shield_2,5L_Display.png" alt="KANSAI DIAMOND SHIELD"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI DIAMOND SHIELD 12-IN-1</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
    </div>
  </div>
</div>
<div class="mb-20"></div>

<div class="mt-3 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-2 gap-y-12">

  <!-- ITEM 1 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/KANSAI FTALIT DUO.png" alt="KANSAI FTALIT DUO"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="/product">KANSAI FTALIT DUO</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
    </div>
  </div>

 <!-- ITEM 2 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/KANSAI GLIMMER 2,5 LITER.png" alt="KANSAI SPLESH GLIMMER"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI SPLESH GLIMMER</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐</p>
    </div>
  </div>

  <!-- ITEM 3 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/SPLESH Kaleng Plastik 2,5 L - Copy.png" alt="KANSAI SPLESH"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI SPLESH</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐</p>
    </div>
  </div>

  <!-- ITEM 4 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] mx-auto hover:shadow-lg transition-shadow">
    <img src="/img/FA_Kansai-Diamond-Shield_2,5L_Display.png" alt="KANSAI DIAMOND SHIELD"
         class="w-full h-[200px] max-w-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI DIAMOND SHIELD 12-IN-1</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
    </div>
  </div>
</div>
<div class="mb-20"></div>

    <div class="mt-3 mx-w-full grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 
       gap-x-2 gap-y-12 justify-items-center">
  <!-- ITEM 1 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] hover:shadow-lg transition-shadow">
    <img src="/img/KANSAI FTALIT DUO.png" alt="KANSAI FTALIT DUO"
         class="w-full h-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="/product">KANSAI FTALIT DUO</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
    </div>
  </div>

 <!-- ITEM 2 -->
  <div class="group border rounded-md overflow-hidden max-w-[200px] hover:shadow-lg transition-shadow">
    <img src="/img/KANSAI GLIMMER 2,5 LITER.png" alt="KANSAI SPLESH GLIMMER"
         class="w-full h-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI SPLESH GLIMMER</a>
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
    <img src="/img/FA_Kansai-Diamond-Shield_2,5L_Display.png" alt="KANSAI DIAMOND SHIELD"
         class="w-full h-[200px] object-cover bg-gray-200 group-hover:opacity-60 p-4" />
    <div class="p-3 text-center">
      <h3 class="text-sm text-gray-700 font-semibold">
        <a href="#">KANSAI DIAMOND SHIELD 12-IN-1</a>
      </h3>
      <p class="mt-3 text-sm text-red-500 font-semibold">RP.100,000</p>
      <p class="mt-1 text-sm font-medium text-gray-900">⭐⭐⭐⭐⭐</p>
    </div>
  </div>
  </div>
  <div class="mb-20"></div>

</body>
</html>

 