<!DOCTYPE html>
<html lang="en
">

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

</head>

<body style="background-color: #000000">
    @include('navbar')









    <div class="meals container-fluid">
        <div class="px-lg-5">

            <!-- For demo purpose -->
            <div class="row py-5">
                <div class="col-lg-12 mx-auto">
                    <div class="text-white p-5 shadow-sm rounded banner">
                        <h1 class="display-4">Our Delicious Meals</h1>
                        <p class="lead">By MYFITCLUB</p>
                        </p>
                    </div>
                </div>
            </div>
            <!-- End -->



            @if (session('message'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">
                    {{ session('message') }}</h4>

            </div>
            @endif




            <div class="row">
                <!-- Gallery item -->

                @foreach($meals as $meal)
                <div class="col-xl-3 shadow col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="{{asset('storage/'.$meal->image)}}" alt=""
                            class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">{{$meal->name}}</a></h5>
                            <p class="small text-muted mb-0">{{$meal->description}}
                            </p>
                            <p class="small text-muted mb-0">{{$meal->category}}
                            </p>
                            <h6 style="text-align: center;">{{$meal->price}}$</h6>
                            <form action="addcard/{{$meal->id}}" method="POST">
                                @csrf
                                <input type="number" value="1" min="1" class="form-control" style="width=100px;"
                                    name="quantity">
                                <br>
                                <div class="badge badge-danger px-3 rounded-pill font-weight-normal text-dark w-100">
                                    <button type="submit" class="btn bg-success text-light mx-auto">Add</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                @endforeach









            </div>

        </div>
    </div>









    @include('footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>