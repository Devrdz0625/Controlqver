<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Q VER</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://ionic.io/ionicons" rel="stylesheet">
        <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
         
            header {
    width: 100%;
    height: 650px;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    position: relative;
    overflow: hidden;
    background: #C0C9F5; 
    text-align: center;
} /!-- HEADER CSS NO TIENE FUNCION, QUITARLO DESPUÉS-----/

header .textos {
    margin-top: 152px;
}

header .titulo {
    font-size: 85px;
}

header .subtitulo {
    font-size: 42px;
    font-weight: 300;
    margin-bottom: 32px;
}

header .boton {
    display: inline-block;
    padding: 6px;
    width: 128px;
    border: 1px solid #FFD3D3;
    color: #fff;
    font-size: 19px;
    text-align: center;
    text-decoration: none;
    border-radius: 16px;
}

.sesgoabajo {
    z-index: 10;
    position: absolute;
    bottom: 0;
    left: 0;
    border-width: 0 0 35vh 100vw;
    border-style: solid;
    border-color: transparent transparent #fff transparent;
}

.sesgoarriba {
    z-index: 10;
    position: absolute;
    top: 0;
    left: 0;
    border-width: 35vh 100vw 0 0;
    border-style: solid;
    border-color: #fff transparent transparent transparent;
}

.contenedor {
    width: 100%;
    max-width: 1000px;
    margin: auto;
    overflow: hidden;
    padding: 52px 0;
    
}

/* Main */

