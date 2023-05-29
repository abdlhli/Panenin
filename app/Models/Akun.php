<?php

namespace App\Models;

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
        'id_hak_akses',
        'foto_profile'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public $timestamps = false;
    protected $primaryKey = 'id_user';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->id_hak_akses == 1 || $model->id_hak_akses == 2) { // Jika user yang akan disimpan adalah admin dan operator
                $latestAdmin = static::where('id_user', 'like', 'ADM%')->orderBy('id_user', 'desc')->first();
                $latestAdminId = $latestAdmin ? intval(substr($latestAdmin->id_user, 3)) : 0;
                $newAdminId = str_pad($latestAdminId + 1, 5, '0', STR_PAD_LEFT);
                $model->id_user = 'ADM' . $newAdminId;
            } else { // Jika user yang akan disimpan adalah customer
                $latestCustomer = static::where('id_user', 'like', 'PLG%')->orderBy('id_user', 'desc')->first();
                $latestCustomerId = $latestCustomer ? intval(substr($latestCustomer->id_user, 3)) : 0;
                $newCustomerId = $latestCustomerId + 1;
                $formattedCustomerId = 'PLG' . str_pad($newCustomerId, 5, '0', STR_PAD_LEFT);
                $model->id_user = $formattedCustomerId;
            }
        });
    }

    public function relasiAkunKeHakAkses()
    {
        return $this->hasOne(Akun::class, 'id_hak_akses', 'id_hak_akses');
    }

    public function relasiAkunKeBanner()
    {
        return $this->hasOne(Akun::class, 'id_user', 'id_user');
    }
}
