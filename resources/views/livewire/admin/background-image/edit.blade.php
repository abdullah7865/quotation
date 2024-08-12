<div>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Edit Image</h2>
        <form wire:submit.prevent="submit">
            <!-- Image Upload Field -->
            <div class="form-group">
                <label for="imageUpload" class="form-label">Upload Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imageUpload" wire:model="image">
                    @error('image')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Image Preview -->
            <div class="form-group mt-4">
                @if ($imagePreview)
                    <div class="d-flex justify-content-center">
                        <img id="imagePreview" src="{{ $imagePreview }}" style="max-width: 100%; max-height: 200px;" class="img-fluid rounded border" />
                    </div>
                @else
                    @if ($currentImage)
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('storage/' . $currentImage) }}" alt="Current Image" class="img-fluid rounded border" style="max-width: 100%; max-height: 200px;">
                        </div>
                    @else
                        <p class="text-center">No image uploaded</p>
                    @endif
                @endif
            </div>

            <div class="form-group text-center mt-4">
                <button type="submit" class="btn btn-primary">Update Image</button>
            </div>
        </form>
    </div>
    <script>
        window.addEventListener('swal', event => {

             Swal.fire({
                 title: event.detail[0].title,
                 text: event.detail[0].text,
                 icon: event.detail[0].icon,
             });
         });
     </script>
</div>

