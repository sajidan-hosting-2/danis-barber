<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_calon_pengantin');
            $table->string('no_hp');
            $table->string('paket'); // Regular atau Extra
            $table->date('tanggal_acara');
            $table->text('catatan')->nullable();
            $table->string('status')->default('Pending'); // Pending,confirmed, done
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};