<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\auth\LoginForm;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        // dd($this->form->only(['email','password']));
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
