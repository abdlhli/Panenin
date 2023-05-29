<?php

namespace App\Http\Livewire;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use App\Models\DetailPemesanan;
use App\Models\Pemesanan;
use Livewire\Component;

class LaporanTable extends Component
{
    public function render()
    {
        $orders = Pemesanan::where('id_status_pemesanan', 5)->get();
        $detailOrders = DetailPemesanan::whereIn('id_pemesanan', $orders->pluck('id_pemesanan'))->get();

        $data = [];

        foreach ($orders as $order) {
            $orderDetails = $detailOrders->where('id_pemesanan', $order->id_pemesanan);

            $data[] = [
                'order' => $order,
                'orderDetails' => $orderDetails
            ];
        }

        return view('livewire.laporan-table', [
            'data' => $data,
            'orders' => $orders,
            'detailOrders' => $detailOrders
        ]);
    }
}
