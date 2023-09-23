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
        $this->validate();
//        check user
        if (! auth()->attempt($this->only('email', 'password'), true))
            return $this->addError('email', trans('auth.failed'));
        $user = auth()->user();
//        redirect
        $this->redirect(route('list'), true);
        return true;
    }
    public function render()
    {
        return view('livewire.login')
            ->layout('components.layouts.base', ['pageTitle' => 'Login']);
    }
}
