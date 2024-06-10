<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello!</title>
    <meta name="description" content="description" />
    <meta name="author" content="author" />
    <meta name="keywords" content="keywords" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheet.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Khmer&display=swap');

        body {
            font-family: "Khmer", sans-serif;

        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-XXXXXXXXXX-X');
    </script>
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
</head>

<body>
    <div class="container-fluid">
        <div class="row pt-3 pb-2 bg-primary text-light">
            <div class="col-9">
                <i class="fa-solid fa-phone"></i> 012 220 152
                <i class="fa-solid fa-phone"></i> 093 456 747
                <i class="fa-solid fa-phone"></i> 071 5777 378
                <i class="fa-solid fa-truck"></i> Delivery within 2 hours / Delivery 25 Provinces
            </div>
            <div class="col-3 ">
                <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-facebook"></i></a>
                <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-tiktok"></i></a>
                <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-telegram"></i></a>
                <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-youtube"></i></a>
                <a href="{{ route('login') }}"class="text-light">login</a>
                <a href="{{ route('register') }}"class="text-light">Register</a>
                {{-- <a href="{{ route('dashboard') }}"class="text-light">My Panel</a> --}}


            </div>


        </div>
        <div class="row">
            <div class="col-2">
                <a href="/"><img src="{{ asset('/images/logo.png') }}" alt="" class="img-fluid"></a>
            </div>
            <div class="col-7 pt-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="សូមបញ្ចូលឈ្មោះទំនិញ..."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">ស្វែងរក</button>
                </div>
            </div>
            <div class="col-3 pt-4">
                <div class="fs-3">
                    <span><i class="fa-solid fa-cart-arrow-down"></i> cart</span>
                    <select class="">
                        <option selected>ជ្រើសរើស</option>
                        <option value="1">ចុះឈ្មោះ</option>
                        <option value="2">ចូលគណនី</option>

                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-secondary-subtle">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#" <button class="btn btn-primary" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                            aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Promotion</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Shop
                                    </a>
                                    <ul class="dropdown-menu">
                                        {{-- <li><a class="dropdown-item" href="{{ route('seach') }}">Product</a></li> --}}
                                        <li><a class="dropdown-item" href="#">Solution</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">laptop/destop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Brand</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Order</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>



        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Try scrolling the rest of the page to see this option in action.</p>
            </div>
        </div>

        <div class="row p-3">
            @yield('content')
        </div>
    </div>
    {{--  == --}}
    <div class="row">
        <div class="col-3">
            <img src="{{ asset('/images/logo.png') }}" alt="" class="img-fluid">

        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="list-group ">
                        <li class="list-group-item border-none">An item</li>
                        <li class="list-group-item border-none">A second item</li>
                        <li class="list-group-item border-none">A third item</li>
                        <li class="list-group-item border-none">A fourth item</li>
                        <li class="list-group-item border-none">And a fifth one</li>
                    </ul>
                </div>
                <div class="col-3">
                    <img src="{{ asset('/images/QR.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-3 pb-2 bg-primary text-light">
        <div class="col-10">
            <i class="fa-solid fa-phone"></i> 012 220 152
            <i class="fa-solid fa-phone"></i> 093 456 747
            <i class="fa-solid fa-phone"></i> 071 5777 378
            <i class="fa-solid fa-truck"></i> Delivery within 2 hours / Delivery 25 Provinces
        </div>
        <div class="col-2 ">
            <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-tiktok"></i></a>
            <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-telegram"></i></a>
            <a href="" class="text-light p-1 fs-5"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
