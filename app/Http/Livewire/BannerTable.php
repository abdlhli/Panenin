<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Banner;

class BannerTable extends Component
{
    public $banners;

    public function mount()
    {
        // Mendapatkan semua data banner
        $this->banners = Banner::all();
    }

    public function render()
    {
        return view('livewire.banner-table', [
            'banners' => $this->banners,
        ]);
    }
}
