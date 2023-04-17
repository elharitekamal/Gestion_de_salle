<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css"
        rel="stylesheet">


</head>
@include('navbar')

<body style="background-color: #000000">



    <div class="container mt-5 mb-5">
        <div class="cartt d-flex justify-content-center row">
            <div class="col-md-8">
                @if (session('message'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">
                        {{
         
    session('message') }}</h4>

                </div>
                @endif



                <div class="p-2">
                    <h4 class="text-light">Shopping cart</h4>
                </div>
                @foreach($prods as $prod)

                <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                    <div class="d-flex flex-column align-items-center product-details"><span
                            class="font-weight-bold">{{$prod->product_name}}</span>
                    </div>
                    <div class="d-flex flex-row align-items-center qty">
                        <h5 class="text-grey mt-1 mr-1 ml-1">{{$prod->quantity}} </h5>
                    </div>
                    <div>
                        <h5 class="text-grey">{{$prod->price}}$</h5>
                    </div>
                    <div class="d-flex align-items-center"><a href="deletecard/{{$prod->id}}"><i
                                class="fa fa-trash mb-1 text-danger"></i></div></a>
                </div>
                @endforeach

                <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                    <form action="session/{{$total}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button class="btn btn-success btn-block btn-lg ml-2 pay-button" type="submit">Pay Now
                            {{$total}}$</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>