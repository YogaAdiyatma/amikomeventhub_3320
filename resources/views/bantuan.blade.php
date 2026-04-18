<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        details summary::-webkit-details-marker {
            display: none;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900">

    <nav class="sticky top-0 z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center gap-3">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-bold">AH</div>
                <span class="text-xl font-black tracking-tighter">AmikomEventHub</span>
            </a>
            <div class="hidden md:flex items-center gap-10">
                <a href="/" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Beranda</a>
                <a href="/katalog" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Katalog</a>
                <a href="/bantuan" class="text-indigo-600 font-bold text-sm uppercase tracking-widest">Bantuan</a>
                <a href="/kontak" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Kontak</a>
            </div>
            <a href="/profil" class="px-6 py-2.5 bg-slate-900 text-white rounded-xl font-bold text-sm shadow-md transition hover:bg-indigo-600">Profil Saya</a>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto px-6 py-24 min-h-screen">
        <div class="text-center mb-20">
            <span class="text-indigo-600 font-bold uppercase tracking-widest text-[10px]">Pertanyaan Umum</span>
            <h1 class="text-5xl font-black mt-4">Pusat Bantuan</h1>
            <p class="text-slate-500 mt-6 font-medium text-lg">Cari solusi kendala pendaftaran atau pembayaran event Anda di sini.</p>
        </div>

        <div class="space-y-6">
            <details class="group bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden transition hover:shadow-md" open>
                <summary class="flex justify-between items-center p-10 cursor-pointer list-none">
                    <h3 class="text-xl font-bold">Bagaimana proses verifikasi pembayaran?</h3>
                    <svg class="w-6 h-6 text-slate-400 group-open:rotate-180 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </summary>
                <div class="px-10 pb-10 pt-0 text-slate-500 leading-relaxed font-medium">
                    Pembayaran melalui sistem Midtrans akan terverifikasi secara otomatis dalam hitungan detik setelah transaksi berhasil. Tiket akan langsung dikirim ke email Anda.
                </div>
            </details>
        </div>
    </div>

    <footer class="bg-slate-900 text-white pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-20">
            <div class="col-span-1 md:col-span-2 space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-bold">AH</div>
                    <span class="text-xl font-black">AmikomEventHub</span>
                </div>
                <p class="text-slate-400 max-w-xs font-medium italic">Solusi praktis manajemen event kampus Amikom.</p>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-indigo-400 uppercase tracking-widest text-xs">Layanan</h4>
                <ul class="space-y-4 text-slate-300 font-medium text-sm">
                    <li><a href="/katalog" class="hover:text-white transition">Semua Event</a></li>
                    <li><a href="/bantuan" class="hover:text-white transition">FAQ</a></li>
                    <li><a href="/kontak" class="hover:text-white transition">Hubungi Support</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-indigo-400 uppercase tracking-widest text-xs">Lokasi</h4>
                <ul class="space-y-4 text-slate-300 font-medium text-sm leading-relaxed">
                    <li>Jl. Ring Road Utara, Condongcatur</li>
                    <li>Sleman, Yogyakarta</li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 pt-10 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-6 text-slate-500 text-xs font-bold uppercase tracking-widest">
            <p>Copyright 2024 AmikomEventHub</p>
            <div class="flex gap-8">
                <a href="#" class="hover:text-white">Instagram</a>
                <a href="#" class="hover:text-white">Twitter</a>
            </div>
        </div>
    </footer>

</body>

</html>