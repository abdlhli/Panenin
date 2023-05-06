<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    use HasFactory;

    protected $table = 'hak_akses';
    protected $primaryKey = 'id_hak_akses';
    protected $fillable = ['id_hak_akses', 'hak_akses'];

    // definisi relasi antar tabel
    public function relasiHakAksesKeAkun()
    {
        return $this->belongsTo(Akun::class, 'id_user');
    }
}
