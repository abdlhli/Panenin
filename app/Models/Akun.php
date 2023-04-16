<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Akun extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'akun';

    protected $fillable = [
        'id_user',
        'firstname',
        'lastname',
        'email',
        'password',
        'alamat',
        'no_telp',
        'id_hak_akses'
    ];

    protected $primaryKey = 'id_user';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->id_hak_akses == 1 || $model->id_hak_akses == 2) { // Jika user yang akan disimpan adalah admin
                $latestAdmin = static::where('id_user', 'like', 'ADM%')->orderBy('id_user', 'desc')->first();
                $latestAdminId = $latestAdmin ? intval(substr($latestAdmin->id_user, 3)) : 0;
                $newAdminId = str_pad($latestAdminId + 1, 5, '0', STR_PAD_LEFT);
                $model->id_user = 'ADM' . $newAdminId;
            } else { // Jika user yang akan disimpan adalah customer
                $latestCustomer = static::where('id_user', 'like', 'PLG%')->orderBy('id_user', 'desc')->first();
                $latestCustomerId = $latestCustomer ? intval(substr($latestCustomer->id_user, 3)) : 0;
                $newCustomerId = str_pad($latestCustomerId + 1, 5, '0', STR_PAD_LEFT);
                $model->id_user = 'PLG' . $newCustomerId;
            }
        });
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;
}
