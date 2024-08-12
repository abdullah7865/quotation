<div>
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050; top: 70px;">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col d-flex justify-content-end">
                <a href="{{ route('add.image') }}" class="btn btn-success btn-lg">Add Image</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Image List</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="text-center">Image</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($images as $image)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('storage/' . $image->image) }}" alt="Image" class="img-thumbnail" style="height: 100px; width: 100px; object-fit: cover;">
                                        </td>
                                        <td>{{ $image->created_at->format('d M Y, H:i') }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('image.edit', $image->id) }}" class="btn btn-primary btn-sm me-2">Edit</a>
                                            <button class="btn btn-danger btn-sm" onclick="confirmDeletion({{ $image->id }})">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="mt-3 flex justify-center">
                                {{ $images->links('vendor.pagination.bootstrap-5') }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('swal', event => {

             Swal.fire({
                 title: event.detail[0].title,
                 text: event.detail[0].text,
                 icon: event.detail[0].icon,
             });
         });


         function confirmDeletion(imageId) {
            if (confirm('Are you sure you want to delete this quotation?')) {
                @this.call('delete', imageId);
            }
        }
     </script>
</div>
