<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    // Jika Nama DB Berbeda
    // protected $table = 'nama table';

    // Jika Dikolom Table Tidak Ada Field created_at & update_at
    // public $timestamps = FALSE;

    // Field yang Boleh Diisi (Jika Input Menggunakan array)
    // protected $fillable = ['judul', 'catatan'];
    
    // Mengisi Kolom Otomatis, Tidak Bisa Diinput Manual
    // protected $guarted = ['created_at'];
}
