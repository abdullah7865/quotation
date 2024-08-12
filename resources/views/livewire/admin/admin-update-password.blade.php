<div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-light shadow-lg rounded-lg p-4">
                    <h3 class="card-title mb-4 text-center text-primary">{{ __('Update Password') }}</h3>

                    <form wire:submit.prevent="updatePassword">
                        @csrf
                        @method('put')

                        <div class="mb-4">
                            <label for="update_password_current_password" class="form-label fw-bold">{{ __('Current Password') }}</label>
                            <input id="update_password_current_password" wire:model.lazy="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" autocomplete="current-password" placeholder="Enter current password" style="border-radius: .375rem; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.125);" />
                            @error('current_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="update_password_password" class="form-label fw-bold">{{ __('New Password') }}</label>
                            <input id="update_password_password" wire:model.lazy="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" placeholder="Enter new password" style="border-radius: .375rem; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.125);" />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="update_password_password_confirmation" class="form-label fw-bold">{{ __('Confirm Password') }}</label>
                            <input id="update_password_password_confirmation" wire:model.lazy="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" autocomplete="new-password" placeholder="Confirm new password" style="border-radius: .375rem; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.125);" />
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-4 py-2 shadow-sm hover:shadow-md transition-shadow">{{ __('Save') }}</button>
                        </div>
                    </form>
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
     </script>

</div>

