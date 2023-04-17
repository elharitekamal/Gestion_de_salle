<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="home">FITCLUB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                @if((Auth::user()->role == '0'))
                <li class="nav-item">
                    <a class="nav-link" href="dash">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="abonnements">Abonnements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">Logout</a>
                </li>
                @else
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="offers">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="meals">Meals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="card"><i class="bi bi-cart-plus-fill"></i>[{{$count}}]</a>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="logout">Logout</a>
                </li>
                </li>
                @else

                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                @endauth


                @endif
            </ul>
        </div>
    </div>
</nav>