<!DOCTYPE html>
<html lang="en">

<head>
    <meta char set="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css"
        rel="stylesheet">
    <style>
    .card {
        border: none;
        padding: 10px 50px;
    }

    .card::after {
        position: absolute;
        z-index: -1;
        opacity: 0;
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .card:hover {


        transform: scale(1.02, 1.02);
        -webkit-transform: scale(1.02, 1.02);
        backface-visibility: hidden;
        will-change: transform;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
    }

    .card:hover::after {
        opacity: 1;
    }

    .card:hover .btn-outline-primary {
        color: white;
        background: #007bff;
    }
    </style>

</head>

<body style="background-color: #000000">
    @include('navbar')

    <div class="offers container p-5">

        <!-- For demo purpose -->
        <div class="row py-5">
            <div class="col-lg-12 mx-auto">
                <div class="text-white p-5 shadow-sm rounded banner">
                    <h1 class="display-4">Our Best Offers</h1>
                    <p class="lead">By MYFITCLUB</p>
                    </p>
                </div>
            </div>
        </div>
        <!-- End -->

        
        <div class="row">
            @foreach($offers as $offer)
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <div class="text-center p-3">
                            <h5 class="card-title">{{$offer->category}}</h5>
                            <small>{{$offer->name}}</small>
                            <br><br>
                            <span class="h2">{{$offer->price}}</span>/{{$offer->duration}}
                            <br><br>
                        </div>
                        <p class="card-text">{{$offer->description}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg> Cras justo odio</li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg> Dapibus ac facilisis in</li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg> Vestibulum at eros</li>
                    </ul>
                    <div class="card-body text-center">
                        <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Select</button>
                    </div>
                </div>
            </div>

@endforeach
        </div>
                  

        


    </div>







    @include('footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>