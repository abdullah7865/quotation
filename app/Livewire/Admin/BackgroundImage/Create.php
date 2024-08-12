<?php

namespace App\Livewire\Admin\BackgroundImage;

use App\Models\BackgroundImage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $image;

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'image' => 'required|image',
        ]);

        $path = $this->image->store('background-images', 'public');

        BackgroundImage::create(['image' => $path]);

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Image uploaded successfully.',
            'icon' => 'success',
        ]);
        return redirect()->route('background.image');
    }
    public function render()
    {
        return view('livewire.admin.background-image.create');
    }
}
