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
    public $timestamps = false;

    protected $fillable = [
        'id_produk',
        'nama_produk',
        'harga_produk',
        'satuan_produk',
        'stock_produk',
        'foto_produk',
        'id_jenis_produk'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestProduk = static::where('id_produk', 'like', 'PRD%')->orderBy('id_produk', 'desc')->first();
            $latestProdukId = $latestProduk ? intval(substr($latestProduk->id_produk, 3)) : 0;
            $newProdukId = str_pad($latestProdukId + 1, 5, '0', STR_PAD_LEFT);
            $model->id_produk = 'PRD' . $newProdukId;
        });
    }

    public function jenis_produk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis_produk');
    }
}
