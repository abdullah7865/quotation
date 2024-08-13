<?php

namespace App\Livewire\Admin\BackgroundImage;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BackgroundImage;
use Illuminate\Support\Facades\Storage;

class BackgroungImage extends Component
{
    use WithPagination;
    public $perPage = 5;

    public function delete($id)
    {
        $image = BackgroundImage::findOrFail($id);
        if ($image->image) {
            Storage::disk('public')->delete($image->image);
        }
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
