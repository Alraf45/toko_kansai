@include('layout.header')

  <div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-sky-400 text-white min-h-screen flex flex-col">
        <div class="p-4 font-bold text-lg flex items-center">
            <span></span>
            <span class="ml-1"></span>
        </div>
        <nav class="flex-1">
            <a href="" class="block py-6 px-14 hover:bg-sky-600 rounded-full"><h1 class="text-lg font-semibold">Dashboard</h1></a>
            <a href="/user_management" class="block py-8 px-8 hover:bg-sky-600 rounded-full">👤 User</a>
            <a href="/product_management" class="block py-8 px-8 hover:bg-sky-600 rounded-full">📦 Product</a>
            <a href="/documents" class="block py-8 px-8 hover:bg-sky-600 rounded-full">📄 Documents</a>
            <a href="/statistics" class="block py-8 px-8 hover:bg-sky-600 rounded-full">📊 Statistics</a>
            <a href="/settings" class="block py-10 px-8  hover:bg-sky-600 rounded-full">⚙️ Settings</a>
        </nav>
        <div class="p-8 border-t border-sky-400 mb-4">
            <a href="/" class="flex items-center">
                <span class="mr-2">▶️</span> Logout
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <div class="mt-10"></div>
        
      
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
    </div>
</div>

</body>
</html>
