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
    <style>
    .orders {
        margin-top: 4%;
        width: 100%;
    }
    </style>

</head>

<body style="background-color: #000000">
    @include('navbar')


    <div class="container my-5">
        <div class="row">
            <div class="orders col-md-offset-1 col-md-10">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-sm-3 col-xs-12">
                                <h4 class="title">Orders</h4>
                            </div>
                            <div class="col-sm-9 col-xs-12 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>Phone</th>
                                    <th>Adress</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Ordered At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>Vincent Williamson</td>
                                    <td>31</td>
                                    <td>iOS Developer</td>
                                    <td>Sinaai-Waas</td>
                                    <td>Sinaai-Waas</td>
                                    <td>Sinaai-Waas</td>
                                    <td>
                                        <ul class="action-list">
                                            <li><a href="#" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
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