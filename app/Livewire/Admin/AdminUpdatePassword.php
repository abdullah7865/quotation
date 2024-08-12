<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminUpdatePassword extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'current_password' => 'required|string',
        'password' => 'required|string|confirmed|min:8',
        'password_confirmation' => 'required|string',
    ];

    protected $messages = [
        'password.confirmed' => 'The password confirmation does not match.',
        'password.min' => 'The password must be at least 8 characters.',
    ];

    public function updatePassword()
    {
        $this->validate();

        $user = Auth::user();

        if (!Hash::check($this->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The current password is incorrect.'],
            ]);
        }

        $user->password = Hash::make($this->password);
        $user->save();

         $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Your password has been updated.',
            'icon' => 'success',
        ]);

        // return redirect()->route('admin.dashboard');
    }
    public function render()
    {
        return view('livewire.admin.admin-update-password');
    }
}
