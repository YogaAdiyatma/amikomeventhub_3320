<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Menampilkan halaman tiket
     */
    public function index()
    {
        $ticket = [
            'code'         => 'AEH-2026-001987',
            'event_title'  => 'Seminar Nasional Teknologi AI 2026',
            'date'         => 'Senin, 20 April 2026',
            'time'         => '08.00 - 17.00 WIB',
            'location'     => 'Auditorium AMIKOM, Yogyakarta',
            'holder_name'  => 'Yoga Adiyatma',
            'holder_nim'   => '3320XXXX',
            'seat_type'    => 'Reguler',
            'price'        => 'Rp 50.000',
        ];

        return view('ticket', compact('ticket'));
    }
}
