<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Models\Event;
use Carbon\Carbon;

class Events extends Component
{
    use WithFileUploads;

    public $eventId;
    public $eventName;
    public $eventDate;
    public $eventDiscription;
    public $eventImg;
    public $eventImgPath;

    protected $rules = [
        'eventName' => 'required|string',
        'eventDiscription' => 'required|string',
        'eventDate' => 'required|date',
      
    ];
 

    protected $messages = [
        'eventName.required' => 'Event Name  is required.',
        'eventName.string' => 'Event Name  must be a string.',
        'eventDate.required' => 'Event Date  is required.',
        'eventDiscription.required' => 'Event Discription is required.',
        'eventDiscription.string' => 'Event Discription  must be a string.',
        'eventImg.image' => 'The file must be an image.',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $event = Event::findOrFail($id);
            $this->eventId = $event->id;
            $this->eventName = $event->title;
            $this->eventDiscription = $event->description;
            $this->eventDate = Carbon::parse($event->event_date)->format('Y-m-d');
            $this->eventImgPath = $event->eventImg;
        }
    }

    public function submit()
    {
        $rules = [
            'eventName' => 'required|string',
            'eventDiscription' => 'required|string',
            'eventDate' => 'required|date',
        ];
        if (!$this->eventId || $this->eventImg) {
            $rules['eventImg'] = 'required|image|mimes:jpg,jpeg,png|max:5120';
        }
        
        $this->validate($rules);
        
        $eventImgPath = $this->eventImg ? $this->eventImg->store('uploads', 'public') : null;
        
        if ($this->eventId) {
            // Update existing visa
            $event = Event::findOrFail($this->eventId);
            $event->update([
                'title' => $this->eventName,
                'description' => $this->eventDiscription,
                'event_date' => $this->eventDate,
                'eventImg' => $eventImgPath ?? $event->eventImg,
            ]);
            session()->flash('message', 'Event details updated successfully!');
            $this->reset(['eventName', 'eventDiscription', 'eventDate', 'eventImg', 'eventImgPath', 'eventId']);
        } else {
            // Add new visa
            Event::create([
                'title' => $this->eventName,
                'description' => $this->eventDiscription,
                'event_date' => $this->eventDate,
                'eventImg' =>  $eventImgPath,
                'delete_status' => 1,
            ]);
            session()->flash('message', 'Event details added successfully!');
        }
        // Reset form fields
        $this->reset(['eventName','eventDiscription','eventDate','eventImgPath']);
    }

    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.events');
    }
}
