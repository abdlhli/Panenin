<?php

namespace App\Http\Livewire;

use App\Models\DetailPemesanan;
use App\Models\Pemesanan;
use Livewire\Component;

class SemuaPemesananTable extends Component
{
    public function render()
    {
        return view('livewire.semua-pemesanan-table', [
            'orders' => Pemesanan::all(),
            'detailorders' => DetailPemesanan::all()
        ]);
    }
}
