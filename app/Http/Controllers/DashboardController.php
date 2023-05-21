<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Http;
use DateTimeZone;

class DashboardController extends Controller
{
    public function index()
    {
        $todaySales = Pemesanan::whereDate('tgl_pemesanan', Carbon::today())->count();
        $monthlySales = Pemesanan::whereMonth('tgl_pemesanan', Carbon::now()->month)->count();
        $totalSales = Pemesanan::count();
        $totalCustomers = Pemesanan::distinct('id_user')->count('id_user');

        $pendapatantodaySales = number_format(Pemesanan::whereDate('tgl_pemesanan', Carbon::today())->sum('total_harga_pemesanan') / 1000, 0) . 'K';
        $pendapatanweeklySales = number_format(Pemesanan::whereBetween('tgl_pemesanan', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('total_harga_pemesanan') / 1000, 0) . 'K';
        $pendapatanmonthlySales = number_format(Pemesanan::whereMonth('tgl_pemesanan', Carbon::now()->month)->sum('total_harga_pemesanan') / 1000, 0) . 'K';
        $pendapatanyearlySales = number_format(Pemesanan::whereYear('tgl_pemesanan', Carbon::now()->year)->sum('total_harga_pemesanan') / 1000, 0) . 'K';

        // Hitung persentase penjualan harian dalam 30 hari terakhir
        $thirtyDaysAgo = Carbon::today()->subDays(30);
        $salesLast30Days = Pemesanan::whereDate('tgl_pemesanan', '>=', $thirtyDaysAgo)->count();
        $percentageLast30Days = ($salesLast30Days / 30) * 100;

        // Hitung persentase penjualan bulanan dalam 30 hari terakhir
        $salesThisMonthLast30Days = Pemesanan::whereMonth('tgl_pemesanan', Carbon::now()->month)
            ->whereDate('tgl_pemesanan', '>=', $thirtyDaysAgo)
            ->count();
        $percentageThisMonthLast30Days = ($salesThisMonthLast30Days / 30) * 100;

        // Hitung persentase total pelanggan dalam 30 hari terakhir
        $totalCustomersLast30Days = Pemesanan::distinct('id_user')->whereDate('tgl_pemesanan', '>=', $thirtyDaysAgo)->count();
        $percentageTotalCustomersLast30Days = ($totalCustomersLast30Days / 30) * 100;

        // Mendapatkan Temperatur dan waktu dari OpenWeather
        $apiKey = 'b4aa619b70b6034e3a80a916d2ffc6f5';
        $city = 'Jember';

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric");
        $data = $response->json();

        $temperature = $data['main']['temp'];
        $sunrise = $data['sys']['sunrise'];
        $sunset = $data['sys']['sunset'];

        $currentTimestamp = time();
        $isDaytime = $currentTimestamp > $sunrise && $currentTimestamp < $sunset;

        return view('admin.dashboard', compact(
            'todaySales',
            'monthlySales',
            'totalSales',
            'totalCustomers',
            'percentageLast30Days',
            'percentageThisMonthLast30Days',
            'percentageTotalCustomersLast30Days',
            'pendapatantodaySales',
            'pendapatanweeklySales',
            'pendapatanmonthlySales',
            'pendapatanyearlySales',
            'temperature',
            'city',
            'isDaytime'
        ));
    }
}
