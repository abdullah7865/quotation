<?php

namespace App\Livewire\Admin\Cards;

use App\Models\Card as ModelsCard;
use Livewire\Component;
use Livewire\WithPagination;

class Card extends Component
{

    use WithPagination;
    public $perPage = 10;


    public function render()
    {

        $cards = ModelsCard::paginate($this->perPage);
        return view('livewire.admin.cards.card', [
            'cards' => $cards,
        ]);
    }

    public function updateStatus($cardId, $status)
    {
        $card = ModelsCard::find($cardId);
        if ($card) {
            $card->status = $status;
            $card->save();


            $this->dispatch('swal', [
                'title' => 'Success!',
                'text' => 'Status updated successfully.',
                'icon' => 'success',
            ]);
        }
    }
}
