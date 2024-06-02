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
        Schema::create('jatah_cutis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('tahunan')->default(12);
            $table->integer('besar')->default(90);
            $table->integer('sakit')->default(14);
            $table->integer('alasanPenting')->default(30);
            $table->integer('luarTanggunganNegara')->default(1095);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jatah_cutis');
    }
};
