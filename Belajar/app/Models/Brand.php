<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $connection = 'laravel_nev2'; // Menggunakan koneksi database 'exa'
    protected $table = 'Exa'; // Nama tabel di database 'Exa'

    protected $fillable = ['Merk', 'Nama']; // Kolom yang dapat diisi (sesuaikan dengan tabel)
}
