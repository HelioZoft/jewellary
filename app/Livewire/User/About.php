<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Layout;

class About extends Component
{
    #[Layout('user.layouts.app')]
    public function render()
    {
        return view('livewire.user.about');
    }
}
