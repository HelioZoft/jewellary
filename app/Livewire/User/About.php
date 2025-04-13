<?php

namespace App\Livewire\User;
use App\Models\Staff;
use Livewire\Component;
use Livewire\Attributes\Layout;

class About extends Component
{
    public $staffDatas;

    public function mount(){
        $this->staffDatas = Staff::where('delete_status', 1)
                                  ->latest('updated_at')
                                  ->take(3)
                                  ->get();
    }
    #[Layout('user.layouts.app')]
    public function render()
    {
        return view('livewire.user.about');
    }
}
