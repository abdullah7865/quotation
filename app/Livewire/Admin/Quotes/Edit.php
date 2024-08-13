<?php

namespace App\Livewire\Admin\Quotes;

use App\Models\Quote;
use Livewire\Component;

class Edit extends Component
{

    public $quoteId;
    public $quote;

    public function mount()
    {
        $id = request()->route('id');
        $quotation = Quote::findOrFail($id);
        $this->quoteId = $quotation->id;
        $this->quote = $quotation->quote;
    }

    public function update()
    {
        $this->validate([
            'quote' => 'required|string|max:255',
        ]);

        $quotation = Quote::findOrFail($this->quoteId);
        $quotation->quote = $this->quote;
        $quotation->save();

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your Quotation has been updated.',
            'icon' => 'success',
        ]);

        return redirect()->route('admin.quotes');
    }

    public function render()
    {
        return view('livewire.admin.quotes.edit');
    }
}
