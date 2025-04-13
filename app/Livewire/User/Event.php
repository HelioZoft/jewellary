<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Event as EventModel;

class Event extends Component
{
    public $EventDatas;
    public function mount(){
    
        $this->EventDatas = EventModel::where('delete_status', 1)
                                 ->latest('updated_at')
                                 ->take(3)
                                 ->get();
    }
    #[Layout('user.layouts.app')]
    public function render()
    {
        return view('livewire.user.event');
    }
}
