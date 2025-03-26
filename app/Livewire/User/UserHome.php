<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Layout;

class UserHome extends Component
{
    #[Layout('user.layouts.app')]
    public function render()
    {
        return view('livewire.user.user-home');
    }
}
