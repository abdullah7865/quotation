<div>
    <div class="container mt-5">
        <h2>Submit a Quote</h2>
        <form wire:submit.prevent="submit">
            <div class="mb-3">
                <label for="quote" class="form-label">Your Quote</label>
                <textarea class="form-control" id="quote" wire:model="quote" rows="4"></textarea>
                @error('quote')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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
