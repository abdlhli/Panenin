<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';
    public $timestamps = false;
    protected $primaryKey = 'id_pemesanan';
    protected $fillable = [
        'tgl_pemesanan',
        'total_harga_pemesanan',
        'id_user',
        'id_status_pemesanan',
        'id_pemesanan',
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($pemesanan) {
    //         $prefix = 'PSN';
    //         $randomString = Str::random(8);
    //         $timestamp = now()->format('YmdHis');
    //         $idPemesanan = $prefix . $timestamp . $randomString;
    //         $pemesanan->id_pemesanan = $idPemesanan;
    //     });
    // }

    public function detailPemesanan()
    {
        return $this->hasMany(DetailPemesanan::class, 'id_pemesanan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function statusPemesanan()
    {
        return $this->belongsTo(StatusPemesanan::class, 'id_status_pemesanan');
    }
}
