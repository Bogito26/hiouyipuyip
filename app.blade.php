<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IT WEEK 2025')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold">IT WEEK 2025</div>
                <div class="hidden md:flex space-x-6">
                    <a href="#hero" class="hover:text-blue-200 transition">Home</a>
                    <a href="#about" class="hover:text-blue-200 transition">About</a>
                    <a href="#events" class="hover:text-blue-200 transition">Events</a>
                    <a href="#contact" class="hover:text-blue-200 transition">Contact</a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 IT WEEK. All rights reserved.</p>
            <p class="mt-2 text-gray-400">Innovating Tomorrow, Today</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            alert('Mobile menu would toggle here. This is a simplified version.');
        });
    </script>
</body>
</html>