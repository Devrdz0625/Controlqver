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
    width: 45%;
    max-width: 1000px;
   
    overflow: hidden;
    padding: 10px 0;
    margin:20px 0;
    border-radius: 2%;
    height: 300px;
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
        
<center>     <br>  
<b> <div style="font-size: 20px;"> ¡INICIAR SESIÓN! </div> </b>
<div class="contenedor1" style="text-align: left; font-family:Sans-serif, helvética; font-size: 20px;" >
@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3 " style="text-align: left; width: 90%; margin:10px;" >
       <b> <x-label for="email" class="form-label" value="{{ __('Correo Electrónico') }}" /> </b><br>
        <x-input id="email" class="form-control"  style="text-align: left; width: 100%; margin:10px; font-size: 20px;" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
    </div>

    <div class="mt-4"  style="text-align: left; width: 90%; margin:10px;">
       <b> <x-label for="password"  class="form-label" value="{{ __('Contraseña') }}" /> </b> <br>
        <x-input id="password" class="block mt-1 w-full" style="text-align: left; width: 100%; margin:10px; font-size: 20px;" type="password" name="password" required autocomplete="current-password" />
    </div>

    <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
            <x-checkbox id="remember_me" name="remember" />
            <span class="ms-2 text-sm text-gray-600" style="text-align: left;  font-size: 16px;">{{ __('Recordarmé') }}</span>
        </label>
    </div>
<br>
    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
        &nbsp; <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style=" font-size: 15px;" href="{{ route('password.request') }}">
               <b> {{ __('¿Olvidaste tu contraseña?') }} </b>
            </a>
        @endif
 
        <x-button class="ms-4" style="border: none; background-color: black; color: white; padding: 14px 20px; cursor: pointer; border-radius: 5px; ">
           <b> {{ __('INICIAR SESIÓN') }} <b>
        </x-button>
        
    </div>
</form>
</center>
<div class="sobre-nosotros" style="color: transparent;"> .</div>
        </x-slot>
        
        </div>
       </div>
       
       </center>
       

       
    </x-authentication-card>
</x-guest-layout>
