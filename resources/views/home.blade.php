<!DOCTYPE html>
<html lang="en">
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
  <!-- Navbar container -->
  <nav class="w-full flex items-center justify-between px-8 py-3 shadow-sm sticky top-0 bg-white z-50">
    <!-- Left part: Logo -->
    <div class="flex items-center space-x-2">
      <img src="img/452_main.jpg" class="h-20"> 
    </div>
    
    <!-- Center part: Navigation links -->
    <ul class="hidden md:flex space-x-10 text-gray-700 font-medium text-sm select-none">
      <li><a href="/" class="hover:text-blue-400 mx-auto">Home</a></li>
      <li><a href="/product" class="hover:text-blue-400 ">Product</a></li>
      <li><a href="/colors" class="hover:text-blue-400">Colors</a></li>
      <li><a href="/login" class="hover:text-blue-400 text-blue-400 ">Login</a></li>
    </ul>

    <!-- Right part: Search input + icons -->
    <div class="flex items-center space-x-6">
      <!-- Search input container -->
      <div class="relative w-72 hidden md:block">
        <input
          type="text"
          placeholder="Buruan Cari Jingg!"
          class="w-full rounded-lg border border-gray-300 py-2 pl-4 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
          aria-label="Search for products"
        />
        <button type="submit" aria-label="Search" class="absolute right-2 top-2.5 text-gray-400 hover:text-blue-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 21l-4.35-4.35m0 0a7.5 7.5 0 10-10.61-10.61 7.5 7.5 0 0010.6 10.6z" />
          </svg>
        </button>
      </div>

      <!-- Cart icon -->
      <button aria-label="Shopping Cart" class="text-gray-500 hover:text-blue-400 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
          viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m12-9l2 9m-6-9v9" />
        </svg>
      </button>
    </div>
  </nav>

  <div class="mt-32 max-w-xl mx-auto h-80 bg-slate-300 bg-contain bg-no-repeat bg-center rounded-2xl shadow-xl shadow-slate-500 overflow-auto blur-sm hover:blur-none" style="background-image: url('/img/1.jpg.jpeg');">
  </div>

</body>
</html>

 