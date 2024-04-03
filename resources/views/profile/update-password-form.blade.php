<x-form-section submit="updatePassword" style=" padding: 0px 40px; box-shadow: 0px 3px 8px 3px rgba(0, 0, 0); font-size: 20px; width: 80%; margin: 0 auto; ">
    <x-slot name="title"> <br>
      <b> {{ __('ACTUALIZAR CONTRASEÑA') }} </b> 
    </x-slot>

    <x-slot name="description">
        {{ __('Asegúrese de que su cuenta utilice una contraseña larga y aleatoria para mantenerse segura.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Contraseña Actual') }}" />
            <x-input id="current_password" type="password" class="mt-1 block w-full" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('Nueva Contraseña') }}" />
            <x-input id="password" type="password" class="mt-1 block w-full" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
           <b> {{ __('CONTRASEÑA ACTUALIZADA.') }} </b>
        </x-action-message>

        <x-button style="background-color:black; margin-left: 91.2%;">
         <b>   {{ __('GUARDAR') }} </b>
        </x-button>
    </x-slot>
</x-form-section>
