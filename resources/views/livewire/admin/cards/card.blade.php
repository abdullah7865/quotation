<div>
    <div class="container mt-4">
        <h1 class="mb-4">Cards</h1>

        <div class="d-flex justify-content-end mb-3 gap-2">
            <a href="{{ route('create.cards') }}" class="btn btn-success btn-sm">
                <i class="fas fa-plus-circle me-2"></i>Create
            </a>
            <a href="{{ route('cards.exportCsv') }}" class="btn btn-success btn-sm">
                <i class="fas fa-download"></i> Download CSV
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>UUID</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Change Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cards as $card)
                        <tr>
                            <td>
                                {{ $card->uuid }}
                                <button onclick="copyToClipboard('{{ url('/quote/' . $card->uuid) }}')"
                                    class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </td>
                            <td>{{ $card->description }}</td>
                            <td>
                                <span class="{{ $card->status == '1' ? 'text-success' : 'text-danger' }}">
                                    {{ $card->status == '1' ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <select class="form-select form-select-sm" name="status" aria-label="Status"
                                    wire:change="updateStatus({{ $card->id }}, $event.target.value)">
                                    <option value="0" {{ $card->status == '0' ? 'selected' : '' }}>Inactive
                                    </option>
                                    <option value="1" {{ $card->status == '1' ? 'selected' : '' }}>Active</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="mt-2 d-flex justify-content-center">
                {{ $cards->links('vendor.pagination.bootstrap-4') }}
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
    </script>
</div>
