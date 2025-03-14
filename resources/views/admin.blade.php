<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white flex flex-col p-4">
            <h1 class="text-2xl font-bold mb-6">Admin Panel</h1>
            <nav>
                <ul>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Dashboard</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Users</a>
                    </li>
                    <li class="mb-2">
                        <a href="/home" class="block py-2 px-3 rounded hover:bg-gray-700">Home</a>
                    </li>
                </ul>
            </nav>
            <div class="mt-auto">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button href="#" class="py-2 px-3 w-full bg-red-500 rounded hover:bg-red-600">Logout</button>
                </form>
            </div>
        </aside>

        <!-- Content -->
        <main class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <h2 class="text-lg font-semibold">Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <span>Admin</span>
                    <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full" alt="User Avatar">
                </div>
            </header>

            <!-- Main Content -->
            <section class="p-6 ">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Card -->
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h3 class="text-xl font-semibold">Total Users</h3>
                        <p class="text-gray-600 mt-2">1,230</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h3 class="text-xl font-semibold">Total Sales</h3>
                        <p class="text-gray-600 mt-2">$5,230</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h3 class="text-xl font-semibold">Pending Orders</h3>
                        <p class="text-gray-600 mt-2">15</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
