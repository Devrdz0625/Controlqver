<!-- Enlaza Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<div>
    {{-- Stop trying to control. --}}
@if ($selectedConversation)
<div class="chatbox_header" style="border-bottom: 1px solid gray; height: 9.2%; font-size: 25px;  width: 100%; position: absolute; top: 0px; display: flex; flex-wrap: nowrap;">

<div class="return" style="margin: auto 0; font-size: 21px; padding: 7px 11px; cursor: pointer;">
<i class="fas fa-solid fa-arrow-left"></i>

</div>

<div class="img_container" style="height: 50px; width: 50px; margin: auto 0; margin-left: 4px;">
<img src="https://ui-avatars.com/api/?name={{$receiverInstance->name}}" alt="" style="width: 100%; height: 100%; border-radius: 50%;"> <!--MODIFICAR posiblemente-->

</div>

<div class="name" style="margin: auto 5px; cursor: pointer;">{{$receiverInstance->name}}</div>

<div class="info" style="display: flex; flex-wrap: nowrap; margin: auto 0 auto auto; color: #0182f4; font-size: 19px;">

<div class="info_item" style="margin: 1px 8px; padding: 3px 5px; padding: 4px 7px; cursor: pointer;">
<i class="fas fa-solid fa-phone"></i>
</div>

<div class="info_item" style="margin: 1px 8px; padding: 3px 5px; padding: 4px 7px; cursor: pointer;">
<i class="fas fa-regular fa-image"></i>
</div>

<div class="info_item" style="margin: 1px 8px; padding: 3px 5px; padding: 4px 7px; cursor: pointer;">
<i class="fas fa-solid fa-question"></i></div>
</div>
</div>

<div class="chatbox_body" style="overflow: hidden; overflow-y: scrol width: 98%;l; position: absolute; top: 60px; overflow-y: auto; padding: 17px 11px; height: 79%; bottom: 60px + 3px;">
@foreach ($messages as $message)
<div class="msg_body msg_body_receiver" style="border-bottom-left-radius: 0 !important; background-color: #0484f3; color: white; font-size: 20px; border-radius: 9px; display: block; max-width: 80%; margin-top: 11px; padding: 4px 7px;">

{{$message->body}}

<div class="msg_body_footer" style="width: 100%; display: flex; justify-content: end; align-items: right;">
<div class="date" style="font-size: 15px; padding-right: 7px;">
{{$message->created_at->format('m: i a')}}
</div>

<div class="read" style="color: rgb(102, 102, 102);">
<i class="fas fa-solid fa-check" style="font-size: 15px; margin: 3px;"></i>
</div>
</div>
</div>
@endforeach




</div>


    <!-- <div class="chatbox_footer" style="height: 60px; width: 100%; border-top: 1px solid green; position: absolute; bottom: 0;">
footer

    </div> -->
    <br><br><br>
    @else
    <div class="fs-4 text-center text-primary mt-5">
no conversation selectedd

    </div>

@endif
   
</div>
