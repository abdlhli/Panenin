<?php

namespace App\Http\Livewire;

use App\Models\DetailPemesanan;
use App\Models\Pemesanan;
use Livewire\Component;

class SelesaiPemesananTable extends Component
{
    public function render()
    {
        return view('livewire.selesai-pemesanan-table', [
            'orders' => Pemesanan::whereIn('id_status_pemesanan', [5, 6, 7, 8])->get(),
            'detailorders' => DetailPemesanan::all()
        ]);
    }
}
