<?php

namespace App\Http\Livewire;

use App\Models\DetailPemesanan;
use App\Models\Pemesanan;
use Livewire\Component;

class VerifikasiPemesananTable extends Component
{
    public function render()
    {
        return view('livewire.verifikasi-pemesanan-table', [
            'orders' => Pemesanan::where('id_status_pemesanan', 9)->get(),
            'detailorders' => DetailPemesanan::all()
        ]);
    }
}
