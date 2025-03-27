<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

class Login extends Component
{
    public $email, $password;

    public function login()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password, 'is_admin' => 1])) {
            session()->regenerate();
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('error', 'Invalid credentials');
        }
    }

    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.login');
    }
}
