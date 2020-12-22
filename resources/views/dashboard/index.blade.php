<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <title>Bienvenido/a</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      

        <!-- Styles -->
       
        
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/fondo.css') }}" />
        <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

            @if (Route::has('login'))
                   
                        @auth
							<nav class="navbar navbar-expand-lg navbar-light bg-light">
							  <a class="navbar-brand" href="#">Navbar w/ text</a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="navbar-toggler-icon"></span>
							  </button>
							  <div class="collapse navbar-collapse" id="navbarText">
							    <ul class="navbar-nav mr-auto">
							      <li class="nav-item active">
							        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#">Features</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#">Pricing</a>
							      </li>
							    </ul>
							    <span class="navbar-text">
							      <li class="nav-item dropdown" style="list-style:none;">
							        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          {!! Auth::user()->name !!}
							        </a>
							        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							          <a class="dropdown-item" href="#">Mi perfil</a>
							          <a class="dropdown-item" href="#">Salir</a>
							          
							        </div>
							      </li>
							    </span>
							  </div>
							</nav>
                        @else
                            <a href="{{ route('login') }}"  class="logueo">Iniciar sesión</a>
                            <a href="{{ url('user_register') }}"  class="logueo">Registrate</a>
                        @endauth
                    
                @endif
        </div>
        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                    <header id="header" class="alt">
                        <span class="logo"><img src="images/logo.svg" alt="" /></span>
                        <h1>Landing page creator</h1>
                        <p>Este servicio es programdo por Miguel Vargas y finaciado por Edgar navarro <a href="https://twitter.com/edgar14mp">@edgar14mp</a>.</p>
                    </header>

                <!-- Nav -->
                    

                <!-- Main -->
                    <div id="main">


                    </div>

                <!-- Footer -->
                    <footer id="footer">
                        
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="{{ asset('js/jquery.min.js')  }}"></script>
            <script src="{{ asset('js/jquery.scrollex.min.js')  }}"></script>
            <script src="{{ asset('js/jquery.scrolly.min.js')  }}"></script>
            <script src="{{ asset('js/browser.min.js')  }}"></script>
            <script src="{{ asset('js/breakpoints.min.js')  }}"></script>
            <script src="{{ asset('js/util.js')  }}"></script>
            <script src="{{ asset('js/main.js')  }}"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            

    </body>
</html>
