<?php

namespace App\Livewire\Forms\auth;

use Livewire\Attributes\Rule;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginForm extends Form
{
    #[Rule('required|email')]
    public $email = '';

    #[Rule('required')]
    public $password = '';

    public $remember = false;

    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        session()->regenerate();
    }
}
