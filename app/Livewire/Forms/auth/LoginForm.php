<?php

namespace App\Livewire\Forms\auth;

use Livewire\Attributes\Rule;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

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
        $this->ensureIsNotRateLimited();
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages([
                'form.email' => __('auth.failed'),
            ]);
        }
        RateLimiter::clear($this->throttleKey());
        session()->regenerate();
    }
    /**
     * Verifica que el usuario no esté haciendo demasiados intentos.
     */
    protected function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'form.email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Genera una clave única para el limitador (IP + Email).
     */
    protected function throttleKey()
    {
        return Str::lower($this->email).'|'.request()->ip();
    }
}
