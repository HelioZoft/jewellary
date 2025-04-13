<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Staff;
use App\Models\Event;
use App\Models\Award;

class Home extends Component
{
    public $staffDatas;
    public $EventDatas;
    public $AwardDatas;

    public function mount(){
        $this->staffDatas = Staff::where('delete_status', 1)
                                  ->latest('updated_at')
                                  ->take(3)
                                  ->get();
    
        $this->EventDatas = Event::where('delete_status', 1)
                                 ->latest('updated_at')
                                 ->take(3)
                                 ->get();
    
        $this->AwardDatas = Award::where('delete_status', 1)
                                 ->latest('updated_at')
                                 ->take(3)
                                 ->get(); 
    }
    
     

    #[Layout('user.layouts.app')]
    public function render()
    {
        return view('livewire.user.home');
    }
}
