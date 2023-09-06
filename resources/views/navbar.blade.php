<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="icon" href="img/logo3.png" type = "image/x-icon"/>
  <title >i-Learn</title>
  <div class="container">
  <div class="row" style="background: #e8e8e8;margin: auto;" >
            <div class="col-md-4 col-sm-12 col-xs-12" style="text-align:center; color: grey">
            </div>
            

            <div class="col-md-4 col-sm-6 col-xs-6" style="color: grey">
            <a href="{{ route('home') }}"><img src="img/logo2.png"  style="width:100%; "></a>

            </div>
            <div class="col-md-4 col-sm-6 col-xs-6" style="text-align:center; color: grey">
            </div>

    </div>
    
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout') }}">Logout</a>
                    </li>
                
            </ul>
  
        </div>
    </div>
</div>
</nav>


@endguest