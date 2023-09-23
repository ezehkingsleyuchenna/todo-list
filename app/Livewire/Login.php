<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule(['required', 'email', 'exists:users,email'])]
    public string $email;
    #[Rule(['required', 'string'])]
    public string $password;
    public function login()
    {

    }
    public function render()
    {
        return view('livewire.login')
            ->layout('components.layouts.base', ['pageTitle' => 'Login']);
    }
}
