<nav class="navbar navbar-expand-md navbar-dark color7 flex-column flex-md-row bd-navbar fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ setActive('Inicio') }}">
                    <a class="nav-link" href="/Inicio">Inico</a>
                </li>
                <li class="nav-item {{ setActive('about') }}">
                    <a class="nav-link" href="/nosotros">Sobre Nosotros</a>
                </li>
                <li class="nav-item  {{ setActive('contact') }}">
                    <a class="nav-link" href="/contacto">Cotáctanos</a>
                </li>
                <li class="nav-item  {{ setActive('recipes')}}">
                    <a class="nav-link" href="/recetas ">Login</a>
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
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<br><br>
<!-- acceder a la url request()->url())-->
<!-- acceder al nombre en request()->path())-->
<!-- boolean que verifica si estamos en determinada ruta request()->routeIs())-->
        <!-- forma PRO 
            se crea una función en la carpeta app "Helpers"
            y luego se declara que será utilizado desde el archivo composer.json
            en "autoload" se crea un arreglo llamado "files" y adentro un arreglo con 
            la ruta (["app/helpers.php"]), lugo hay que compilar composer nuevamente.
        -->
            
