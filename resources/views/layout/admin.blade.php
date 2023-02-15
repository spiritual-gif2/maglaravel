<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{ asset('/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">


    <title>@yield('title','Admin Template')</title>
    <style>
    .img-profile {
        height: 2em;
        width: 2em;
    }

    .profile-font {
        color: #858796 !important;
        font-size: 80%;
        font-weight: 400;
    }

    .img-product {
        height: auto;
        width: 1em;
    }
    </style>
</head>

<body>

    <div class="row g-0 ">
        <!--Admin Side bar -->
        <div class="pt-2 col-md-3 col-12 fixed bg-dark text-white text-center">
            <a href="{{ route('admin.index')}}" class="text-decoration-none text-white">
                <h2>Admin Panel</h2>
            </a>
            <hr />
            <nav>
                <ul class="nav flex-column flex-center">
                    <li><a href="{{ route('admin.index')}}" class="nav-link fs-5 text-white">Admin - Home</a></li>
                    <li><a href="{{ route('admin.product.list')}}" class="nav-link fs-5 text-white">Admin - Products</a></li>
                    <li><a href="{{ route('home.index') }}" class="m-3 btn bg-secondary nav-link fs-5 text-white">Go
                            Back to Site</a></li>
                </ul>
            </nav>
        </div>
        <!--EndOf Admin Side bar -->
        <div class="col-md-9 col-12 content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profil-font">Admin</span>
                <img src="{{ asset('/assets/avataaars.svg')}}" alt="..." class="img-profile rounded-circle">
            </nav>
            <!-- Admin PAge content -->
            <div class="m-5">
                @yield('content')
            </div>
            <!--EndOf Admin PAge content -->
        </div>


    </div>


    <!-- Footer -->
    <div class="bg-secondary copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; MAD Corp</small></div>
    </div>

</body>

<script src="{{ asset('/js/bootstrap.bundle.js')}}"></script>
<script src="{{ asset('/js/all.js')}}"></script>
</html>