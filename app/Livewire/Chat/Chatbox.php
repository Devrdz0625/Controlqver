<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use App\Models\Conversation;
use App\Models\User;
use App\Models\Message;


class Chatbox extends Component
{
    public $selectedConversation;
    public $receiver;
    public $messages;
    public $paginateVar= 10;

    protected $listeners=['loadConversation'];

    public function loadConversation(Conversation $conversation, User $receiver)
    {

        //dd($conversation,$receiver);
        $this->selectedConversation= $conversation; 
        $this->receiverInstance= $receiver; 


        $this->messages_count= Message::where('conversation_id',$this->selectedConversation->id)->count();

        $this->messages= Message::where('conversation_id', $this->selectedConversation->id)
                ->skip( $this->messages_count - $this->paginateVar)
                ->take($this->paginateVar)->get();

        $this->dispatchBrowserEvent('chatSelected');
    }
    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
