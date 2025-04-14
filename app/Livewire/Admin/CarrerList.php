<?php

namespace App\Livewire\Admin;

use App\Models\Career;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CarrerList extends Component
{
    #[Layout('admin.layouts.app')]
    public function render()
    {
        $CarrerDetails = Career::all();
        return view('livewire.admin.carrer-list',['carrerData' => $CarrerDetails]);
    }
}
