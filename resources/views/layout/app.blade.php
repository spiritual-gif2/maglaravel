<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title','MAD - Online Shop')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap, Font Awesome)-->
        <link href="{{ asset('/css/style.css')}}" rel="stylesheet" />
        <link href="{{ asset('/css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{ asset('/css/all.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home.index')}}">MAD - Online Shop</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('home.index')}}">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('product.index')}}">Shop</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('home.about')}}">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('home.index')}}#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <h2 class="container-fluid text-center">@yield('subtitle','')</h2>
        
        @yield('content')
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            COTONOU - BENIN
                            <br />
                            Abomey-Calavi - BENIN
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Our Social Accounts</h4>
                        <a class="btn btn-outline-light mx-1" href="#!"><i class="fab fa-facebook-messenger"></i></a>
                        <a class="btn btn-outline-light mx-1" href="#!"><i class="fab fa-twitter-square"></i></a>
                        <a class="btn btn-outline-light mx-1" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light mx-1" href="#!"><i class="fab fa-dribbble"></i></a>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; MAD Corp</small></div>
        </div>
        <!-- Bootstrap & Font Awesome core JS-->
        <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('js/all.js')}}"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
