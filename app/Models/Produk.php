<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_produk',
        'nama_produk',
        'harga_produk',
        'stock_produk',
        'id_jenis_produk'
    ];

    protected $casts = [
        'harga_produk' => 'float',
        'stock_produk' => 'integer'
    ];

    public function jenis_produk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis_produk');
    }
}
