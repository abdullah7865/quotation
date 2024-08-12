<div>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col text-end">
                <a href="{{ route('quotation.create') }}" class="btn btn-success">
                    <i class="fas fa-plus-circle me-2"></i>Add Quote
                </a>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            {{-- <div class="card-header bg-white border-0">
                <h4 class="mb-0 text-center text-dark">Quotes List</h4>
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th>Quote</th>
                                <th>Created At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($quotations as $quotation)
                                <tr>
                                    <td class="text-dark">{{ $quotation->quote }}</td>
                                    <td class="text-muted">{{ $quotation->created_at->format('Y-m-d') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('quote.edit', $quotation->id) }}" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <button class="btn btn-outline-danger btn-sm" onclick="confirmDeletion({{ $quotation->id }})">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted">No quotes available</td>
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