.sobre-nosotros {
    background-image: url(https://img.hotimg.com/desktop-wallpaper-dark-red-background-dark-red-plain.jpeg); 
    overflow: hidden;
    text-align: center;
    font-size: 40px;
    margin-bottom: 10px;
    font-weight: 1000%;
    color: white;
}

.sobre-nosotross {
    /* background-image: url(https://img.hotimg.com/images841a8306088cbd28.png);  */
    background-color: white;
    overflow: hidden;
    text-align: center;
    font-size: 40px;
    margin-bottom: 10px;
    font-weight: 1000%;
    color: white;
}

.slogan {
    
    font-size: 24px;
    font-weight: 400px;
    text-align: center;
    margin-bottom: 40px;
}

.parrafo {
    font-size: 20px;
    margin-bottom: 40px;
    font-weight: 400px;
    text-align: justify;
    line-height: 24px;
    color: rgb(24, 16, 16);
    
}


.acerca-de .boton {
    display: inline-block;
    padding: 6px;
    width: 128px;
    font-weight: 300;
    border: 1px solid rgba(7, 0, 77);
    color: rgb(0, 0, 0);
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    border-radius: 16px;
    margin-top: 24px;
}

.acerca-dee .boton {
    display: inline-block;
    padding: 6px;
    width: 128px;
    font-weight: 300;
    border: 3px solid rgba(7, 8, 77);
    color: black;
    /* background-color:;  */
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 2px;
}

.galeria {
    width: 100%;
    height: 500px;
    overflow: hidden;
    display: flex;
    position: relative;
    flex-wrap: wrap;
}

.imagenes {
    width: 20%;
    height: 400px;
    overflow: hidden;
    position: relative;
}

.imagenes img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.encima {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(52, 73, 94, 0.815);
}

.encima h2 {
    position: relative;
    top: 45%;
    text-align: center;
    color: #fff;
}

.encima div {
    position: relative;
    display: block;
    top: 46%;
    width: 40px;
    height: 5px;
    background: #fff;
    margin: auto;
}

.cards {
    width: 100%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.card {
    margin: 30px 0;
    width: 25%;
    height: 315px;
    text-align: center;
    padding: 15px;
    box-shadow: 0px 3px 8px 3px rgba(0, 0, 0);
}

.cards img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 2%;
}
.cards1 {
    width: 100%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.card1 {
    margin: 10px 0;
    width: 20%;
    height: 300px;
    text-align: center;
    padding: 1px;
    box-shadow: 0px 0px 4px 0 rgba(0, 0, 0);
}

.fondo {
    height: 550px;
    position: relative;
    background-image: url(https://img.hotimg.com/desktop-wallpaper-dark-red-background-dark-red-plain.jpeg);
    overflow: hidden;
    background-attachment: fixed;
    background-position: center;
    padding-top: 20px;
}

.sesgoabajo-unico {
    z-index: 10;
    position: absolute;
    bottom: 0;
    left: 0;
    border-width: 0 0 35vh 100vw;
    border-style: solid;
    border-color: transparent transparent #2c3e50 transparent;
}

.titulo-patrocinadores,
.subtitulo-patrocinadores {
    color: white;
    text-align: center;
}

.titulo-patrocinadores {
    font-size: 30px;
    margin-top: 48px;
}

.subtitulo-patrocinadores {
    font-size: 16px;
    font-weight: 300;
    margin-bottom: 64px;
}

.clientes {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 64px;
    width: 100%;
    justify-content: space-between;
}

.cliente {
    width: 30%;
}

.cliente img {
    width: 100%;
}

textarea {
    display: block;
    width: 100%;
    max-width: 100%;
    min-width: 100%;
    max-height: 200px;
    min-height: 200px;
    background: rgba(37, 37, 33, .7);
    padding: 13px;
    border: none;
    color: #fff;
    font-family: 'open sans';
    margin-bottom: 16px;
}

input[type="submit"] {
    display: inline-block;
    padding: 13px;
    border: none;
    color: #fff;
    background: rgba(37, 37, 33, .7);
    width: 96px;
}

/* Responsive */

@media screen and (max-width:900px) {
    .card {
        width: 48%;
    }
}

@media screen and (max-width:610px) {
    header .textos {
        margin-top: 130px;
    }
    header .titulo {
        font-size: 75px;
    }
    .none {
        display: none
    }
    .imagenes {
        flex-grow: 1;
    }
    .card {
        width: 90%;
    }
    .fondo {
        height: auto;
    }
    .especial {
        display: none;
    }
    .cliente {
        width: 90%;
        height: 200px;
        margin-bottom: 50px;
    }
}

@media screen and (max-width:380px) {
    header .textos {
        margin-top: 100px;
    }
    header .titulo {
        font-size: 65px;
    }
    header .subtitulo {
        font-size: 25px;
        margin-bottom: 32px;
    }
    .sobre-nosotros {
        font-size: 46px;
    }
    .slogan {
        font-size: 20px;
    }
    .titulo-patrocinadores {
        font-size: 46px;
    }
    .subtitulo-patrocinadores {
        font-size: 20px;
    }
}
*{
    margin: 0;
    padding: 0;
}

.slider{
    width: 100%;
    height: 500px;
    overflow: hidden;
}

figure{
    position: relative;
    left: 0;
    width: 400%; /* width dikali slide */
    animation: 15s slide infinite;
}

.slide{
    position: relative;
    width: 25%; /* width dibagi slide */
    float: left;
}

.slide h1{
    position: absolute;
    font-size: 3em;
    width: 100%;
    text-align: center;
    margin-top: 50px;
    color: white;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.slide img{
    width: 100%;
    height: 500px;
}

@keyframes slide{
    0%{
        left:0;
    }
    10%{
        left:0;
    }
    20%{
        left:-100%;
    }
    30%{
        left:-100%;
    }
    40%{
        left:-200%;
    }
    50%{
        left:-200%;
    }
    55%{
        left:-300%;
    }
    65%{
        left:-300%;
    }
    66%{
        left:-200%;
    }
    74%{
        left:-200%;
    }
    75%{
        left:-100%;
    }
    85%{
        left:-100%;
    }
    90%{
        left:0;
    }
    1000%{
        left:0;
    }
}
/* Footer */
@import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

footer {
    /* position: fixed; */
    bottom: 0;
}

@media (max-height:800px) {
    footer {
        position: static;
    }
    header {
        padding-top: 40px;
    }
}

.footer-distributed {
    background-color: #2d2a30;
    box-sizing: border-box;
    width: 100%;
    height: 300px;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 20px 20px 20px 20px;
    margin-top: 0px;
  

}

.footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
    width: 30%;
}

.footer-distributed h3 {
    color: #ffffff;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
}


.footer-distributed h3 span {
    color: #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links {
    color: #ffffff;
    margin: 20px 0 12px;
}

.footer-distributed .footer-links a {
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
}

.footer-distributed .footer-company-name {
    color: #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
    width: 35%;
}

.footer-distributed .footer-center i {
    background-color: #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p {
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin: 0;
}

.footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer-distributed .footer-center p a {
    color: #e0ac1c;
    text-decoration: none;
    ;
}

/* Footer Right */

.footer-distributed .footer-right {
    width: 30%;
}

.footer-distributed .footer-company-about {
    line-height: 20px;
    color: #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span {
    display: block;
    color: #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons {
    margin-top: 25px;
}

.footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}

.footer-distributed .footer-icons a:hover {
    background-color: #3F71EA;
}

.footer-links a:hover {
    color: #3F71EA;
}

@media (max-width: 880px) {
    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }
    .footer-distributed .footer-center i {
        margin-left: 0;
    }
}  
/#clear{clear:both;}/

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @endauth
                </div>
            @endif
           
    <main> 
    <!-- <div class="slider">
        <figure>
            <div class="slide">
                <img src="https://scontent.fntr5-1.fna.fbcdn.net/v/t39.30808-6/416654008_897977732333730_5092745992918124281_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=9534ce&_nc_eui2=AeHMq0EcAOadwY00Ghu1r_ACAKAKtWxbhckAoAq1bFuFycMII9grhc38Q8jGgfc4zqiUYPk9XF5o47cUq39BGv5S&_nc_ohc=Uctynz5UlKAAX_CSM0U&_nc_ht=scontent.fntr5-1.fna&oh=00_AfADW6_46Uiya6KKOwhb2lVlVoe2PLXzfiaRgeblpqfXAA&oe=65D84899" alt="">
            </div>
            <div class="slide">
                <img src="https://scontent.fntr5-1.fna.fbcdn.net/v/t39.30808-6/340949509_730629985410392_5784421857208942665_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=9534ce&_nc_eui2=AeH737yeqXdfn88o7sMrS6xG904-gwvqsjj3Tj6DC-qyOGMr85WzStdYB0Up7fExsIbLgkn7XdsAq_syh90YwOoS&_nc_ohc=k2w0js9tUhcAX9EOw5r&_nc_ht=scontent.fntr5-1.fna&oh=00_AfCz6USnSOB5lHimDqwZ_6O3PfoORevPCCQokJAmzIAB7w&oe=65D98C87" alt="">
            </div>
            <div class="slide">
                <img src="https://scontent.fntr5-1.fna.fbcdn.net/v/t1.6435-9/91196446_3154916074531161_70215873406697472_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=300f58&_nc_eui2=AeH1cRsnKsqC-L_IOXBG2RsvMAtn6sG_ddkwC2fqwb912YRPwvh6_w76auCHBadfFjTCSd_lQ43om7_JTT7M7NEw&_nc_ohc=u_TgCovPCJIAX9y19AN&_nc_ht=scontent.fntr5-1.fna&oh=00_AfDaTxNcvi4ZU2QQQBHLZU0O9XBQW6pM6Gb3l3y0xxHmqQ&oe=65FB270D" alt="">
            </div>
            <div class="slide">
                <img src="https://scontent.fntr5-1.fna.fbcdn.net/v/t1.6435-9/31563997_1902368493119265_5131700845942931456_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=300f58&_nc_eui2=AeG0Uwq_GsD43fU4dv2dn-HFgCHutLB25B-AIe60sHbkH2bnMRFPrbHDYU1Eba9d7sZMQQf7WJ9UMUtZo9-buRc7&_nc_ohc=yxQqwjWX0swAX_z7p_z&_nc_ht=scontent.fntr5-1.fna&oh=00_AfBKIvyOaZ98MlRHFyW9_clWR3JgucQ79QqSVYQwO3UBog&oe=65FB1AC7" alt="">
            </div>
        </figure>
    </div> -->
    <section class="miembros">
            <div class="sobre-nosotross">
                
    <img src="https://img.hotimg.com/Qver-logo.png" style="float: left;">
  
    
    
   

    </div></div>
    &ensp;
    <div class="acerca-dee">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{ route('register') }}" class="boton">Registrate</a>
    <a href="{{ route('login') }}" class="boton">Iniciar Sesión</a>
    </div>
        <section class="acerca-de">
        <center> <div class="contenedor">
                <h2 class="sobre-nosotros">NOSOTROS</h2>
                <h3 class="slogan"> </h3>
                <p class="parrafo">Con más de 150 colaboradores directos en tres sucursales, Q-Ver es la única integradora de calidad para los procesos de construcción en México y América Latina.
