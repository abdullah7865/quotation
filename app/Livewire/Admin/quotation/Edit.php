<?php

namespace App\Livewire\Admin\Quotation;

use App\Models\Quotation;
use Livewire\Component;

class Edit extends Component
{

    public $quotationId;
    public $quote;

    public function mount($id)
    {
        $quotation = Quotation::findOrFail($id);
        $this->quotationId = $quotation->id;
        $this->quote = $quotation->quote;
    }

    public function update()
    {
        $this->validate([
            'quote' => 'required|string|max:255',
        ]);

        $quotation = Quotation::findOrFail($this->quotationId);
        $quotation->quote = $this->quote;
        $quotation->save();

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your Quotation has been updated.',
            'icon' => 'success',
        ]);

        return redirect()->route('admin.quotations');
    }

    public function render()
    {
        return view('livewire.admin.quotation.edit');
    }
}
