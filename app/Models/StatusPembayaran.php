<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPembayaran extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'status_pemesanan';
    protected $primaryKey = 'id_status_pemesanan';
    protected $fillable = [
        'nama_status_pemesanan'
    ];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_status_pemesanan');
    }
}
