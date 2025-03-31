<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Service extends Component
{
    #[Layout('user.layouts.app')]
    public function render()
    {
        return view('livewire.user.service');
    }
}
