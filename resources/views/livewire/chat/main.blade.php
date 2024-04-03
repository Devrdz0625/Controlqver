<div>
<a href="user/profile" class="btn btn-danger" tabindex="6">Regresar al Panel</a>
<div class="card" style=" max-width: 100%; overflow: hidden; margin: 20px 0; text-align: center; box-shadow: 0px 3px 8px 3px rgba(0, 0, 0);">
    <h2 style="font-size:40px; ">holaaa</h2>
    </div>

    <div class="chat_container" style="z-index: 10; background-color: white; position: fixed; width: 98%; left: 10px; height: 73%; border: 2px solid rgb(230, 230, 230); border-radius: 10px; margin-top: 15px; display: flex; flex-wrap: nowrap; padding: 5px 6px;">

        <div class="chat_list_container" style="border-right: 1px solid gray; width: 25%; height: 100%; border-radius: inherit;">

        @livewire('chat.chat-list')
        </div>

        <div class="chat_box_container" style="position: relative; width: 75%; height: 100%; ">

        @livewire('chat.chatbox')

        @livewire('chat.send-message')
        </div>
    </div>

    <script>
window.addEventListener('chatSelected', event=>{

    if( window.innerWidth < 768){
        $('.chat_list_container').hide();
        $('.chat_box_container').show();

    }
});

$(window).resize(function(){
if(window.innerWidth >768){
        $('.chat_list_container').show();
        $('.chat_box_container').show();
}
});


$(document).on('click', '.return', function(){
        $('.chat_list_container').show();
        $('.chat_box_container').hide(); 
});

    </script>
</div>

