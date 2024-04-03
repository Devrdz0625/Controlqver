<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="chatlist_header" style="border-bottom: 1px solid gray; height: 60px; display: flex; flex-wrap: nowrap;">

    <div class="title" style="font-size: 25px; display: flex; padding: 5px 6px; align-items: center; justify-content: center; text-align: center;">
        Chat
    </div>

    <div class="img_container" style="height: 39px; width: 39px; margin: auto; margin-left: auto; margin-right: 2px;">
        <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{auth()->user()->name}}" alt="" style="width: 100%; height: 100%; border-radius: 50%; border: 1px solid gray;">
    </div>


    </div>

    <div class="chatlist_body" style="overflow-y: scroll; width: 23%; position: absolute; top: 70px; overflow-y: auto; padding: 17px 11px; height: 82%; bottom: 60px + 3px;">

    @if (count($conversations) > 0)
    @foreach ($conversations as $conversation)
    <div class="chatlist_item" wire:click="$dispatch('chatUserSelected', {{$conversation}},{{$this->getChatUserInstance($conversation, $name = 'id') }})" style="padding: 2px 8px; display: flex; flex-wrap: nowrap; width: 95%; margin: 9px 4px; border-radius: 14px; background-color: rgb(241, 241, 241); cursor: pointer;">
        <div class="chatlist_img_container" style="height: 50px; width: 50px; margin: auto; margin-left: auto;">
        <img src="https://ui-avatars.com/api/?name={{$this->getChatUserInstance($conversation, $name = 'name')}}"> <!--MODIFICAR posiblemente-->
        </div>

        <div class="chatlist_info" style="padding: 2px 5px; width: 80%; display: block;">
            <div class="top_row" style="margin: 3px 0px; width: 100%; display: flex;">
                <div class="list_username" style="font-size: 22px; width: 80%; font-weight: 600;">{{$this->getChatUserInstance($conversation,$name='name')}}</div>
                    <span class="date" style="font-size: 14px; margin: auto;"> {{$conversation->messages->last()->created_at->shortAbsoluteDiffForHumans()}} </span>
                </div>
                
                <div class="bottom_row" style="display: flex; flex-wrap: nowrap; width: 100%;">

                <div class="message_body " style="font-size: 20px; font-weight: 100; font-family: 'Roboto'; width: 80%; white-space:nowrap; overflow:hidden; text-overflow: ellipsis;">  <!--AGG WHITE-SPACE, OVERFLOW, TEXT-OVERFLOW-->
                {{$conversation->messages->last()->body}}
                </div>

                <div class="unread_count" style="margin: auto; font-size: 18px; padding: 2px 7px; margin-top: 6px; border-radius: 50%; color: rgb(207, 33, 33); font-weight: lighter;">
                    56
                
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @else
    You have no conversations 
    @endif



    </div>
</div>
