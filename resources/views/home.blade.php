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

<body>

    @include('navbar')

    <header>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"
                    style="background-image: url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
                    <div class="carousel-caption">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image: url('https://images.unsplash.com/photo-1605296867304-46d5465a13f1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
                    <div class="carousel-caption">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
                    <div class="carousel-caption">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    @if (session('message'))
    <div class="alert alert-danger">{{ session('message') }}</div>
    @endif

    <section class="section services-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>What We Do</h2>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish,
                            modern websites</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Unique design</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Different Layout</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-comment"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Make it Simple</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Responsiveness</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-th"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Testing for Perfection</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Advanced Options</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Our Coaches</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 shadow">
                <div class="widget-container">
                    <div class="widget">
                        <div class="profile-card">
                            <div class="card-header">
                                <div class="header-avatar">
                                    <img src="https://www.pour-elles.com/wp-content/uploads/2019/02/Nathalie-Majcher-photo-de-profil-ronde.jpg"
                                        alt="andy">
                                </div>
                                <div class="header-name">
                                    Anderson Charlotte
                                </div>
                            </div>
                            <div class="card-body bg-warning">
                                <div class="body-description">
                                    A user profile is a group of settings that define how Outlook is set up for a
                                    particular user. For example, a profile may include access to a mailbox on Microsoft
                                    Exchange Server, and specify that the Outlook Address Book appear in the Address
                                    Book dialog box. A profile can contain any number of information services.
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="footer-social">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 shadow">
                <div class="widget-container">
                    <div class="widget">
                        <div class="profile-card">
                            <div class="card-header">
                                <div class="header-avatar">
                                    <img src="https://images.squarespace-cdn.com/content/v1/59ad4930bebafb5b8685d6cd/1606233666459-YKGN68OZHTVEKJ158GUI/Photo-profil-rond.png"
                                        alt="claudio">
                                </div>
                                <div class="header-name">
                                    Caludio Morrison
                                </div>
                            </div>
                            <div class="card-body bg-primary">
                                <div class="body-description">
                                    A user profile is a group of settings that define how Outlook is set up for a
                                    particular user. For example, a profile may include access to a mailbox on Microsoft
                                    Exchange Server, and specify that the Outlook Address Book appear in the Address
                                    Book dialog box. A profile can contain any number of information services.
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="footer-social">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 shadow">
                <div class="widget-container">
                    <div class="widget">
                        <div class="profile-card">
                            <div class="card-header">
                                <div class="header-avatar">
                                    <img src="https://guillaumecarrecoaching.fr/wp-content/uploads/2021/01/guil.png"
                                        alt="anna">
                                </div>
                                <div class="header-name">
                                    Markez Chan
                                </div>
                            </div>
                            <div class="card-body bg-info">
                                <div class="body-description">
                                    A user profile is a group of settings that define how Outlook is set up for a
                                    particular user.
                                    For example, a profile may include access to a mailbox on Microsoft Exchange Server,
                                    and specify that the Outlook Address Book appear in the Address Book dialog box. A
                                    profile can contain any number of information services.
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="footer-social">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
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