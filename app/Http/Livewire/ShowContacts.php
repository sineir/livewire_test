<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
// events 7:40
class ShowContacts extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.show-contacts');
    }
}
