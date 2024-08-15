<div>
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col d-flex justify-content-end">
                <a href="{{ route('add.image') }}" class="btn btn-success shadow-sm">
                    <i class="fas fa-plus-circle me-2"></i>Add Image
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card border-0 shadow-sm">
                    {{-- <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-center">Image List</h5>
                    </div> --}}
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light text-dark">
                                    <tr>
                                        <th scope="col" class="text-center">Image</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($images as $image)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/' . $image->image) }}" alt="Image"
                                                    class="rounded-circle"
                                                    style="height: 80px; width: 80px; object-fit: cover;">
                                            </td>
                                            <td>{{ $image->created_at->format('d M Y, H:i') }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('image.edit', $image->id) }}"
                                                    class="btn btn-outline-primary btn-sm me-2">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <button class="btn btn-outline-danger btn-sm"
                                                    onclick="confirmDeletion({{ $image->id }})">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="3" class="text-center text-muted">No Image available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-2 d-flex justify-content-center">
                    {{ $images->links('vendor.pagination.bootstrap-4') }}
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
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('delete', imageId);
            }
        });
    }
    </script>
</div>
