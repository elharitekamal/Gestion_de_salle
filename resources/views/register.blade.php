<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body
    style="background-image: url('https://www.i-fitness.be/system/location_images/images/000/000/400/original/BBB_0511.jpg?1645026072');">
    >





    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class=" mt-md-4">
                                <form action="signup" method="post" class="login">
                                    @csrf
                                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="fullname" id="typeEmailX"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Full Name</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="number" name="age" id="typeEmailX"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Age</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" id="typeEmailX"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="number" name="weight" id="typeEmailX"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Weight</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="number" name="height" id="typeEmailX"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Height</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" id="typePasswordX"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>


                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>