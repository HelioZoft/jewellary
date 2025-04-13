<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Award;
use Livewire\Attributes\On;

class AwardsList extends Component
{
    public $awardData;

    public function mount(){
       $this->awardData = Award::where('delete_status',1)->get();
    }

    #[On('confirmDelete')]
    public function deleteEvent($id)
    {
        Award::findOrFail($id)->delete();

        // Send success message back to frontend
        $this->dispatch('awardDeleted');
    }

    #[Layout('admin.layouts.app')]
    public function render()
    {
        $AwardDetails = Award::where('delete_status', 1)->paginate(10);
        return view('livewire.admin.awards-list',['awardDatas'=>$AwardDetails]);
    }
}
