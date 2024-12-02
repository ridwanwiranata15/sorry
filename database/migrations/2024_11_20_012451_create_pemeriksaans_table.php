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
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_pasien")->constrained("patiens")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("id_dokter")->constrained("doctors")->cascadeOnDelete()->cascadeOnUpdate();
            $table->date("tanggal_pemeriksaan")->nullable();
            $table->string("tindakan_medis")->nullable();
            $table->string("resep_obat")->nullable();
            $table->string("catatan_dokter")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }
};
