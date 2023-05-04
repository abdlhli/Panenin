<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banner';

    protected $fillable = [
        'id_banner',
        'nama_banner',
        'tgl_banner',
        'foto_banner',
        'status',
        'id_user',
    ];

    public $timestamps = false;
    protected $primaryKey = 'id_banner';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestBanner = static::where('id_banner', 'like', 'BNR%')->orderBy('id_banner', 'desc')->first();
            $latestBannerId = $latestBanner ? intval(substr($latestBanner->id_banner, 3)) : 0;
            $newBannerId = str_pad($latestBannerId + 1, 5, '0', STR_PAD_LEFT);
            $model->id_banner = 'BNR' . $newBannerId;
        });
    }

    public function relasiBannerKeAkun()
    {
        return $this->belongsTo(Akun::class, 'id_user');
    }
}
