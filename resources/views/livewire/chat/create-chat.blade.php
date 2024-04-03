<div>
    {{-- Do your work, then step back. --}}

<ul class="list-group w-75 mx-auto mt-3 container-fluid" style="cursor: pointer;  border-radius: 14px; font-size: 25px; padding: 8px 5px;list-style: none; position: relative; left: 22%; border: 2px solid gray; height: 60%; width: 60%; ">
    @foreach ($users as $user)
    

    <li class="list-group-item list-group-item-action" wire:click='checkconversation({{$user->id}})' style=" border: 1px solid rgb(233, 233, 233); width:100%; background-color: rgb(241, 241, 241);"> {{ $user->name}} </li>
    <!-- <li class="list-group-item list-group-item-action" style="border: 1px solid rgb(233, 233, 233); width:100%;"> kjk </th> -->

    @endforeach
</ul>
</div>
