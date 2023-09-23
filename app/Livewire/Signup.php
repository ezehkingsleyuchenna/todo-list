<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Signup extends Component
{
    #[Rule(['required', 'string'])]
    public string $name;
    #[Rule(['required', 'email', 'unique:users,email'])]
    public string $email;
    #[Rule(['required', 'string', 'min:5'])]
    public string $password;
    public function register(): bool
    {
        $this->validate();
//        make user
        $user = User::make();
//        save to table
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();
//        login
        Auth::login($user);
//        redirect
        $this->redirect(route('list'), true);

        return true;
    }
    public function render()
    {
        return view('livewire.signup')
            ->layout('components.layouts.base', ['pageTitle' => 'Signup']);
    }
}
