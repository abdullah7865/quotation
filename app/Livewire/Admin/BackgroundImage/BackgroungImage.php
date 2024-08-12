<?php

namespace App\Livewire\Admin\BackgroundImage;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BackgroundImage;

class BackgroungImage extends Component
{
    use WithPagination;
    public $perPage = 10;

    // public function mount()
    // {
    //     $this->images = BackgroundImage::paginate(10);
    // }

    public function delete($id)
    {
        $image = BackgroundImage::findOrFail($id);
        $image->delete();
        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your Image has been deleted.',
            'icon' => 'success',
        ]);
        return redirect()->route('background.image');
    }
    public function render()
    {
        $images = BackgroundImage::paginate($this->perPage);
        return view('livewire.admin.background-image.backgroung-image', [
            'images' => $images,
    ]);
    }
}
