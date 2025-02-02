<?php

namespace App\Livewire\Chat;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Conversation;
use App\Models\User;


class ChatList extends Component
{
    public $auth_id;
    public $conversations;
    public $receiverInstance;
    public $name;
    public $selectedConversation;

    protected $listeners= ['chatUserSelected'];
    
    public function chatUserSelected(Conversation $conversation, $receiver_id)
    {
        dd($conversation,$receiver_id);
        $this->selectedConversation= $conversation;

        $receiverInstance= User::find($receiver_id);
        

         $this->dispatch('chat.chatbox','loadConversation', $this->selectedConversation,$receiverInstance);
        
    }

    public function getChatUserInstance(Conversation $conversation, $request)
    {
        $this->auth_id= auth()->id();
        //get selected conversation

        if ($conversation->sender_id== $this->auth_id){
        $this->receiverInstance= User::firstWhere('id',$conversation->receiver_id);
        }
        else{
        $this->receiverInstance= User::firstWhere('id', $conversation->sender_id);
        }
        if (isset($request)){
            return $this->receiverInstance->$request;
        }
    }

    public function mount()
    {
        $this->auth_id= auth()->id();
        $this->conversations= Conversation::where('sender_id', $this->auth_id)
                     ->orWhere('receiver_id', $this->auth_id)->orderBy('last_time_message', 'DESC')->get();
                  
    }


    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}
