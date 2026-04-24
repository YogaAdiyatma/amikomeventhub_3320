<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Menampilkan halaman kelola event (admin)
     */
    public function create()
    {
        return view('admin.events.create'); // Pastikan file view ini sudah ada di resources/views/admin/events/create.blade.php
    }
}
