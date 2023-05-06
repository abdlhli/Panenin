<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Akun;

class UsersTable extends Component
{
    public function render()
    {
        $userspelanggan = Akun::where('id_hak_akses', '=', '3')->get();

        $akuns = Akun::where(function ($query) {
            $query->where('id_hak_akses', '=', '3');
        })
            ->paginate();

        return view('livewire.users-table', ['userspelanggan' => $userspelanggan, 'akuns' => $akuns]);
    }
}
