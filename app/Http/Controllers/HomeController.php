<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman Home (daftar event)
     */
    public function index()
    {
        // Data dummy sementara (nanti akan diganti dengan data dari database)
        $events = [
            [
                'id'       => 1,
                'title'    => 'Seminar Nasional Teknologi AI 2026',
                'category' => 'Seminar',
                'date'     => '20 April 2026',
                'location' => 'Auditorium AMIKOM, Yogyakarta',
                'price'    => 'Rp 50.000',
                'image'    => 'https://via.placeholder.com/400x250/7C3AED/FFFFFF?text=Seminar+AI',
                'seats'    => 200,
            ],
            [
                'id'       => 2,
                'title'    => 'Workshop Laravel untuk Pemula',
                'category' => 'Workshop',
                'date'     => '25 April 2026',
                'location' => 'Lab Komputer AMIKOM, Yogyakarta',
                'price'    => 'Rp 75.000',
                'image'    => 'https://via.placeholder.com/400x250/7C3AED/FFFFFF?text=Workshop+Laravel',
                'seats'    => 50,
            ],
            [
                'id'       => 3,
                'title'    => 'Konser Musik Mahasiswa AMIKOM',
                'category' => 'Konser',
                'date'     => '1 Mei 2026',
                'location' => 'Lapangan AMIKOM, Yogyakarta',
                'price'    => 'Gratis',
                'image'    => 'https://via.placeholder.com/400x250/7C3AED/FFFFFF?text=Konser+Musik',
                'seats'    => 500,
            ],
            [
                'id'       => 4,
                'title'    => 'Hackathon Digital Business 2026',
                'category' => 'Kompetisi',
                'date'     => '10 Mei 2026',
                'location' => 'Gedung Serbaguna AMIKOM',
                'price'    => 'Rp 100.000',
                'image'    => 'https://via.placeholder.com/400x250/7C3AED/FFFFFF?text=Hackathon',
                'seats'    => 100,
            ],
            [
                'id'       => 5,
                'title'    => 'Talkshow Entrepreneurship Digital',
                'category' => 'Seminar',
                'date'     => '15 Mei 2026',
                'location' => 'Aula Utama AMIKOM',
                'price'    => 'Rp 25.000',
                'image'    => 'https://via.placeholder.com/400x250/7C3AED/FFFFFF?text=Talkshow',
                'seats'    => 300,
            ],
            [
                'id'       => 6,
                'title'    => 'Pameran Karya Mahasiswa 2026',
                'category' => 'Pameran',
                'date'     => '20 Mei 2026',
                'location' => 'Lobby AMIKOM, Yogyakarta',
                'price'    => 'Gratis',
                'image'    => 'https://via.placeholder.com/400x250/7C3AED/FFFFFF?text=Pameran+Karya',
                'seats'    => 1000,
            ],
        ];

        return view('home', compact('events'));
    }
}
