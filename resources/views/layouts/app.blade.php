<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/ckeditor.js" integrity="sha512-bGYUkjDyyOMGm3ASzq3zRaWZ4CONNH1wAYMFch/Z0ASZrsg722SeRsX0FPPRZjTuJrqIMbB9fvY0LEMzyHeyeQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Notes App') }}</title> -->
    <title>Notes App</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./css/index.css')}}">
    <link rel="stylesheet" href="{{asset('./css/Contact.css')}}">
    <link rel="stylesheet" href="{{asset('./css/notes.css')}}">
    <link rel="stylesheet" href="{{asset('./css/note.css')}}">
</head>
<body>
<div class="scroll">
      <div id="progressbar"></div>
      <div class="nav">
        <div class="first">
          <h3 class="heading"><a href="/notes" style="color: var(--headingColor); text-decoration: none;">Notes App</a></h3>
          <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navUl none">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li><a href="/notes" style="color: var(--textColor); text-decoration: none";>Notes</a></li>
                        <li><a href="/notes/find" style="color: var(--textColor); text-decoration: none";>Find Notes</a></li>
                        <!-- <li><a href="/contact" style="color: var(--textColor); text-decoration: none";>Feedback</a></li> -->
                            <li class="nav-item dropdown">
                                <a   style="color: #000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <script src="{{asset('./scripts/colorS.js')}}"></script>
    <script src="{{asset('./scripts/index.js')}}"></script>
    <script>
        CKEDITOR.replace('description', {
        plugins:'wysiwygarea, toolbar, basicstyles, link'
    });
  </script>
</body>
</html>
