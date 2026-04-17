<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Amikom Event Hub')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>

<body class="bg-gray-50 font-sans antialiased">

    <!-- NAVBAR -->
    <nav class="bg-purple-800 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
                        <span class="text-purple-800 font-black text-sm">AE</span>
                    </div>
                    <span class="font-bold text-xl">Amikom<span class="text-yellow-400">EventHub</span></span>
                </a>

                <div class="flex items-center gap-6">
                    <a href="{{ route('home') }}" class="hover:text-yellow-400 transition text-sm font-medium">Home</a>
                    <a href="{{ route('ticket') }}" class="hover:text-yellow-400 transition text-sm font-medium">Tiket Saya</a>
                    <a href="{{ route('admin.dashboard') }}" class="bg-yellow-400 text-purple-800 font-semibold px-4 py-2 rounded-lg text-sm hover:bg-yellow-300 transition">
                        Admin Panel
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-purple-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 py-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
                            <span class="text-purple-800 font-black text-sm">AE</span>
                        </div>
                        <span class="font-bold text-lg">AmikomEventHub</span>
                    </div>
                    <p class="text-purple-300 text-sm">Platform manajemen event Universitas AMIKOM Yogyakarta.</p>
                </div>
                <div>
                    <h4 class="font-semibold text-yellow-400 mb-3">Quick Links</h4>
                    <ul class="space-y-2 text-sm text-purple-300">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('ticket') }}" class="hover:text-white transition">Tiket Saya</a></li>
                        <li><a href="{{ route('admin.dashboard') }}" class="hover:text-white transition">Admin Panel</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-yellow-400 mb-3">Kontak</h4>
                    <ul class="space-y-2 text-sm text-purple-300">
                        <li>📧 admin@amikomeventhub.com</li>
                        <li>📍 Jl. Ring Road Utara, Yogyakarta</li>
                        <li>📞 (0274) 884-201</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-purple-700 mt-8 pt-6 text-center text-sm text-purple-400">
                &copy; {{ date('Y') }} AmikomEventHub — Universitas AMIKOM Yogyakarta.
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>

</html>