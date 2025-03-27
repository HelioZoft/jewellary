<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

class Dashboard extends Component
{
    public function logout()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('login');
    }

    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
