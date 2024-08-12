<?php

namespace App\Livewire\Admin;

use App\Models\BackgroundImage;
use App\Models\Quotation;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalBackgroundImages;
    public $totalQuotations;


    public function mount()
    {
        $this->totalQuotations = Quotation::count();
        $this->totalBackgroundImages = BackgroundImage::count();

    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
