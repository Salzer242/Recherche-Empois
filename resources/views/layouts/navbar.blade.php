<nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'ISI Emplois') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @if(! Route::is("home"))
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('offre')}}">Offre d'Emplois</a></li>
                @endif
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('creation')}}">Deposer mon CV </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link custom-navbar" href="{{ route('publication')}}"> Publier une Offre d'Emploi<span class="badge badge-pill badge-primary">new</span></a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(! Route::is("home"))
                            <a class="dropdown-item" href="{{ route('home')}}">Mon Profil</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('modification') }}">Modifier mon CV</a>
                            <a class="dropdown-item" href="{{ route('affichage') }}">Afficher mon Cv</a>
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