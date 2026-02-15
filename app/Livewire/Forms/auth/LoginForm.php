<?php

namespace App\Livewire\Forms\auth;

use Livewire\Form;

class LoginForm extends Form
{
    public $email = '';

    public $password = '';

    public function store()
    {
        dd($this->only(['email', 'password']));
    }
}
