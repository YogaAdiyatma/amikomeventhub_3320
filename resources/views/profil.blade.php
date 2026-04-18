<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - AmikomEventHub</title>
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
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-bold">AH</div>
                <span class="text-xl font-black tracking-tighter">AmikomEventHub</span>
            </a>
            <div class="hidden md:flex items-center gap-10">
                <a href="/" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Beranda</a>
                <a href="/katalog" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Katalog</a>
                <a href="/bantuan" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Bantuan</a>
                <a href="/kontak" class="text-slate-500 hover:text-indigo-600 font-bold text-sm uppercase tracking-widest transition">Kontak</a>
            </div>
            <a href="/profil" class="px-6 py-2.5 bg-indigo-600 text-white rounded-xl font-bold text-sm shadow-md">Profil Saya</a>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6 py-20 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
            <div class="md:col-span-4">
                <div class="bg-white p-10 rounded-[3rem] border border-slate-100 shadow-sm text-center">
                    <div class="w-32 h-32 bg-indigo-100 rounded-[2.5rem] mx-auto mb-8 flex items-center justify-center overflow-hidden border-4 border-white shadow-xl">
                        <img src="https://ui-avatars.com/api/?name=Yoga+Adiyatma&background=4f46e5&color=fff&size=128" alt="Avatar">
                    </div>
                    <h2 class="text-2xl font-black tracking-tight">Yoga Adiyatma</h2>
                    <p class="text-indigo-600 font-black text-xs uppercase tracking-[0.2em] mt-3">Mahasiswa Aktif</p>
                    <button class="w-full mt-10 py-4 bg-rose-50 text-rose-600 rounded-2xl font-bold hover:bg-rose-600 hover:text-white transition duration-300">Keluar Sistem</button>
                </div>
            </div>

            <div class="md:col-span-8 bg-white p-12 rounded-[3rem] border border-slate-100 shadow-sm">
                <div class="flex items-center gap-4 mb-12">
                    <div class="w-1.5 h-8 bg-indigo-600 rounded-full"></div>
                    <h1 class="text-3xl font-black">Informasi Akun</h1>
                </div>
                <div class="space-y-10">
                    <div class="flex flex-col md:flex-row justify-between border-b border-slate-50 pb-6">
                        <span class="text-slate-400 font-black text-[10px] uppercase tracking-widest">Nomor Induk Mahasiswa</span>
                        <span class="text-indigo-600 font-mono font-bold text-lg tracking-tighter">24.12.3320</span>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between border-b border-slate-50 pb-6">
                        <span class="text-slate-400 font-black text-[10px] uppercase tracking-widest">Nama Mahasiswa</span>
                        <span class="text-slate-900 font-bold text-lg">Yoga Adiyatma</span>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between border-b border-slate-50 pb-6">
                        <span class="text-slate-400 font-black text-[10px] uppercase tracking-widest">Program Studi</span>
                        <span class="text-slate-900 font-bold text-lg">S1 Sistem Informasi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>