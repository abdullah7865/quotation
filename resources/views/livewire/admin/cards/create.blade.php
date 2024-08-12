<div>
    <div class="container mt-5">
        <h2 class="mb-4">Form Submission</h2>
        <form wire:submit.prevent="store">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <textarea wire:model="description" class="form-control" id="description" placeholder="Enter description"></textarea>
                        <label for="description">Description</label>
                    </div>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input wire:model="quantity" type="number" class="form-control" id="quantity" placeholder="Enter quantity">
                        <label for="quantity">Quantity</label>
                    </div>
                    @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
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
