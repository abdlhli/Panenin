<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    use HasFactory;

    protected $table = 'detail_pemesanan';

    public $timestamps = false;

    protected $fillable = [
        'id_pemesanan',
        'id_produk',
        'jumlah_produk',
        'total_harga_produk',
    ];


    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    }
}
