<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_calon_pengantin' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'paket' => 'required|in:Regular,Extra',
            'tanggal_acara' => 'required|date',
        ]);

        // Simpan ke database
        Booking::create([
            'nama_calon_pengantin' => $request->nama_calon_pengantin,
            'no_hp' => $request->no_hp,
            'paket' => $request->paket,
            'tanggal_acara' => $request->tanggal_acara,
            'catatan' => $request->catatan,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Booking berhasil! Kami akan menghubungi Anda soon.');
    }
}