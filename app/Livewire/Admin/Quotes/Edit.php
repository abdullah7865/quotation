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
        $quote = Quote::findOrFail($id);
        $this->quoteId = $quote->id;
        $this->quote = $quote->quote;
    }

    public function update()
    {
        $this->validate([
            'quote' => 'required',
        ]);

        $quote = Quote::findOrFail($this->quoteId);
        $quote->quote = $this->quote;
        $quote->save();

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your Quote has been updated.',
            'icon' => 'success',
        ]);

        return redirect()->route('admin.quotes');
    }

    public function render()
    {
        return view('livewire.admin.quotes.edit');
    }
}
