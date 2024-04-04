<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'tbl_biodata';

    protected $fillable = [
        'google_id', 'no_ktp', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
        'status_pernikahan', 'agama', 'jenis_akun_sosmed', 'username_akun', 'pendidikan', 'pengalaman_kerja',
        'sertifikat', 'foto_ktp', 'foto_skck', 'foto_sertifikat', 'status', 'remember_token'
    ];
}
