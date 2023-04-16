<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Akun;

class UsersTable extends Component
{
    public function render()
    {
        $usersadmin = Akun::where('id_hak_akses', '=', '1')->orWhere('id_hak_akses', '=', '2')->get();
        $userspelanggan = Akun::where('id_hak_akses', '=', '3')->get();

        $admins = Akun::join('hak_akses', 'Akun.id_hak_akses', '=', 'hak_akses.id_hak_akses')
            ->whereIn('Akun.id_hak_akses', [1, 2]) // tambahkan alias "Akun" pada kolom id_hak_akses
            ->select('Akun.id_user', 'Akun.firstname', 'Akun.lastname', 'Akun.email', 'hak_akses.hak_akses as nama_hak_akses')
            ->get();

        $alladmin = $usersadmin->merge($admins);

        return view('livewire.users-table', ['usersadmin' => $usersadmin, 'userspelanggan' => $userspelanggan, 'alladmin' => $alladmin]);
    }
}
