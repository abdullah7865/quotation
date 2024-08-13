<div>
    <div class="container mt-5">
    <h2>Edit Quote</h2>

        <form wire:submit.prevent="update">
            <div class="mb-3">
                <label for="quoteText" class="form-label">Your Quote</label>
                <textarea class="form-control" id="quoteText" wire:model.defer="quote" wire:model="quote" rows="4"></textarea>
                @error('quoteText')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
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
