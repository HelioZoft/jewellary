<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Models\Staff as StaffModel;

class Staff extends Component
{
    use WithFileUploads;

    public $staffId; 
    public $staffName;
    public $staffPosition;
    public $staffEmail;
    public $staffPhone;
    public $staffImg;
    public $staffImgPath;

    protected $rules = [
        'staffName' => 'required|string|max:255',
        'staffPosition' => 'required|string|max:255',
        'staffEmail' => 'required|email',
        'staffPhone' => 'required|string|max:20',
        'staffImg' => 'nullable|image|max:2048', // Optional image, max size 2MB
    ];
    
    protected $messages = [
        'staffName.required' => 'Staff Name is required.',
        'staffName.string' => 'Staff Name must be a string.',
        'staffName.max' => 'Staff Name may not be greater than 255 characters.',
    
        'staffPosition.required' => 'Staff Position is required.',
        'staffPosition.string' => 'Staff Position must be a string.',
        'staffPosition.max' => 'Staff Position may not be greater than 255 characters.',
    
        'staffEmail.required' => 'Staff Email is required.',
        'staffEmail.email' => 'Staff Email must be a valid email address.',
    
        'staffPhone.required' => 'Staff Phone is required.',
        'staffPhone.string' => 'Staff Phone must be a string.',
        'staffPhone.max' => 'Staff Phone may not be greater than 20 characters.',
    
        'staffImg.image' => 'The Staff Image must be a valid image file.',
        'staffImg.max' => 'The Staff Image may not be larger than 2MB.',
    ];
    
    public function mount($id = null)
    {
       
        if ($id) {
            $staff = StaffModel::findOrFail($id);
            $this->staffId = $staff->id;
            $this->staffName = $staff->name;
            $this->staffPosition = $staff->position;
            $this->staffEmail = $staff->email;
            $this->staffPhone = $staff->phone;
            $this->staffImgPath = $staff->staffImg; // assuming the image path is stored in 'image' column
        }
    }

    public function submit()
    {
       
        $rules = [
            'staffName' => 'required|string|max:255',
            'staffPosition' => 'required|string|max:255',
            'staffEmail' => 'required|email',
            'staffPhone' => 'required|string|max:20',
        ];

        if (!$this->staffId || $this->staffImg) {
            $rules['staffImg'] = 'required|image|mimes:jpg,jpeg,png|max:5120';
        }

        $this->validate($rules);

        $staffImgPath = $this->staffImg ? $this->staffImg->store('uploads', 'public') : null;

        if ($this->staffId) {
            // Update existing staff
            $staff = StaffModel::findOrFail($this->staffId);
            $staff->update([
                'name' => $this->staffName,
                'position' => $this->staffPosition,
                'email' => $this->staffEmail,
                'phone' => $this->staffPhone,
                'staffImg' => $staffImgPath ?? $staff->image, // keep old if new not uploaded
            ]);

            session()->flash('message', 'Staff details updated successfully!');
            $this->reset([
                'staffName', 'staffPosition', 'staffEmail',
                'staffPhone', 'staffImg', 'staffImgPath', 'staffId'
            ]);
        } else {
            // Add new staff
            StaffModel::create([
                'name' => $this->staffName,
                'position' => $this->staffPosition,
                'email' => $this->staffEmail,
                'phone' => $this->staffPhone,
                'staffImg' => $staffImgPath,
                'delete_status' => 1, 
            ]);

            session()->flash('message', 'Staff details added successfully!');
            $this->reset([
                'staffName', 'staffPosition', 'staffEmail',
                'staffPhone', 'staffImg', 'staffImgPath'
            ]);
        }
    }

    
    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.staff');
    }
}
