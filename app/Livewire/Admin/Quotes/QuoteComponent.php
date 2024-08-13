<?php

namespace App\Livewire\Admin\Quotes;

use App\Models\Quote;
use Livewire\Component;

class QuoteComponent extends Component
{
    public $quotes;

    public function mount()
    {
        $this->quotes = Quote::all();
    }

    public function render()
    {
        return view('livewire.admin.quotes.quote-component');
    }

    public function delete($id)
    {
        $quotation = Quote::findOrFail($id);
        $quotation->delete();

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your Quotes has been deleted.',
            'icon' => 'success',
        ]);
        return redirect()->route('admin.quotes');
    }
}
