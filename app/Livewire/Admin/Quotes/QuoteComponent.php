<?php

namespace App\Livewire\Admin\Quotes;

use App\Models\Quote;
use Livewire\Component;
use Livewire\WithPagination;

class QuoteComponent extends Component
{
    use WithPagination;
    public $perPage = 10;

    public function render()
    {
        $quotes = Quote::paginate($this->perPage);
        return view('livewire.admin.quotes.quote-component', [
            'quotes' => $quotes,
    ]);
    }

    public function delete($id)
    {
        $quote = Quote::findOrFail($id);
        $quote->delete();

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your Quotes has been deleted.',
            'icon' => 'success',
        ]);
        return redirect()->route('admin.quotes');
    }
}
