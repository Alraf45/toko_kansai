<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <nav class="w-full flex flex-wrap items-center justify-between px-4 py-3 shadow-sm sticky top-0 bg-white z-50">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <img src="public/img/452_main.jpg" class="h-16">
    </div>
    </nav>

  <div class="flex">
    <!-- Sidebar -->
    <aside class="w-1/5 bg-sky-400 h-screen p-16">
      <h3 class="text-lg text-white font-semibold mb-10">Dashboard</h3>
      <ul class="space-y-2">
        <li><a href="/profile" class="block py-1 text-white hover:text-black font-mono mt-8">Users</a></li>
        <li><a href="/product" class="block py-1 text-white hover:text-black font-monomt-12">[<] Logout</a></li>
      </ul>
    </aside></li>
        <li><a href="/" class="block py-1 text-white hover:text-red-500 font-mono 

    <!-- Main Content -->
    <main class="w-4/5 p-6">
      <h2 class="text-2xl font-bold mb-2">Welcome, atminnn!</h2>
      <p class="mb-6">This is your dashboard overview.</p>

      <!-- Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        <div class="bg-red-400 text-white rounded-lg shadow p-6 hover:bg-red-600">
          <h5 class="text-xl font-semibold mb-2">Users</h5>
          <p>1,024 Active Users</p>
        </div>
        <div class="bg-sky-400 text-white rounded-lg shadow p-6 hover:bg-sky-600">
      
          <p>$12,340 This Month</p>
        </div>
      </div>
    </main>
  </div>

</body>
</html>
