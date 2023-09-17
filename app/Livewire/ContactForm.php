<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Lukeraymonddowning\Honey\Traits\WithHoney;

class ContactForm extends Component
{
    use WithHoney;

    public bool $success = false;

    #[Rule('required|min:2', message: 'Ime je obavezno polje')]
    public string $name = '';

    #[Rule('required|email', message: 'Nevažeća email adresa')]
    public string $email = '';

    #[Rule('required|min:5', message: 'Poruka je obavezno polje')]
    public string $message = '';

    public function submit() {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ]);

        $this->success = true;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
