<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Models\Award;
use Carbon\Carbon;
use Livewire\Attributes\On;

class Awards extends Component
{
    use WithFileUploads;
    protected $listeners = ['deleteAward'];

    public $awardId;
    public $awardName;
    public $awardDate;
    public $awardDiscription;
    public $awardImg;
    public $awardImgPath;

    protected $rules = [
        'awardName' => 'required|string',
        'awardDiscription' => 'required|string',
        'awardDate' => 'required|date',
    ];

    protected $messages = [
        'awardName.required' => 'Award Name  is required.',
        'awardName.string' => 'Award Name  must be a string.',
        'awardDate.required' => 'Award Date  is required.',
        'awardDiscription.required' => 'Award Discription is required.',
        'awardDiscription.string' => 'Award Discription  must be a string.',
        'awardImg.image' => 'The file must be an image.',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $award = Award::findOrFail($id);
            $this->awardId = $award->id;
            $this->awardName = $award->title;
            $this->awardDiscription = $award->description;
            $this->awardDate = Carbon::parse($award->award_date)->format('Y-m-d');
            $this->awardImgPath = $award->awardImg;
        }
    }

    #[On('deleteAward')]
    public function deleteAward($id)
    {
        dd('id', $id);
        $award = Award::findOrFail($id);
    
        if ($award->awardImg && \Storage::exists($award->awardImg)) {
            \Storage::delete($award->awardImg);
        }
    
        $award->delete();
    
        session()->flash('message', 'Award deleted successfully!');
    }
    


    public function submit()
    {
        $rules = [
            'awardName' => 'required|string',
            'awardDiscription' => 'required|string',
            'awardDate' => 'required|date',
        ];
        if (!$this->awardId || $this->awardImg) {
            $rules['awardImg'] = 'required|image|mimes:jpg,jpeg,png|max:5120';
        }
        $this->validate($rules);
        
        $awardImgPath = $this->awardImg ? $this->awardImg->store('uploads', 'public') : null;
        
        if ($this->awardId) {
            // Update existing visa
            $award = Award::findOrFail($this->awardId);
            $award->update([
                'title' => $this->awardName,
                'description' => $this->awardDiscription,
                'award_date' => $this->awardDate,
                'awardImg' => $awardImgPath ?? $award->awardImg, // Keep old file path if no new file is uploaded
            ]);
            session()->flash('message', 'Award details updated successfully!');
            $this->reset(['awardName', 'awardDiscription', 'awardDate', 'awardImg', 'awardImgPath', 'awardId']);
        } else {
            // Add new visa
            Award::create([
                'title' => $this->awardName,
                'description' => $this->awardDiscription,
                'award_date' => $this->awardDate,
                'awardImg' =>  $awardImgPath,
                'delete_status' => 1,
            ]);
            session()->flash('message', 'Award details added successfully!');
        }
        // Reset form fields
        $this->reset(['awardName','awardDiscription','awardDate','awardImgPath']);
    }

    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.awards');
    }
}
