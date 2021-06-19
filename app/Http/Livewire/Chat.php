<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Chat extends Component
{

    public $messageText;
    public $hallo;
    public function render()
    {
        $messages = Message::with('user')->latest()->take(10)->get()->sortBy('id');
        $this->hallo= "hallo ".auth()->user()->name;
        return view('livewire.chat', compact('messages'));
    }

    public function sendMessage()
    {
        Message::create([
            'user_id' => auth()->user()->id,
            'message_txt' => $this->messageText,
        ]);

        $this->reset('messageText');
    }

}
