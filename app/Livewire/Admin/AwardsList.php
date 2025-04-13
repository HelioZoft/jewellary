<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Award;

class AwardsList extends Component
{
    public $awardData;

    public function mount(){
       $this->awardData = Award::where('delete_status',1)->get();
    }

    #[Layout('admin.layouts.app')]
    public function render()
    {
        $AwardDetails = Award::where('delete_status', 1)->paginate(10);
        return view('livewire.admin.awards-list',['awardDatas'=>$AwardDetails]);
    }
}
