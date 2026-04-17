@extends('layouts.admin')

@section('title', 'Manajemen Kategori')
@section('page-title', 'Kategori Event')
@section('page-subtitle', 'Kelola kategori untuk mengklasifikasikan event')

@section('content')

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

    <div class="p-5 border-b border-gray-100 flex items-center justify-between">
        <h3 class="font-bold text-gray-800">Daftar Kategori</h3>
        <button class="bg-purple-600 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-purple-700 transition">
            + Tambah Kategori
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wide">
                <tr>
                    <th class="text-left px-5 py-3">No</th>
                    <th class="text-left px-5 py-3">Nama Kategori</th>
                    <th class="text-left px-5 py-3">Deskripsi</th>
                    <th class="text-left px-5 py-3">Jumlah Event</th>
                    <th class="text-left px-5 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($categories as $i => $cat)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-5 py-3.5 text-gray-400">{{ $i + 1 }}</td>
                    <td class="px-5 py-3.5">
                        <span class="bg-purple-100 text-purple-700 font-semibold text-xs px-3 py-1 rounded-full">
                            {{ $cat['name'] }}
                        </span>
                    </td>
                    <td class="px-5 py-3.5 text-gray-500">{{ $cat['description'] }}</td>
                    <td class="px-5 py-3.5 text-center font-semibold text-gray-700">{{ $cat['total_events'] }}</td>
                    <td class="px-5 py-3.5">
                        <div class="flex gap-2">
                            <button class="text-blue-500 hover:text-blue-700 text-xs font-medium border border-blue-200 px-2.5 py-1 rounded-lg hover:bg-blue-50 transition">
                                Edit
                            </button>
                            <button class="text-red-500 hover:text-red-700 text-xs font-medium border border-red-200 px-2.5 py-1 rounded-lg hover:bg-red-50 transition">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection