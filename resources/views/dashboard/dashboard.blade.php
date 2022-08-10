<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Template · Bootstrap v5.0</title>




    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Integrations
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

                <h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,004</td>
                                <td>text</td>
                                <td>random</td>
                                <td>layout</td>
                                <td>dashboard</td>
                            </tr>
                            <tr>
                                <td>1,005</td>
                                <td>dashboard</td>
                                <td>irrelevant</td>
                                <td>text</td>
                                <td>placeholder</td>
                            </tr>
                            <tr>
                                <td>1,006</td>
                                <td>dashboard</td>
                                <td>illustrative</td>
                                <td>rich</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,007</td>
                                <td>placeholder</td>
                                <td>tabular</td>
                                <td>information</td>
                                <td>irrelevant</td>
                            </tr>
                            <tr>
                                <td>1,008</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>1,009</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                            </tr>
                            <tr>
                                <td>1,010</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                            </tr>
                            <tr>
                                <td>1,011</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,012</td>
                                <td>text</td>
                                <td>placeholder</td>
                                <td>layout</td>
                                <td>dashboard</td>
                            </tr>
                            <tr>
                                <td>1,013</td>
                                <td>dashboard</td>
                                <td>irrelevant</td>
                                <td>text</td>
                                <td>visual</td>
                            </tr>
                            <tr>
                                <td>1,014</td>
                                <td>dashboard</td>
                                <td>illustrative</td>
                                <td>rich</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,015</td>
                                <td>random</td>
                                <td>tabular</td>
                                <td>information</td>
                                <td>text</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    <script src="js/dashboard.js"></script>
</body>

</html>






























