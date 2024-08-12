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
        <div class="row mb-4">
            <div class="col text-end">
                <a href="{{ route('quotation.create') }}" class="btn btn-success btn-lg">Add Quote</a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Quotes List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Quote</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($quotations as $quotation)
                                <tr>
                                    <td>{{ $quotation->quote }}</td>
                                    <td>{{ $quotation->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="{{ route('quote.edit', $quotation->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm" onclick="confirmDeletion({{ $quotation->id }})">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No quotes available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
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


         function confirmDeletion(quotationId) {
            if (confirm('Are you sure you want to delete this quotation?')) {
                @this.call('delete', quotationId);
            }
        }
     </script>
</div>
