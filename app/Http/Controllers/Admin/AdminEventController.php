<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminEventController extends Controller
{
    public function index()
    {
        $events = [
            ['id' => 1, 'title' => 'Seminar Nasional AI 2026',      'category' => 'Seminar',   'date' => '20 Apr 2026', 'price' => 'Rp 50.000',  'seats' => 200, 'status' => 'Aktif'],
            ['id' => 2, 'title' => 'Workshop Laravel untuk Pemula', 'category' => 'Workshop',  'date' => '25 Apr 2026', 'price' => 'Rp 75.000',  'seats' => 50,  'status' => 'Aktif'],
            ['id' => 3, 'title' => 'Konser Musik Mahasiswa AMIKOM', 'category' => 'Konser',    'date' => '1 Mei 2026',  'price' => 'Gratis',      'seats' => 500, 'status' => 'Aktif'],
            ['id' => 4, 'title' => 'Hackathon Digital Business',    'category' => 'Kompetisi', 'date' => '10 Mei 2026', 'price' => 'Rp 100.000', 'seats' => 100, 'status' => 'Aktif'],
            ['id' => 5, 'title' => 'Talkshow Entrepreneurship',     'category' => 'Seminar',   'date' => '15 Mei 2026', 'price' => 'Rp 25.000',  'seats' => 300, 'status' => 'Draft'],
        ];

        return view('admin.events', compact('events'));
    }
}
