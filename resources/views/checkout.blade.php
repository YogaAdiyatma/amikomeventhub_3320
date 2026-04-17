@extends('layouts.app')

@section('title', 'Checkout — Amikom Event Hub')

@section('content')

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <h1 class="text-2xl font-black text-gray-800 mb-2">🛒 Checkout Tiket</h1>
    <p class="text-gray-500 mb-8">Lengkapi data diri Anda untuk menyelesaikan pemesanan</p>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- LEFT: Form -->
        <div class="lg:col-span-2">
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                <h2 class="font-bold text-gray-700 mb-4 text-base">Data Pemesan</h2>

                <!-- Form (UI Only, belum ada backend) -->
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Nama Lengkap</label>
                        <input type="text" placeholder="Masukkan nama lengkap Anda"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">NIM</label>
                        <input type="text" placeholder="Masukkan NIM Anda"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Email Aktif</label>
                        <input type="email" placeholder="email@students.amikom.ac.id"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Nomor HP / WhatsApp</label>
                        <input type="text" placeholder="08xx-xxxx-xxxx"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Program Studi</label>
                        <select class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option>Pilih Prodi...</option>
                            <option>S1 Sistem Informasi</option>
                            <option>S1 Informatika</option>
                            <option>S1 Teknik Komputer</option>
                            <option>D3 Sistem Informasi</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Jumlah Tiket</label>
                        <select class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option>1 Tiket</option>
                            <option>2 Tiket</option>
                            <option>3 Tiket</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT: Ringkasan -->
        <div class="lg:col-span-1">
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                <h2 class="font-bold text-gray-700 mb-4 text-base">Ringkasan Pesanan</h2>

                <div class="text-sm space-y-2 mb-4 text-gray-600">
                    <p class="font-semibold text-gray-800">{{ $event['title'] }}</p>
                    <p>{{ $event['date'] }}</p>
                    <p>{{ $event['location'] }}</p>
                </div>

                <div class="border-t border-gray-200 pt-4 mt-4">
                    <div class="flex justify-between text-sm text-gray-600 mb-2">
                        <span>Harga tiket</span>
                        <span>Rp {{ number_format($event['price'], 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-600 mb-4">
                        <span>Biaya layanan</span>
                        <span>Rp 2.000</span>
                    </div>
                    <div class="flex justify-between font-black text-gray-800 text-base">
                        <span>Total</span>
                        <span class="text-purple-700">Rp {{ number_format($event['price'] + 2000, 0, ',', '.') }}</span>
                    </div>
                </div>

                <a href="{{ route('ticket') }}"
                    class="block w-full mt-5 text-center bg-purple-600 text-white font-bold py-3 rounded-xl hover:bg-purple-700 transition duration-200 shadow-md">
                    Bayar Sekarang
                </a>
                <a href="{{ route('events.show', $event['id']) }}"
                    class="block w-full text-center mt-3 text-sm text-gray-500 hover:text-gray-700">
                    ← Kembali ke Detail Event
                </a>
            </div>
        </div>

    </div>
</div>

@endsection