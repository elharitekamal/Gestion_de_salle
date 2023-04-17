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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"
        integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
        integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css"
        rel="stylesheet">
    <style>
    h3 {
        color: #A9A9A9;
    }
    
    </style>

</head>

<body style="background-color: #000000">
    @include('navbar')




    <div class="row choose">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="opt list-group-item list-group-item-action" id=" list-profile-list" role="tab"
                    aria-controls="profile">Meals</a>
                <a class="opt list-group-item list-group-item-action" id="list-profile-list" role="tab"
                    aria-controls="profile">Offers</a>
            </div>
        </div>
    </div>


    <section class=" content meals-dash">
        <section id="dash" class="pb-5 header text-center">
            <h3>Meals Dashboard</h3>
            <div class="container py-5 text-white">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="card border-0 shadow">
                            <div class="card-body p-5">

                                <!-- Responsive table -->
                                <div class="table-responsive">
                                    <table class="table m-0">

                                        <thead>
                                            <tr>
                                                <th scope="col">Meal</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        @foreach($meals as $meal)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{$meal->name}}
                                                </td>
                                                <td>
                                                    {{$meal->category}}
                                                </td>
                                                <td>
                                                    {{$meal->price}}
                                                </td>
                                                <td>
                                                    <!-- Call to action buttons -->
                                                    <ul class="list-inline m-0">
                                                        <li class="list-inline-item">

                                                            <a href="editmeal/{{$meal->id}}">
                                                                <p>Edit</p>
                                                            </a>

                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="deletemeal/{{$meal->id}}">
                                                                <p>Delete</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </td>
                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>

                                </div>
                            </div>
                            <div class="flex">
                                <div>
                                    <button type="button" class="button-add btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addmeal">
                                        Add Meal
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>


        <!--===================================== tstststststststststststststs ==========================================-->


 








        <!--===================================== add categories of meals ==========================================-->


        <section id="dash" class="pb-5 header text-center">
            <h3>Meals Categories Dashboard</h3>
            <div class="container py-5 text-white">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="card border-0 shadow">
                            <div class="card-body p-5">

                                <!-- Responsive table -->
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>

                                            <tr>
                                                <th scope="col">Name of category</th>

                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($catmeals as $catmeal)

                                            <tr>
                                                <td>
                                                    {{$catmeal->name}}
                                                </td>
                                                <td>
                                                    <!-- Call to action buttons -->
                                                    <ul class="list-inline m-0">
                                                        <li class="list-inline-item">
                                                            <a href="deletecatmeal/{{$catmeal->id}}">
                                                                <p>Delete</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </td>
                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>

                                </div>
                            </div>
                            <div class="flex">
                                <div>
                                    <button type="button" class="button-add btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addcatmeal">
                                        Add Category
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>





    </section>










    <!-- ========================================================== offers -->



    <section class="d-none content offers-dash">
        <section id="dash" class="pb-5 header text-center">
            <h3>Offers Dashboard</h3>
            <div class="container py-5 text-white">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="card border-0 shadow">
                            <div class="card-body p-5">

                                <!-- Responsive table -->
                                <div class="table-responsive">
                                    <table class="table m-0">

                                        <thead>
                                            <tr>
                                                <th scope="col">Offer</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        @foreach($offers as $offer)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{$offer->name}}
                                                </td>
                                                <td>
                                                    {{$offer->category}}
                                                </td>
                                                <td>
                                                    {{$offer->duration}}
                                                </td>
                                                <td>
                                                    {{$offer->price}}
                                                </td>
                                                <td>
                                                    <!-- Call to action buttons -->
                                                    <ul class="list-inline m-0">
                                                        <li class="list-inline-item">

                                                            <a href="editoffer/{{$offer->id}}">
                                                                <p>Edit</p>
                                                            </a>

                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="deleteoffer/{{$offer->id}}">
                                                                <p>Delete</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </td>
                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>

                                </div>
                            </div>
                            <div class="flex">
                                <div>
                                    <button type="button" class="button-add btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addoffer">
                                        Add Offers
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>



        <!--===================================== add categories of offers ==========================================-->

        <section id="dash" class="pb-5 header text-center">
            <h3>Offers Categories Dashboard</h3>
            <div class="container py-5 text-white">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="card border-0 shadow">
                            <div class="card-body p-5">

                                <!-- Responsive table -->
                                <div class="table-responsive">
                                    <table class="table m-0">


                                        <thead>
                                            <tr>
                                                <th scope="col">Name of category</th>

                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        @foreach($catoffers as $catoffer)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{$catoffer->name}}
                                                </td>
                                                <td>
                                                    <!-- Call to action buttons -->
                                                    <ul class="list-inline m-0">
                                                        <li class="list-inline-item">
                                                            <a href="deletecatoffer/{{$catoffer->id}}">
                                                                <p>Delete</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </td>
                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>

                                </div>
                            </div>
                            <div class="flex">
                                <div>
                                    <button type="button" class="button-add btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addcatoffer">
                                        Add Category
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>






    </section>











    @include('footer')

    @include('modal')



    <script src="assets/css/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>