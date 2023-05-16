<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pemesanan extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'pemesanan';
    public $timestamps = false;
    protected $primaryKey = 'id_pemesanan';
    protected $fillable = [
        'tgl_pemesanan',
        'total_harga_pemesanan',
        'id_user',
        'id_status_pemesanan',
    ];

    public function detailPemesanan()
    {
        return $this->hasMany(DetailPemesanan::class, 'id_pemesanan');
    }

    public function user()
    {
        return $this->belongsTo(Akun::class, 'id_user');
    }

    public function statusPemesanan()
    {
        return $this->belongsTo(StatusPembayaran::class, 'id_status_pemesanan');
    }
}
