<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog - AmikomEventHub</title>
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
    </style>
</head>

<body class="bg-slate-50 text-slate-900">

    <nav class="sticky top-0 z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center gap-3">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-xl">AH</div>
                <span class="text-xl font-black tracking-tighter">AmikomEventHub</span>
            </a>
            <div class="hidden md:flex items-center gap-10">
                <a href="/" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Beranda</a>
                <a href="/katalog" class="text-indigo-600 font-bold text-sm uppercase tracking-widest">Katalog</a>
                <a href="/bantuan" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Bantuan</a>
                <a href="/kontak" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Kontak</a>
            </div>
            <a href="/profil" class="px-6 py-2.5 bg-slate-900 text-white rounded-xl font-bold text-sm shadow-md">Profil Saya</a>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-16">
            <div>
                <span class="text-indigo-600 font-bold uppercase tracking-widest text-xs">Eksplorasi</span>
                <h1 class="text-5xl font-black mt-2">Daftar Event</h1>
                <p class="text-slate-500 mt-4 max-w-md font-medium">Pilih kategori event yang sesuai dengan minat akademik dan hobi Anda.</p>
            </div>
            <div class="flex bg-white p-2 rounded-2xl shadow-sm border w-full md:w-auto">
                <input type="text" placeholder="Cari nama event..." class="bg-transparent px-6 py-3 outline-none w-full md:w-80 font-medium">
                <button class="bg-indigo-600 text-white px-8 rounded-xl font-bold">Cari</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="group bg-white rounded-[2.5rem] border border-slate-100 overflow-hidden hover:shadow-2xl hover:shadow-indigo-100/50 transition-all duration-500">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-6 left-6">
                        <span class="px-4 py-2 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-black uppercase tracking-widest text-indigo-600 shadow-sm">Workshop</span>
                    </div>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black mb-4 group-hover:text-indigo-600 transition">UI/UX Design Masterclass</h3>
                    <div class="flex items-center gap-3 text-slate-400 font-bold text-xs uppercase tracking-widest mb-8">
                        <span>Cinema Amikom</span>
                        <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                        <span>20 Okt 2024</span>
                    </div>
                    <div class="flex justify-between items-center pt-8 border-t">
                        <span class="text-indigo-600 font-black text-2xl">Rp 75.000</span>
                        <a href="#" class="px-6 py-3 bg-slate-900 text-white rounded-xl font-bold text-xs hover:bg-indigo-600 transition">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>