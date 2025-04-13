<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Event;

class EventsList extends Component
{
    #[Layout('admin.layouts.app')]
    public function render()
    {
        $EventDetails = Event::where('delete_status', 1)->paginate(10);
        return view('livewire.admin.events-list',['eventData' => $EventDetails]);
    }
}
