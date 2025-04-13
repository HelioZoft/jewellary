<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Staff;
use Livewire\Attributes\On;

class StaffList extends Component
{
    #[On('confirmDelete')]
    public function deleteEvent($id)
    {
        Staff::findOrFail($id)->delete();

        // Send success message back to frontend
        $this->dispatch('staffDeleted');
    }




    #[Layout('admin.layouts.app')]
    public function render()
    {
        $staffDatas = Staff::where('delete_status', 1)->get();

        return view('livewire.admin.staff-list', [
            'staffDatas' => $staffDatas,
        ]);
    }
}
