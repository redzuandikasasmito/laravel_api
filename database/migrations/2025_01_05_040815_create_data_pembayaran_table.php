<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_customer')->constrained('data_customer');
            $table->foreignId('id_paket')->constrained('data_paket');
            $table->date('tanggal_pembayaran');
            $table->double('total_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pembayaran');
    }
};
