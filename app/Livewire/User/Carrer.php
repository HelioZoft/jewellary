<?php

namespace App\Livewire\User;
//namespace App\Livewire;
use App\Models\Career;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;


class Carrer extends Component
{
    use WithFileUploads;

    public $carrerName;
    public $carrerPhone;
    public $carrerEmail;
    public $carrerAge;
    public $carrerRole;
    public $carrerResume;
    public $accepted = false;

    protected $rules = [
        'carrerName' => 'required|string',
        'carrerPhone' => 'required|string',
        'carrerEmail' => 'required|email',
        'carrerAge' => 'required|integer',
        'carrerRole' => 'required|string',
        'carrerResume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        'accepted' => 'accepted',
    ];

    protected $messages = [
        'carrerName.required' => 'Carrer Name is required.',
        'carrerPhone.required' => 'Carrer Phone is required.',
        'carrerEmail.required' => 'Carrer Email is required.',
        'carrerAge.required' => 'Carrer Age is required.',
        'carrerRole.required' => 'Carrer Role is required.',
        'carrerResume.file' => 'The file must be an pdf,doc,docx.',
        'accepted.accepted' => 'Carrer Agreement is required.',
    ];

    public function submit()
    {
        $this->validate();

        $resumePath = $this->carrerResume->store('resumes', 'public');

        Career::create([
            'name' => $this->carrerName,
            'phone' => $this->carrerPhone,
            'email' => $this->carrerEmail,
            'age' => $this->carrerAge,
            'role' => $this->carrerRole,
            'resume' => $resumePath,
            'accepted' => $this->accepted,
        ]);

        //session()->flash('success', 'Application submitted successfully!');
        $this->reset();

        return redirect()->route('download.agreement');
        // Redirect with flash message
    //return redirect()->route('career.submitted')->with('success', 'Application submitted successfully!');
    //$this->emit('downloadAgreement');
    }





    #[Layout('user.layouts.app')]
    public function render()
    {
        return view('livewire.user.carrer');
    }
}