<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kost Jogja</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="css/carosl.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('img/kost.png') }}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="dashboard">Pilihan Kos</a></li>
                    <li class="nav-item"><a class="nav-link" href="wilayah">Wilayah</a></li>
                    <li class="nav-item"><a class="nav-link" href="maps">Maps</a></li>
                    <li class="nav-item"><a class="nav-link" href="about">About</a></li>

                    <li class="nav-item"><a class="nav-link"class="nav-link" href="login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/header-bg.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/header-bg.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/header-bg.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Brows e gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="text-center">
            <h2 class="section-heading text-uppercase">Pilihan Kos</h2>
            <h3 class="section-subheading text-muted">hanya di kost jogja kost an bersih aman dan nyaman.</h3>

            <div class="row">
                <div class="col-lg-4">
                    <img src="img/kosan1.jpg" width="350" height="180" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                    <title>Placeholder</title>


                    <h2 class="fw-normal">Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is
                        the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/kosan1.jpg" width="350" height="180" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                    <title>Placeholder</title>

                    <h2 class="fw-normal">Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the
                        second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/kosan1.jpg" width="350" height="180" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                    <title>Placeholder</title>

                    <h2 class="fw-normal">Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->



            <div class="text-center">
                <h2 class="section-heading text-uppercase">WILAYAH JOGJA</h2>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>


                <div class="row">
                    <div class="container">
                        <iframe width="1200" height="500"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9169538584583!2d110.41092111429366!3d-7.79861699438007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57595d8f599b%3A0xe58796cbe7752fcb!2sJl.%20Maguwo%2C%20Banguntapan%2C%20Kec.%20Banguntapan%2C%20Kabupaten%20Bantul%2C%20Daerah%20Istimewa%20Yogyakarta%2055198!5e0!3m2!1sid!2sid!4v1659758774624!5m2!1sid!2sid"
                            width="1500" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>





                        <!-- About-->
                        <section class="page-section" id="about">
                            <div class="container">
                                <div class="text-center">
                                    <h2 class="section-heading text-uppercase">About</h2>
                                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.
                                    </h3>
                                </div>
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                src="{{ asset('tamplate/assets/img/about/1.jpg') }}" alt="..." />
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>2009-2011</h4>
                                                <h4 class="subheading">Our Humble Beginnings</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis
                                                    temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et
                                                    ea quo dolore laudantium consectetur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                src="{{ asset('tamplate/assets/img/about/2.jpg') }}" alt="..." />
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>March 2011</h4>
                                                <h4 class="subheading">An Agency is Born</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis
                                                    temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et
                                                    ea quo dolore laudantium consectetur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                src="{{ asset('tamplate/assets/img/about/3.jpg') }}" alt="..." />
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>December 2015</h4>
                                                <h4 class="subheading">Transition to Full Service</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis
                                                    temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et
                                                    ea quo dolore laudantium consectetur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                src="{{ asset('tamplate/assets/img/about/4.jpg') }}" alt="..." />
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>July 2020</h4>
                                                <h4 class="subheading">Phase Two Expansion</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis
                                                    temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et
                                                    ea quo dolore laudantium consectetur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeNNline-image">
                                            <h4>
                                                Be Part
                                                <br />
                                                Of Our
                                                <br />
                                                Story!
                                            </h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!-- Portfolio Grid-->
                        <section class="page-section bg-light" id="portfolio">

                            <div class="text-center">
                                <h2 class="section-heading text-uppercase">Portfolio</h2>
                                <h3 class="section-subheading text-muted">Pemilik Kosan Diwilayah Jogjakatra.</h3>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="team-member">
                                        <img src="img/orang1.jpg" width="250" height="250"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                        <title>Placeholder</title>
                                        <h4>pak herman salim</h4>
                                        <p class="text-muted">pemilik kosan</p>
                                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="team-member">
                                        <img src="gambar/orang2.jpg" width="200" height="200"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                        <title>Placeholder</title>
                                        <h4>pak yonon</h4>
                                        <p class="text-muted">pemilik kosan</p>
                                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="team-member">
                                        <img src="gambar/orang3.jpg" width="200" height="200"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                        <title>Placeholder</title>
                                        <h4>pak muhammad kalim</h4>
                                        <p class="text-muted">pemilik kosan</p>
                                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 mx-auto text-center">
                                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam
                                        corporis ea, alias ut unde.</p>
                                </div>
                            </div>
                    </div>
                    </section>

                    <section class="page-section bg-warning" id="contact">
                        <footer class="contact text-center">

                            <div class="row">
                                <!-- Footer Location-->
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <h4 class="text-uppercase mb-4">Lokasi</h4>
                                    <p class="lead mb-0">
                                        2215 John Daniel Drive
                                        <br />
                                        Clark, MO 65243
                                    </p>
                                </div>
                                <!-- Footer Social Icons-->
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <h4 class="text-uppercase mb-4">Hubungi Kami</h4>
                                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                                            class="fab fa-fw fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                                            class="fas fa-envelope-open"></i></a>
                                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                                            class="fab fa-fw fa-whatsapp"></i></a>
                                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                                            class="fab fa-fw fa-instagram"></i></a>
                                </div>
                                <!-- Footer About Text-->
                                <div class="col-lg-4">
                                    <h2 class="widgettitle">Kontak</h2>
                                    <p class="lead mb-0">
                                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                                        .
                                    </p>
                                </div>
                            </div>
                </div>
                </footer>
                </section>
                <!-- Copyright Section-->
                <div class="copyright py-4 bg-dark text-center text-white">
                    <div class="container"><small>Copyright &copy; asy-syifa 2022</small></div>
                </div>
                <!-- Portfolio Modals-->
                <!-- Portfolio item 1 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img
                                    src="{{ asset('tamplate/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.
                                            </p>
                                            <img class="img-fluid d-block mx-auto"
                                                src="{{ asset('tamplate/assets/img/portfolio/1.jpg') }}"
                                                alt="..." />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Client:</strong>
                                                    Threads
                                                </li>
                                                <li>
                                                    <strong>Category:</strong>
                                                    Illustration
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 2 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img
                                    src="{{ asset('tamplate/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.
                                            </p>
                                            <img class="img-fluid d-block mx-auto"
                                                src="{{ asset('tamplate/assets/img/portfolio/2.jpg') }}"
                                                alt="..." />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Client:</strong>
                                                    Explore
                                                </li>
                                                <li>
                                                    <strong>Category:</strong>
                                                    Graphic Design
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 3 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img
                                    src="{{ asset('tamplate/assets/img/close-icon.svg') }}" alt="Close modal" />
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.
                                            </p>
                                            <img class="img-fluid d-block mx-auto"
                                                src="{{ asset('tamplate/assets/img/portfolio/3.jpg') }}"
                                                alt="..." />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Client:</strong>
                                                    Finish
                                                </li>
                                                <li>
                                                    <strong>Category:</strong>
                                                    Identity
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 4 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img
                                    src="{{ asset('tamplate/assets/img/close-icon.svg') }}" alt="Close modal" />
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.
                                            </p>
                                            <img class="img-fluid d-block mx-auto"
                                                src="{{ asset('tamplate/assets/img/portfolio/4.jpg') }}"
                                                alt="..." />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Client:</strong>
                                                    Lines
                                                </li>
                                                <li>
                                                    <strong>Category:</strong>
                                                    Branding
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 5 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img
                                    src="{{ 'tamplate/assets/img/close-icon.svg' }}" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.
                                            </p>
                                            <img class="img-fluid d-block mx-auto"
                                                src="{{ asset('tamplate/assets/img/portfolio/5.jpg') }}"
                                                alt="..." />
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
                                                minus dignissimos deserunt repellat aperiam quasi sunt officia expedita
                                                beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                            </p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Client:</strong>
                                                    Southwest
                                                </li>
                                                <li>
                                                    <strong>Category:</strong>
                                                    Website Design
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 6 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img
                                    src="{{ asset('tamplate/assets/img/close-icon.svg') }}" alt="Close modal" />
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class="img-fluid d-block mx-auto"
                                            src="{{ asset('tamplate/assets/img/portfolio/6.jpg') }}"
                                            alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus
                                            dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                            cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Window
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Photography
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="{{ asset('js/scripts.js') }}"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
