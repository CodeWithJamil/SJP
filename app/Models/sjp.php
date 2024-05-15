<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sjp extends Model
{
    use HasFactory;
    protected $fillable = ['noSTT', 'Pengirim', 'Penerima', 'Alamat', 'Barang', 'Koli', 'Kgm', 'Volume', 'Jumlah', 'Ket'];
    protected $table ='sjp';
    public $timestamps = false;
}
