<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <title>Bienvenido/a</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Styles -->
        <style type="text/css">
              .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }
                
        </style>
        
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/modos.css') }}" />
        <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <div class="login-class">
            @if (Route::has('login'))
                    <div class="links" style="position: relative;float: right; top: 5px;">
                        @auth
                            <a href="{{ url('/home') }}"  class="logueo">Inicio</a>
                        @else
                            <a href="{{ route('login') }}"  class="logueo">Iniciar sesión</a>
                            <a href="{{ url('user_register') }}"  class="logueo">Registrate</a>
                        @endauth
                    </div>
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
                    <nav id="nav">
                        <ul>
                            <li><a href="#intro" class="active">Introducción</a></li>
                            <li><a href="#first">Servicios</a></li>
                            <li><a href="#second">Planes</a></li>
                            <li><a href="#cta">Promociones</a></li>
                        </ul>
                    </nav>

                <!-- Main -->
                    <div id="main">

                        <!-- Introduction -->
                            <section id="intro" class="main">
                                <div class="spotlight">
                                    <div class="content">
                                        <header class="major">
                                            <h2>Inicia con instagram</h2>
                                        </header>
                                        <p>Sed lorem ipsum dolor sit amet nullam consequat feugiat consequat magna
                                        adipiscing magna etiam amet veroeros. Lorem ipsum dolor tempus sit cursus.
                                        Tempus nisl et nullam lorem ipsum dolor sit amet aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="generic.html" class="button">Learn More</a></li>
                                        </ul>
                                    </div>
                                    <span class="image"><img src="images/insta-image.jpg" alt="" /></span>
                                </div>
                            </section>

                        <!-- First Section -->
                            <section id="first" class="main special">
                                <header class="major">
                                    <h2>Servicios</h2>
                                </header>
                                <ul class="features">
                                    <li>
                                        <span class="icon major style1 fa-code"></span>
                                        <h3>Codifica a tu gusto</h3>
                                        <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
                                    </li>
                                    <li>
                                        <span class="icon major style3 fa-copy"></span>
                                        <h3>Obten tu propia landing</h3>
                                        <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
                                    </li>
                                    <li>
                                        <span class="icon major style5 fa-diamond"></span>
                                        <h3>Aquiere versión primium</h3>
                                        <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
                                    </li>
                                </ul>
                                <footer class="major">
                                    <ul class="actions special">
                                        <li><a href="generic.html" class="button">Learn More</a></li>
                                    </ul>
                                </footer>
                            </section>

                        <!-- Second Section -->
                            <section id="second" class="main special">
                                <header class="major">
                                    <h2>Planes</h2>
                                    <p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
                                    posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
                                </header>
                                <ul class="statistics">
                                    <li class="style1">
                                        <span class="icon fa-code-fork"></span>
                                        <strong>5,120</strong> Etiam
                                    </li>
                                    <li class="style2">
                                        <span class="icon fa-folder-open-o"></span>
                                        <strong>8,192</strong> Magna
                                    </li>
                                    <li class="style3">
                                        <span class="icon fa-signal"></span>
                                        <strong>2,048</strong> Tempus
                                    </li>
                                    <li class="style4">
                                        <span class="icon fa-laptop"></span>
                                        <strong>4,096</strong> Aliquam
                                    </li>
                                    <li class="style5">
                                        <span class="icon fa-diamond"></span>
                                        <strong>1,024</strong> Nullam
                                    </li>
                                </ul>
                                <p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
                                <footer class="major">
                                    <ul class="actions special">
                                        <li><a href="generic.html" class="button">Learn More</a></li>
                                    </ul>
                                </footer>
                            </section>

                        <!-- Get Started -->
                            <section id="cta" class="main special">
                                <header class="major">
                                    <h2>Congue imperdiet</h2>
                                    <p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
                                    posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
                                </header>
                                <footer class="major">
                                    <ul class="actions special">
                                        <li><a href="generic.html" class="button primary">Get Started</a></li>
                                        <li><a href="generic.html" class="button">Learn More</a></li>
                                    </ul>
                                </footer>
                            </section>

                    </div>

                <!-- Footer -->
                    <footer id="footer">
                        <section>
                            <h2>Aliquam sed mauris</h2>
                            <p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
                            <ul class="actions">
                                <li><a href="generic.html" class="button">Learn More</a></li>
                            </ul>
                        </section>
                        <section>
                            <h2>Etiam feugiat</h2>
                            <dl class="alt">
                                <dt>Address</dt>
                                <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
                                <dt>Phone</dt>
                                <dd>(000) 000-0000 x 0000</dd>
                                <dt>Email</dt>
                                <dd><a href="#">information@untitled.tld</a></dd>
                            </dl>
                            <ul class="icons">
                                <li><a href="#" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon fa-github alt"><span class="label">GitHub</span></a></li>
                                <li><a href="#" class="icon fa-dribbble alt"><span class="label">Dribbble</span></a></li>
                            </ul>
                        </section>
                        <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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

    </body>
</html>