El enfoque principal de nuestra empresa se basa en auditar, verificar y asegurar de manera íntegra y objetiva cada detalle en las etapas de los proyectos, haciendo así que los resultados cumplan con todos los requerimientos necesarios, 
cuidando a largo plazo la inversión y dando garantía total a los usuarios finales.</p>
            
                <!-- <a href="{{ route('register') }}" class="boton">Registrate</a>
                <a href="{{ route('login') }}" class="boton">Iniciar Sesión</a> -->
            </div>
    
        <section class="miembros">
            <div class="contenedor">
                <h2 class="sobre-nosotros">CASOS DE ÉXITO</h2>
                <h3 class="slogan">Conoce algunos de nuestros casos de éxito</h3>
                <div class="cards">
                    <div class="card">
                        <img src="https://img.hotimg.com/Municipio-Huehuetoca-2.jpeg" alt="">
                        <h4>Evaluación Geohidrologica</h4>
                        <p>El objetivo del estudio es evaluar las condiciones hidrogeológicas del subsuelo, integrando la información de forma detallada por kilómetro.</p>
                    </div>
                    <div class="card">
                        <img src="https://img.hotimg.com/nextl-2.jpeg" alt="">
                        <h4>Estudio geofísico</h4>
                        <p>El objetivo del estudio consiste en evaluar las condiciones geohidrológicas del terreno y realizar la caracterización integral. </p>
                    </div>
                    <div class="card">
                        <img src="https://img.hotimg.com/subestacion-noreste.jpeg" alt="">
                        <h4>Subestación Noreste</h4>
                        <p>Central de Ciclo Combinado que cubre la demanda de electricidad del sector industrial de Nuevo León.</p>
                    </div>
                    <div class="card">
                        <img src="https://img.hotimg.com/253d9190b1054818d8.jpeg" alt="">
                        <h4>Torre Equus</h4>
                        <p>Gestionar las pruebas en concretos y control de calidad de materiales para optimizar la gestión, control y administración de los materiales.</p>
                    </div>
                    <div class="card">
                        <img src="https://img.hotimg.com/28d9501fd0388bae05.jpeg" alt="">
                        <h4>Carretera MTY – LAR</h4>
                        <p>Carretera que conecta a Monterrey con Laredo y otras ciudades de EU. Necesitaban reparar su carpeta asfáltica</p>
                    </div>
                    <div class="card">
                        <img src="https://img.hotimg.com/17398550eb72b99699.jpeg" alt="">
                        <h4>Punto Valle</h4>
                        <p>Centro comercial para marcas de prestigio, empresas e industria. Necesitaban coordinación entre áreas Técnico – Residente – Laboratorio.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="fondo">
            <h2 class="titulo-patrocinadores">UBICACIÓN</h2>
                <h3 class="subtitulo-patrocinadores"> </h3>
                 <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.1653026456997!2d-100.29734992588124!3d25.698950411197554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866295a0a279ad19%3A0x4f4856366bc5d91!2sQ-Ver!5e0!3m2!1ses!2smx!4v1709106396626!5m2!1ses!2smx" width="700" height= "300"></iframe></center>

                <h3 class="subtitulo-patrocinadores especial">FELIX U. GOMEZ #2770, COL.MODERNA MONTERREY, N.L. MÉXICO, C.P. 64530 </h3>
            </div>
        </section>
    </main>
    <section class="miembros">
            <div class="sobre-nosotross">
                
    <img src="https://img.hotimg.com/Qver-logo.png">
    <img src="https://img.hotimg.com/Qver-logo.png">
    <img src="https://img.hotimg.com/Qver-logo.png">
    <img src="https://img.hotimg.com/Qver-logo.png">
    <img src="https://img.hotimg.com/Qver-logo.png">
    <img src="https://img.hotimg.com/Qver-logo.png">
    
    
   

    </div></div>
    <br>
    <!-- <footer>
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Q<span>VER</span></h3>
            <div>
               
            </div>

            <p class="footer-company-name"></p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-phone"></i>
                <p>(81) 3483 6572</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:sagar00001.co@gmail.com">atencionalcliente@qver.mx</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>SOLUCIONES E INNOVACIÓN EN TINTORERÍA DEL NORTE, S.A. DE C.V.</span>
                <strong></strong>Es una empresa dedicada a Lavanderías y tintorerías. Se ubica en COLONIA ÁLAMOS SEGUNDA SECCIÓN de Querétaro, QUERÉTARO. 
            <div class="footer-icons">
                <a href="https://www.facebook.com/LavallQueretaro"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/lavall.mx?igsh=MXUxd3dyOHpzNzFwZg=="><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer> -->
            </div>
        </div>
    </footer>
</body>

</html>