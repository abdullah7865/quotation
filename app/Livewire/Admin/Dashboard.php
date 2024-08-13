<?php

namespace App\Livewire\Admin;

use App\Models\BackgroundImage;
use App\Models\Card;
use App\Models\Quotation;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalBackgroundImages;
    public $totalQuotations;
    public $totalCards;


    public function mount()
    {
        $this->totalQuotations = Quotation::count();
        $this->totalBackgroundImages = BackgroundImage::count();
        $this->totalCards = Card::count();

    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
