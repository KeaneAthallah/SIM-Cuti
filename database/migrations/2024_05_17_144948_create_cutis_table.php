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
        Schema::create('cutis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('tipe');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->integer('total_cuti');
            $table->string('filePendukung')->nullable();
            $table->string('status')->default('process');
            $table->string('tertuju');
            $table->string('pesan');
            $table->string('sekdis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutis');
    }
};
