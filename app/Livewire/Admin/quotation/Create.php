<?php

namespace App\Livewire\Admin\Quotation;

use App\Models\Quotation;
use Livewire\Component;

class Create extends Component
{
    public $quote;

    protected $rules = [
        'quote' => 'required|string|max:255',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function submit()
    {
        $this->validate();

        Quotation::create([
            'quote' => $this->quote,
        ]);

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your Quotation has been created.',
            'icon' => 'success',
        ]);


        $this->reset('quote');
        return redirect()->route('admin.quotations');
    }

    public function render()
    {
        return view('livewire.admin.quotation.create');
    }
}
