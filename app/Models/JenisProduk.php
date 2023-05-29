<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JenisProduk extends Model
{
    use HasFactory;
    protected $table = 'jenis_produk';
    protected $primaryKey = 'id_jenis_produk';
    protected $fillable = [
        'nama_jenis_produk',
        'foto_jenis_produk'
    ];

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestJenisProduk = static::where('id_jenis_produk', 'like', 'IDJP%')->orderBy('id_jenis_produk', 'desc')->first();
            $latestJenisProdukId = $latestJenisProduk ? intval(substr($latestJenisProduk->id_jenis_produk, 4)) : 0;
            $newJenisProdukId = str_pad($latestJenisProdukId + 1, 3, '0', STR_PAD_LEFT);
            $model->id_jenis_produk = 'IDJP' . $newJenisProdukId;
        });
    }
}
