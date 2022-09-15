<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Banh Code</title>
    <link rel="icon" type="image/x-icon" href="assets/img/Banh Code.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="page.php">Banh Code</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Class</a></li>
                    <li class="nav-item"><a class="nav-link" href="#responses">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Banh Code;/;</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">The best error message is the one that never shows up.</h2>
                    <a class="btn btn-primary" href="#about">Get Started</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Git Hub Banh Code</h2>
                    <p class="text-white-50">
                        we have a Git Hub which contains PHP programs and we continue to publish to
                        <a href="https://github.com/Bayu-Sumantri">Git Hub.</a> so that we provide good programs or code for Banh Code users to use.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="assets/img/Banh_Code-(no-background).png" alt="..." />
        </div>
    </section>
    <!-- Projects Class-->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #010101;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
            background-color: #010101;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /*coloum*/
        .card1:hover {
            background-color: lightblue;
            box-shadow: 0px 12px 12px 5px #464646;
            transition: 250ms ease;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card1 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            border-radius: 7px;
            background-color: lightblue;
        }
    </style>
    <div class="row" id="projects">
        <div class="column" style="margin-left: 80px;">
            <div class="card1">
                <img src="assets/img/javascript.png" alt=".." style="width: 300px;">
                <h3>Javascript</h3>
                <p>the users will be taught all the latest javascript technology and also the user will get an award from Banh Code if the user gets a good rating</p>
                <a class="btn btn-primary" href="transaction_js.php">Select</a>
            </div>
        </div>

        <div class="column" style="margin-left: 500px;">
            <div class="card1">
                <img src="assets/img/logo-python.png" alt="..." style="width: 300px;">
                <h3>Python</h3>
                <p>we will give all knowledge about python to users who will learn in this class and also we will give prizes to users who get good ratings from our team</p>
                <a class="btn btn-primary" href="transaction_js.php">Select</a>
            </div>
        </div>

        <div class="column" style="margin-left: 500px;">
            <div class="card1">
                <img src="assets/img/php.png" alt=".." style="width: 300px;">
                <h3 style="margin: 10px;">PHP</h3>
                <p>Here we will learn about variables and looping in php and also we will learn a little about databases using mysql, precisely learn CRUD</p>
                <a class="btn btn-primary" href="transaction_js.php">Select</a>
            </div>
        </div>

        <!--end-->


        <!-- Signup-->
        <section class="signup-section" id="responses">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">give us feedback for improvement!</h2>
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN" action="proses_contact.php" method="post">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="row margin" id="form_respon"><input class="form-control" id="emailAddress" name="gmail" type="email" placeholder="Enter email address..." aria-label="Enter email address..." required></div>
                                <div class="row margin" id="form_respon"><input class="form-control" id="emailAddress" name="username" type="text" placeholder="Enter Your username..." aria-label="Enter Your username..." /></div>
                                <div class="row margin" id="form_respon"><input class="form-control" id="emailAddress" name="no_phone" type="number" placeholder="Enter Number Phone..." aria-label="Enter Number Phone..." /></div>
                                <div class="row margin" id="form_respon"><input class="form-control" id="emailAddress" name="tanggapan" type="text" placeholder="Enter Your response..." aria-label="Enter Your response..." /></div>
                                <div class="row-auto"></div>
                                <button class="btn btn-primary" style="width: 96%; margin-left: 15px;" id="submitButton" type="submit">Notify Me!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">JL.Icikiwir no 66 <br> Slamet Kopling</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="www.gmail.com">Banh Code.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+626666666666</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://twitter.com/Banh_Code"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://github.com/Bayu-Sumantri"><i class="fab fa-github"></i></a>
                </div>
            </div>
            </form>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50">
            <div class="container px-4 px-lg-5">Copyright &copy; Banh Code 2022</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>