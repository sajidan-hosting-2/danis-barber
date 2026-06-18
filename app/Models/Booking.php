<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama_calon_pengantin', 
        'no_hp', 
        'paket', 
        'tanggal_acara', 
        'catatan', 
        'status'
    ];
}