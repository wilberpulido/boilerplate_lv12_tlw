<?php

use Livewire\Component;
use App\Livewire\Forms\auth\LoginForm;
use Illuminate\Support\Facades\Log;

new class extends Component
{
    public LoginForm $form;

    public function login()
    {
        // throw new Exception('¡BOOM! Error forzado para pruebas.');
        $this->form->authenticate();

        return redirect()->intended(route('dashboard'));
    }

    public function render()
    {
        return $this->view();
    }
};
