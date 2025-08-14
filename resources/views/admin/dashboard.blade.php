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
    <aside class="w-64 bg-sky-500 text-white min-h-screen flex flex-col">
        <div class="p-4 font-bold text-lg flex items-center">
            <span></span>
            <span class="ml-1"></span>
        </div>
        <nav class="flex-1">
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Dashboard</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">User management</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Product management</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Documents</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Statistics</a>
            <a href="dashboard" class="block py-2 px-4 hover:bg-sky-600">Settings</a>
        </nav>
        <div class="p-4 border-t border-sky-400">
            <a href="#" class="flex items-center">
                <span class="mr-2">⇦</span> Logout
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
    </div>
</div>

</body>
</html>
