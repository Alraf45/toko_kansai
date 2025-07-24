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
          placeholder="Buruan Cari Jingg!"
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
      <button aria-label="Shopping Cart" class="text-gray-500 hover:text-blue-400 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
          viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m12-9l2 9m-6-9v9" />
        </svg>
      </button>
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
     style="background-image: url('/img/1.jpg.jpeg');">
</div>

  <div class="font-bold text-center text-4xl mt-28">
  <h1 class="text-black">Browse By Category</h1>
  </div>

  <div class="mb-20"></div>
  
  
  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900">Best Selling Products</h2>
      
      <div class="mt-3 grid grid-cols-1 gap-x-3 gap-y-8 sm:grid-cols-1 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <img src="/img/KANSAI FTALIT DUO.png" alt="Front of men's Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-60 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="/product">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  KANSAI FTALIT DUO
                </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <img src="/img/KANSAI GLIMMER 2,5 LITER.png" alt="Front of men's Basic Tee in white." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-60 lg:aspect-auto lg:h-80" />
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                KANSAI SPLESH GLIMMER
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Aspen White</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <img src="/img/Kansai Anti Mosquito 2,5 L.png" alt="Front of men&#039;s Basic Tee in dark gray." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-60 lg:aspect-auto lg:h-80" />
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                KANSAI ANTI-MOSQUITO
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Charcoal</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <img src="/img/FA_Kansai-Diamond-Shield_2,5L_Display.png" alt="Front of men&#039;s Artwork Tee in peach with white and brown dots forming an isometric cube." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-60 lg:aspect-auto lg:h-80" />
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                KANSAI DIAMOND SHIELD 12-IN-1
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Iso Dots</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
    </div>
  </div>
</div>


<button class="my-10 bg-sky-500 px-5 py-2 rounded-full text-white font-semibold font-serif block mx-auto hover:bg-sky-600
active:bg-sky-700 focus:ring-sky-300 animate-spin">
<a href="/product">
    <span aria-hidden="true" class="absolute inset-0"></span>
    View All Products
  </a>
</button>

<hr class="my-20" />  


<div class="my-20"></div>

<div class="container px-8 mt-20 mb-20 ">
  <div class="border rounded-lg shadow-lg p-10">
  <div class="w-10 h-10 bg-sky-200 rounded-full
  flex fixed bottom-5 right-5 cursor-pointer"><a href="" class="text-xl m-auto">🔝</a></div>
    <img src="img/452_main.jpg" alt="ngaktau" width="150" class="float-left mr-3"> 
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi harum, unde quia aliquam libero quo itaque qui eveniet fuga, voluptatibus saepe dignissimos quaerat dolorum voluptatum. Numquam tenetur, aspernatur repellat repudiandae ut cum earum saepe! Officiis, quae dolore? Vel ea ex sequi quod ratione numquam tempore expedita libero maiores magni fuga tempora corrupti iste minus ullam officia facilis pariatur, eum nisi laudantium placeat. Voluptatem, nemo libero ea autem sint neque tempore.
  </p>
  </div>
</div>


</body>
</html>

