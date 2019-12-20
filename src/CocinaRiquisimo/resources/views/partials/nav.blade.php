<nav class="navbar navbar-expand-md navbar-dark color7 flex-column flex-md-row bd-navbar shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="img/icons/secondary.png" alt="Icono" style="width: 20px; height: 20px; margin-left: 5px; margin-right: 5px;">{{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">                
                <li class="nav-item {{ setActive('about') }}">
                    <a class="nav-link" href="/nosotros">Sobre Nosotros</a>
                </li>
                <li class="nav-item  {{ setActive('contact') }}">
                    <a class="nav-link" href="/contacto">Cotáctanos</a>
                </li>
                <li class="nav-item  {{ setActive('recipes.index')}}">
                    <a class="nav-link" href="{{ route('recipes.index') }}">Recetas</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Acceder
                    </a>

                    <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdown">
                        <a class="nav-link text-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <hr>
                        @if (Route::has('register'))                        
                            <a class="nav-link text-center" href="{{ route('register') }}">{{ __('Register') }}</a>                
                        @endif
                    </div>
                </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Mi cuenta
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right p-4 px-5 color6" aria-labelledby="navbarDropdown">
                            <center style="margin-bottom: 12px;">
                            <b class="text-white">{{ Auth::user()->name }} <span class="caret"></span></b>
                            <a href=""><img src="/img/profile/{{ Auth::user()->photo }}" style="border-radius: 100px;width: 150px;height: 150px; border: black 2px solid; margin-top: 15px; margin-bottom: 20px; background-color: white;" class="mCS_img_loaded"></a>
                            <br>
                            <hr class="bg-white">                                                                                    
                            <a href="{{ route('recipes.yours') }}" title="Tus Recetas" class="btn color2">
                                <i class="zmdi zmdi-cutlery"></i>
                            </a>
                            
                            <a href="{{ url('/profile') }}" title="Perfil" class="btn color7">
                                <i class="zmdi zmdi-account-circle"></i>
                            </a>
                            <a href="#!" title="{{ __('Logout') }}" class="btn color5" 
                                href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="zmdi zmdi-power"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </center>
                        </div>                    
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<br>
<!-- acceder a la url request()->url())-->
<!-- acceder al nombre en request()->path())-->
<!-- boolean que verifica si estamos en determinada ruta request()->routeIs())-->
<!-- forma PRO 
    se crea una función en la carpeta app "Helpers"
    y luego se declara que será utilizado desde el archivo composer.json
    en "autoload" se crea un arreglo llamado "files" y adentro un arreglo con 
    la ruta (["app/helpers.php"]), lugo hay que compilar composer nuevamente.
-->
            
