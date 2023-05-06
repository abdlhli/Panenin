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
    protected $fillable = ['nama_jenis_produk'];

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // membuat id_jenis_produk berdasarkan nama_jenis_produk
            $words = explode(' ', $model->nama_jenis_produk);
            $id = '';
            if (count($words) === 1) {
                $id .= substr(strtoupper($words[0]), 0, 4);
            } else {
                $id .= substr(strtoupper($words[0]), 0, 2);
                $id .= substr(strtoupper($words[1]), 0, 2);
            }
            $last_id = DB::table('jenis_produk')->max('id_jenis_produk');
            $last_num = (int)substr($last_id, 4);
            $new_num = str_pad($last_num + 1, 3, '0', STR_PAD_LEFT);
            $model->id_jenis_produk = $id . $new_num;
        });
    }
}
