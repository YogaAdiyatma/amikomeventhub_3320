@extends('layouts.admin')

@section('title', 'Manajemen Events')
@section('page-title', 'Manajemen Events')
@section('page-subtitle', 'Kelola semua event yang terdaftar di platform')

@section('content')

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

    <div class="p-5 border-b border-gray-100 flex items-center justify-between">
        <h3 class="font-bold text-gray-800">Daftar Event</h3>
        <button class="bg-purple-600 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-purple-700 transition">
            + Tambah Event
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wide">
                <tr>
                    <th class="text-left px-5 py-3">No</th>
                    <th class="text-left px-5 py-3">Judul Event</th>
                    <th class="text-left px-5 py-3">Kategori</th>
                    <th class="text-left px-5 py-3">Tanggal</th>
                    <th class="text-left px-5 py-3">Harga</th>
                    <th class="text-left px-5 py-3">Kursi</th>
                    <th class="text-left px-5 py-3">Status</th>
                    <th class="text-left px-5 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($events as $i => $event)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-5 py-3.5 text-gray-400">{{ $i + 1 }}</td>
                    <td class="px-5 py-3.5 font-medium text-gray-800 max-w-xs">{{ $event['title'] }}</td>
                    <td class="px-5 py-3.5">
                        <span class="bg-purple-100 text-purple-700 text-xs font-semibold px-2 py-0.5 rounded-full">
                            {{ $event['category'] }}
                        </span>
                    </td>
                    <td class="px-5 py-3.5 text-gray-600">{{ $event['date'] }}</td>
                    <td class="px-5 py-3.5 font-semibold text-gray-700">{{ $event['price'] }}</td>
                    <td class="px-5 py-3.5 text-gray-600">{{ $event['seats'] }}</td>
                    <td class="px-5 py-3.5">
                        @if($event['status'] === 'Aktif')
                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">Aktif</span>
                        @else
                        <span class="bg-gray-100 text-gray-600 text-xs font-semibold px-2.5 py-1 rounded-full">Draft</span>
                        @endif
                    </td>
                    <td class="px-5 py-3.5">
                        <div class="flex gap-2">
                            <button class="text-blue-500 hover:text-blue-700 text-xs font-medium">Edit</button>
                            <button class="text-red-500 hover:text-red-700 text-xs font-medium">Hapus</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection