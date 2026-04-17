@extends('layouts.app')

@section('title', $event['title'] . ' — Amikom Event Hub')

@section('content')

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Breadcrumb -->
    <nav class="text-sm text-gray-500 mb-6">
        <a href="{{ route('home') }}" class="hover:text-purple-600">Home</a>
        <span class="mx-2">/</span>
        <span class="text-gray-700 font-medium">{{ $event['title'] }}</span>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- LEFT: Detail Event -->
        <div class="lg:col-span-2">
            <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}"
                class="w-full h-72 object-cover rounded-2xl mb-6 shadow-md">

            <span class="inline-block bg-purple-100 text-purple-700 text-xs font-bold px-3 py-1 rounded-full mb-3">
                {{ $event['category'] }}
            </span>

            <h1 class="text-3xl font-black text-gray-800 mb-4 leading-tight">
                {{ $event['title'] }}
            </h1>

            <!-- Info Grid -->
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="bg-purple-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 mb-1">Tanggal</p>
                    <p class="text-sm font-semibold text-gray-700">{{ $event['date'] }}</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 mb-1">Waktu</p>
                    <p class="text-sm font-semibold text-gray-700">{{ $event['time'] }}</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 mb-1">Lokasi</p>
                    <p class="text-sm font-semibold text-gray-700">{{ $event['location'] }}</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-4">
                    <p class="text-xs text-gray-500 mb-1">Pembicara</p>
                    <p class="text-sm font-semibold text-gray-700">{{ $event['speaker'] }}</p>
                </div>
            </div>

            <h2 class="text-lg font-bold text-gray-800 mb-2">Deskripsi Event</h2>
            <p class="text-gray-600 leading-relaxed">{{ $event['description'] }}</p>

            <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-xl">
                <p class="text-sm text-yellow-800">
                    <strong>Penyelenggara:</strong> {{ $event['organizer'] }}
                </p>
            </div>
        </div>

        <!-- RIGHT: Pembelian Tiket -->
        <div class="lg:col-span-1">
            <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 sticky top-24">

                <h3 class="font-bold text-gray-800 text-lg mb-4">Pesan Tiket</h3>

                <!-- Price -->
                <div class="bg-purple-50 rounded-xl p-4 mb-4 text-center">
                    <p class="text-xs text-gray-500 mb-1">Harga Per Tiket</p>
                    <p class="text-3xl font-black text-purple-700">{{ $event['price'] }}</p>
                </div>

                <!-- Seat Info -->
                <div class="mb-4">
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-500">Kursi Tersisa</span>
                        <span class="font-semibold text-gray-700">{{ $event['seats_left'] }} / {{ $event['seats'] }}</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-purple-600 h-2 rounded-full"
                            style="width: {{ ($event['seats_left'] / $event['seats']) * 100 }}%"></div>
                    </div>
                </div>

                <!-- CTA Button -->
                <a href="{{ route('checkout') }}"
                    class="block w-full text-center bg-purple-600 text-white font-bold py-3 rounded-xl hover:bg-purple-700 transition duration-200 shadow-md">
                    Daftar Sekarang
                </a>

                <a href="{{ route('home') }}"
                    class="block w-full text-center mt-3 text-gray-500 text-sm hover:text-gray-700 transition">
                    ← Kembali ke Daftar Event
                </a>

            </div>
        </div>

    </div>
</div>

@endsection