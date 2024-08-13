<?php

namespace App\Livewire\Admin\BackgroundImage;

use Livewire\Component;
use App\Models\BackgroundImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $image;
    public $currentImage;
    public $backgroundImageId;
    public $imagePreview;

    public function mount()
    {
        $id = request()->route('id');
        $this->backgroundImageId = $id;
        $backgroundImage = BackgroundImage::findOrFail($id);
        $this->currentImage = $backgroundImage->image;
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'nullable|image|max:1024',
        ]);

        // Generate a preview URL for the image
        if ($this->image) {
            $this->imagePreview = $this->image->temporaryUrl();
        } else {
            $this->imagePreview = null;
        }
    }

    public function submit()
    {
        $this->validate([
            'image' => 'nullable|image',
        ]);

        $backgroundImage = BackgroundImage::findOrFail($this->backgroundImageId);

        if ($this->image) {
            if ($backgroundImage->image) {
                Storage::disk('public')->delete($backgroundImage->image);
            }

            $path = $this->image->store('background-images', 'public');
            $backgroundImage->image = $path;
        }

        $backgroundImage->save();

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Image updated successfully.',
            'icon' => 'success',
        ]);

        return redirect()->route('background.image');
    }
    public function render()
    {
        return view('livewire.admin.background-image.edit');
    }
}
