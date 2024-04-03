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
    padding: 80px 0;
    margin: 100px 0;
    
    height: 65%;
    text-align: center;
    box-shadow: 0px 3px 8px 3px rgba(0, 0, 0);
    
} 
.contenedor1 {
    width: 70%;
    max-width: 1000px;
   
    overflow: hidden;
    padding: 10px 0;
    margin:40px 0;
    border-radius: 2%;
    height: 300px;
    text-align: center;
    box-shadow: 0px 0px 0px 0px rgba(0, 0, 0);
    
}
</style>

<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <center>
        <div class="contenedor mb-3" >
        <div class="sobre-nosotros" style="color: transparent;"> .</div>
        <img src="vendor/adminlte/dist/img/Qver-logo.png" alt="" srcset="">
       

        <center>
        <div class="contenedor1" style="text-align: left; font-family:Sans-serif, helvética; font-size: 20px;" >
        <div class="mb-4 text-sm text-gray-600" style="text-align: justify;">
            {{ __('¿Olvidaste tu contraseña? Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer su contraseña que le permitirá elegir una nueva.') }}
        </div>
<br><br>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />
<center>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Correo Electrónico') }}" />
                <x-input id="email" class="block mt-1 w-full" style="width:50%; height: 10%;" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
<br><br>
            <div class="flex items-center justify-end mt-4">
                <x-button style="border: none; background-color: black; color: white; padding: 14px 28px; cursor: pointer; border-radius: 5px; ">
                   <b> {{ __('RESTABLECER CONTRASEÑA') }} </b>
                </x-button>
            </div>
            </div>
            </center>
            </x-slot>
        </form>
        
        </center>
        </center>
    </x-authentication-card>
    </div>
</x-guest-layout>
