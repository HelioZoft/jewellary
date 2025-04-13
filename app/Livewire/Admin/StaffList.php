<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Staff;

class StaffList extends Component
{
    #[Layout('admin.layouts.app')]
    public function render()
    {
        $staffDatas = Staff::where('delete_status', 1)->get();

        return view('livewire.admin.staff-list', [
            'staffDatas' => $staffDatas,
        ]);
    }
}
