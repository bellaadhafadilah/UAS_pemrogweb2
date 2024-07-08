<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatif'; // sesuaikan dengan nama tabel di database jika tidak sesuai konvensi Laravel

    protected $fillable = [
        'jenis_karir', // sesuaikan dengan nama kolom di tabel
        'c1',
        'c2',
        'c3',
        'c4',
        'c5',
    ];

    // tambahkan method lainnya sesuai kebutuhan, seperti relasi dengan model lain
}
