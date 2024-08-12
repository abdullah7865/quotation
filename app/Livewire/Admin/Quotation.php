<?php

namespace App\Livewire\Admin;

use App\Models\Quotation as ModelsQuotation;
use Livewire\Component;

class Quotation extends Component
{
    public $quotations;

    public function mount()
    {
        $this->quotations = ModelsQuotation::all();
    }

    public function render()
    {
        return view('livewire.admin.quotation.quotation');
    }

    public function delete($id)
    {
        $quotation = ModelsQuotation::findOrFail($id);
        $quotation->delete();

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your Quotation has been deleted.',
            'icon' => 'success',
        ]);
        return redirect()->route('admin.quotations');
    }
}
