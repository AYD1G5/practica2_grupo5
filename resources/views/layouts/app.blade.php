<!DOCTYPE html>
<!-- saved from url=(0030)https://bootswatch.com/flatly/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>AYD 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- needed for this example only -->
    <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
     <!-- example styles -->
                @yield('encabezado')
  </head>
  <body style="" class="">
  <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" style="">
      <div class="container">
        <a href="#" class="navbar-brand">[AYD1] Practica 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @guest
            <ul class="nav navbar-nav ml-auto">
                    </ul>

        </div>
      </div>
    </div>
<br />
<br />
<br />
<br />
    <div class="container">
      <main class="py-4">
            @yield('content')
        </main>
    </div>
            @else
            <ul class="navbar-nav">
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                  </ul>

        </div>
      </div>
    </div>
<br />
<br />
<br />
<br />
  <div class="container">
      <main class="py-4">
            @yield('content')
        </main>
    </div>


@endguest

   
    <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
