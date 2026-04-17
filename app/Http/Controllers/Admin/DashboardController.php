<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin
     */
    public function index()
    {
        // Statistik dummy (nanti dari database)
        $stats = [
            'total_events'       => 24,
            'total_transactions' => 312,
            'total_revenue'      => 'Rp 15.600.000',
            'total_attendees'    => 847,
        ];

        $recent_transactions = [
            ['id' => 1, 'name' => 'Yoga Adiyatma',   'event' => 'Seminar AI 2026',       'amount' => 'Rp 50.000',  'status' => 'Lunas'],
            ['id' => 2, 'name' => 'Siti Rahmawati',  'event' => 'Workshop Laravel',       'amount' => 'Rp 75.000',  'status' => 'Lunas'],
            ['id' => 3, 'name' => 'Budi Santoso',    'event' => 'Hackathon Digital 2026', 'amount' => 'Rp 100.000', 'status' => 'Pending'],
            ['id' => 4, 'name' => 'Dewi Kusuma',     'event' => 'Seminar AI 2026',        'amount' => 'Rp 50.000',  'status' => 'Lunas'],
            ['id' => 5, 'name' => 'Ahmad Fauzi',     'event' => 'Talkshow Entrepreneur',  'amount' => 'Rp 25.000',  'status' => 'Lunas'],
        ];

        return view('admin.dashboard', compact('stats', 'recent_transactions'));
    }
}
