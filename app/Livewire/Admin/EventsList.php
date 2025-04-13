<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Event;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;

class EventsList extends Component
{

    public $eventId;

#[On('confirmDelete')]
public function deleteEvent($id)
{
    Event::findOrFail($id)->delete();

    // Send success message back to frontend
    $this->dispatch('eventDeleted');
}







    #[Layout('admin.layouts.app')]
    public function render()
    {
        $EventDetails = Event::where('delete_status', 1)->paginate(10);
        return view('livewire.admin.events-list',['eventData' => $EventDetails]);
    }
}
