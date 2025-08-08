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
      <a href="/cart" aria-label="Shopping Cart" class="text-gray-500 hover:text-blue-400 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
          viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m12-9l2 9m-6-9v9" /> 
        </svg>
        <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

<<<<<<< HEAD
    <div tabindex="0" class="absolute inset-0 pl-10 focus:outline-none sm:pl-16">
      <el-dialog-panel class="ml-auto block size-full max-w-md transform transition duration-500 ease-in-out data-closed:translate-x-full sm:duration-700">
        <div class="flex h-full flex-col overflow-y-auto bg-white shadow-xl">
          <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
            <div class="flex items-start justify-between">
              <h2 id="drawer-title" class="text-lg font-medium text-gray-900">Shopping cart</h2>
              <div class="ml-3 flex h-7 items-center">
                <button type="button" command="close" commandfor="drawer" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                  <span class="absolute -inset-0.5"></span>
                  <span class="sr-only">Close panel</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
              </div>
            </div>

            <div class="mt-8">
              <div class="flow-root">
                <ul role="list" class="-my-6 divide-y divide-gray-200">
                  <li class="flex py-6">
                    <div class="size-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                      <img src="/img/Wibu stress.jpeg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="size-full object-cover" />
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a href="#">STRESS</a>  
                          </h3>
                          <p class="ml-4">$90.00</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Salmon</p>
                      </div>
                      <div class="flex flex-1 items-end justify-between text-sm">
                        <p class="text-gray-500">Qty 1</p>

                        <div class="flex">
                          <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="flex py-6">
                    <div class="size-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                      <img src="/img/Kansai Property Eksterior 5 Kg (1).png" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="size-full object-cover" />
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a href="#">Medium Stuff Satchel</a>
                          </h3>
                          <p class="ml-4">$32.00</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Blue</p>
                      </div>
                      <div class="flex flex-1 items-end justify-between text-sm">
                        <p class="text-gray-500">Qty 1</p>

                        <div class="flex">
                          <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="flex py-6">
                    <div class="size-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                      <img src="/img/SPLESH Kaleng Plastik 2,5 L - Copy.png" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="size-full object-cover" />
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a href="#">Zip Tote Basket</a>
                          </h3>
                          <p class="ml-4">$140.00</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">White and black</p>
                      </div>
                      <div class="flex flex-1 items-end justify-between text-sm">
                        <p class="text-gray-500">Qty 1</p>

                        <div class="flex">
                          <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
            <div class="flex justify-between text-base font-medium text-gray-900">
              <p>Subtotal</p>
              <p>$262.00</p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
            <div class="mt-6">
              <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-xs hover:bg-indigo-700">Checkout</a>
            </div>
            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
              <p>
                or
                <button type="button" command="close" commandfor="drawer" class="font-medium text-indigo-600 hover:text-indigo-500">
                  Continue Shopping
                  <span aria-hidden="true"> &rarr;</span>
                </button>
              </p>
            </div>
          </div>
        </div>
      </el-dialog-panel>
    </div>
  </dialog>
</el-dialog>
        
      </a>
=======
>>>>>>> c41e6bd26fcfa1d90ce442436eacb1ce174d6569
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


<div class="mt-10 max-w-6xl mx-auto h-96 bg-cover bg-center bg-no-repeat shadow-slate-500 overflow-auto"
     style="background-image: url('/img/Web-side-banner-.png');">
</div>

<div class="mb-20"></div>

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
  <div class="border-t bg-blue-900 text-white">
    <div class="max-w-6xl mx-auto px-4 py-4 text-sm text-center">
      ©2025 Kansai Paint. All Rights Reserved.
    </div>
  </div>
</footer>

</body>
</html>

 