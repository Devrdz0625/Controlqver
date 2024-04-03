<!-- Styles -->
<style>
    .sobre-nosotros {
    background-image: url(https://img.hotimg.com/desktop-wallpaper-dark-red-background-dark-red-plain.jpeg); 
    overflow: hidden;
    text-align: center;
    font-size: 40px;
    margin-bottom: 10px;
    font-weight: 1000%;
    color: white;
}

.contenedor {
    width: 100%;
    
    max-width: 800px;
   
    overflow: hidden;
    padding: 40px 0;
    margin: 50px 0;
    
    height: 80%;
    text-align: center;
    box-shadow: 0px 3px 8px 3px rgba(0, 0, 0);
    
} 
.contenedor1 {
    width: 45%;
    max-width: 1000px;
   
    overflow: hidden;
    padding: 10px 0;
    margin:20px 0;
    border-radius: 2%;
    height: 420px;
    text-align: center;
    box-shadow: 0px 1px 1px 1px rgba(0, 0, 0);
    
} 
</style>

<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        <center>
        <div class="contenedor mb-3" >
        <div class="sobre-nosotros" style="color: transparent;"> .</div>
        <img src="vendor/adminlte/dist/img/Qver-logo.png" alt="" srcset="">
        <x-validation-errors class="mb-4" />
        <center>  
<br>

       <b> <div style="font-size: 20px;"> ¡REGÍSTRATE! </div> </b>
        <div class="contenedor1" style="text-align: left; font-family:Sans-serif, helvética; font-size: 20px;" >
        

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3 " style="text-align: left; width: 90%; margin:10px;" >
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" style="text-align: left; width: 100%; margin:10px; font-size: 20px;" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4" style="text-align: left; width: 90%; margin:10px;">
                <x-label for="email" value="{{ __('Correo Electrónico') }}" />
                <x-input id="email" class="block mt-1 w-full" style="text-align: left; width: 100%; margin:10px; font-size: 20px;" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4" style="text-align: left; width: 90%; margin:10px;">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" style="text-align: left; width: 100%; margin:10px; font-size: 20px;" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4" style="text-align: left; width: 90%; margin:10px;">
                <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" style="text-align: left; width: 100%; margin:10px; font-size: 20px;" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
            &nbsp;&nbsp;&nbsp; <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style=" font-size: 15px;" href="{{ route('login') }}">
                    <b>{{ __('¿Ya estás registrado?') }}</b>
                </a>
                &nbsp;
                <x-button class="ms-4" style="border: none; background-color: black; color: white; padding: 14px 28px; cursor: pointer; border-radius: 5px; ">
                 <B>   {{ __('REGISTRATE') }} </B>
                </x-button>
            </div>
            </div>
            <div class="sobre-nosotros" style="color: transparent;"> .</div>


            </x-slot>
        </form>       
        </div>
       </div>
        
    </x-authentication-card>
</x-guest-layout>
