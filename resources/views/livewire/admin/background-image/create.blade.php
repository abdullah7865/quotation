<div>
    <div class="container mt-5">
        <h2 class="mb-4">Upload an Image</h2>
        <form wire:submit.prevent="submit">
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imageUpload" wire:model="image" accept="image/*">
                    @error('image')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <br>
            <div class="form-group">
                <img id="imagePreview" style="display: none; max-width: 100px; max-height: 100px;" />
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Upload</button>
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

