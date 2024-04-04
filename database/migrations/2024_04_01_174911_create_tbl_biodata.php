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
        Schema::create('tbl_biodata', function (Blueprint $table) {
            $table->id();
            $table->string('google_id')->unique()->nullable();
            $table->string('no_ktp')->unique()->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('agama')->nullable();
            $table->string('jenis_akun_sosmed')->nullable();
            $table->string('username_akun')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pengalaman_kerja')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_skck')->nullable();
            $table->string('foto_sertifikat')->nullable();
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_biodata');
    }
};
