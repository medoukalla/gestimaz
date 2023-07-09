<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class SendContactForm extends Component
{

    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|max:50',
        'email' => 'required|max:50|email',
        'message' => 'required'
    ];

    public function render()
    {
        return view('livewire.send-contact-form');
    }

    public function save_email() {
        $this->validate();

        $message = new Message;
        $message->name = $this->name;
        $message->email = $this->email;
        $message->message = $this->message;

        $message->save();

        $this->name = $this->email = $this->message = null;

        session()->flash('message', '');
    }
}
