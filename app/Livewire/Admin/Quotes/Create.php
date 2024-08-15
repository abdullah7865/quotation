<?php

namespace App\Livewire\Admin\Quotes;

use App\Models\Quote;
use Livewire\Component;

class Create extends Component
{
    public $quote;

    protected $rules = [
        'quote' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function submit()
    {
        $this->validate();

        Quote::create([
            'quote' => $this->quote,
        ]);

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your Quote has been created.',
            'icon' => 'success',
        ]);


        $this->reset('quote');
        return redirect()->route('admin.quotes');
    }

    public function render()
    {
        return view('livewire.admin.quotes.create');
    }
}
