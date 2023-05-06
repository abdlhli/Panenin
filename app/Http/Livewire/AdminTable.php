<?php

namespace App\Http\Livewire;

use App\Models\Akun;
use Livewire\Component;

class AdminTable extends Component
{
    public function render()
    {
        $usersadmin = Akun::where('id_hak_akses', '=', '1')->orWhere('id_hak_akses', '=', '2')
            ->get();

        $admins = Akun::join('hak_akses', 'Akun.id_hak_akses', '=', 'hak_akses.id_hak_akses')
            ->whereIn('Akun.id_hak_akses', [1, 2]) // tambahkan alias "Akun" pada kolom id_hak_akses
            ->select('Akun.id_user', 'Akun.firstname', 'Akun.lastname', 'Akun.email', 'Akun.alamat', 'Akun.no_telp', 'Akun.foto_profile', 'Akun.id_hak_akses', 'hak_akses.hak_akses as nama_hak_akses')
            ->get();

        $alladmin = $usersadmin->merge($admins);

        $akuns = Akun::where(function ($query) {
            $query->where('id_hak_akses', '=', '1')
                ->orWhere('id_hak_akses', '=', '2');
        })
            ->paginate();


        return view('livewire.admin-table', ['usersadmin' => $usersadmin, 'alladmin' => $alladmin,  'akuns' => $akuns]);
    }
}
