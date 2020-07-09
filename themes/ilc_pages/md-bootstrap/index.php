<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

        html,
        body {
            height: 100%;
            background-color: #f4f7f6;
        }
        /*Logo*/
        .custom-logo{
            border-radius: 50%; 
            height: 100px; 
            width: 100px; 
            position: absolute; 
        }
        .custom-logo2 {
            display:none;
            visibility: hidden; 
        }
        /* Navigation*/
        .navbar {
            background-color: #004421;
            /*0B6E4F*/
        }

        .top-nav-collapse {
            /*#0B6E4F;*/
            background-color: #004421;
        }

        footer.page-footer {
            background-color: #262626;
        }
/*#8e1537*/
        @media only screen and (max-width: 1000px) {
            .navbar {
                background-color: #004421;
            }
            .custom-logo {
                display:none;
                visibility: hidden; 
            }
            .custom-logo2 {
                border-radius: 50%;
                height: 100px; 
                width: 100px; 
                position: absolute; 
            }
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/

        .carousel {
            height: 50%;
        }
        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }
        .carousel-item,
/*        .active {
            height: 100%;
        }*/
        .carousel-inner {
            height: 100%;
        }
        /*Caption*/

        .flex-center {
            color: #fff;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
        .card{
            border: 1px solid #efefef !important;
        }
        /*Footer*/
        h5.title, li > a {
            /*color: #fcac1d !important;*/
            color: #f0f0f0 !important;
        }
        h5.title {
            border-bottom: 2px solid #FDAD1E;
        }
        /*Custom Button*/
        .btn-info, .modal-header {
            background-color: #0B6E4F !important;
        }
        .btn-info:hover, .btn-info:focus {
            background-color: #8e1537 !important;
        }
        h1.h1-responsive{
            padding-top: 15px;
        }
    </style>

</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Pages.UPD</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
                <img src="img/pages-logo2.png" class="custom-logo2 z-depth-2"/>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <img src="img/pages-logo2.png" class="custom-logo z-depth-2"/>
                    <!-- <li class="nav-item active"> -->
                        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                    <!-- </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown 
                            </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                </ul>
                <form class="form-inline">
                    <a class="btn btn-info" data-toggle="modal" data-target="#basicExample">Login</a>
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

<!--Modal: Login Form-->
<div class="modal fade" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header white-text">
                <h4 class="title"><i class="fa fa-user"></i> Log in</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
                <div class="md-form form-sm">
                    <i class="fa fa-user prefix"></i>
                    <input type="text" id="username" class="form-control">
                    <label for="username">Your username</label>
                </div>
                <div class="md-form form-sm">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="password" class="form-control">
                    <label for="password">Your password</label>
                </div>
                <div class="text-center mt-2">
                    <button class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <div class="options text-center text-md-right mt-1">
                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login Form-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('img/ilc-building.jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Launch Website Instantly</h1>
                        </li>
                        <li>
                            <p>Best places you should see, traditional dishes that you have to try</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-info btn-lg" rel="nofollow">Create Website</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">10 Reasons you should spend winter holiday in mountains </h1>
                        </li>
                        <li>
                            <p>Best atractions and winter sports!</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-info btn-lg" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(97).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Weekend in the nature - the best way to relax</h1>
                        </li>
                        <li>
                            <p>8 Reasons why you need to spend more time in nature</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Third slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container">
            <h1 class="h1-responsive center text-center">
              <small class="text-muted">Introduction</small>
            </h1>
        <div class="row my-5">
            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn hoverable z-depth-0" data-wow-delay="0.2s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(120).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Launch Website Instantly</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- <a href="#" class="btn btn-info">Read more</a> -->
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn z-depth-0" data-wow-delay="0.4s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">No programming knowledge required</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- <a href="#" class="btn btn-info">Read more</a> -->
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-lg-4 mb-4">
                <!--Card-->
                <div class="card wow fadeIn z-depth-0" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(122).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Share your page in social media</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- <a href="#" class="btn btn-info">Read more</a> -->
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
        <hr>
        <h1 class="h1-responsive center text-center">
              <small class="text-muted">Our Articles</small>
            </h1>
        <div class="row my-5">

            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(120).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Mesmerizing Landscapes</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.4s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Trevelers Toolbox</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-lg-4 mb-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(122).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Mountain Rivers</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
        <hr>
        <h1 class="h1-responsive center text-center">
                <small class="text-muted">Recent Updates</small>
              </h1>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                        <thead>
                          <tr>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr align="center">
                            <th scope="row">6D 16H 32m and 7s ago Biblio:</th>
                            <td>The ASEAN Guide: A Journalist’s Handbook to Regional Integration in Southeast Asia</td>
                          </tr>
                          <tr align="center">
                             <th scope="row">6D 16H 32m and 7s ago Biblio:</th>
                            <td>The ASEAN Guide: A Journalist’s Handbook to Regional Integration in Southeast Asia</td>
                          </tr>
                          <tr align="center">
                            <th scope="row">6D 16H 32m and 7s ago Biblio:</th>
                            <td>The ASEAN Guide: A Journalist’s Handbook to Regional Integration in Southeast Asia</td>
                          </tr>
                          <tr align="center">
                            <th scope="row">6D 16H 32m and 7s ago Biblio:</th>
                            <td>The ASEAN Guide: A Journalist’s Handbook to Regional Integration in Southeast Asia</td>
                          </tr>
                          <tr align="center">
                            <th scope="row">6D 16H 32m and 7s ago Biblio:</th>
                            <td>The ASEAN Guide: A Journalist’s Handbook to Regional Integration in Southeast Asia</td>
                          </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/.Content-->


    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Services</h5>
                    <ul>
                        <li><a href="#!">Training</a></li>
                        <li><a href="#!">Streaming / Video Coverage</a></li>
                        <li><a href="#!">Podcasting / Vodcasting</a></li>
                        <li><a href="#!">Education Tech Consulting</a></li>
                        <li><a href="#!">Internship / On-the-Job Training</a></li>
                    </ul>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Websites</h5>
                    <ul>
                        <li><a href="#!">UVLe</a></li>
                        <li><a href="#!">UPCurrents</a></li>
                        <li><a href="#!">Conference.UPD</a></li>
                        <li><a href="#!">iskWiki!</a></li>
                        <li><a href="#!">Obletorr</a></li>
                        <li><a href="#!">UP-FM</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Support</h5>
                    <ul>
                        <li><a href="#!">Helpdesk</a></li>
                        <li><a href="#!">Tech Support Matters</a></li>
                        <li><a href="#!">DILC Matters</a></li>
                    </ul>
                    <h5 class="title font-bold mt-3 mb-4">Download</h5>
                    <ul>
                        <li><a href="#!">DILC Brochure</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">About</h5>
                    <ul>
                        <li><a href="#!">Pages</a></li>
                        <li><a href="#!">Interactive Learning Center</a></li>
                        <li><a href="#!">DILC Media Lab</a></li>
                        <li><a href="#!">DILC Brochure</a></li>
                    </ul>
                    <h5 class="title font-bold mt-3 mb-4">Research</h5>
                    <ul>
                        <li><a href="#!">DILC Media Lab</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- <hr> -->

        <!--Call to action -->
        <div class="call-to-action"  style="background-color: #004421 !important;">
                <h5>Interactive Learning Center Diliman</h5>
                <p>DILC Bldg., corner Apacible St. and Magsaysay Ave., University of the Philippines, Diliman, Quezon City 1101</p>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2014 - <?php echo date('Y'); ?> Copyright <a href="http://www.ilc.upd.edu.ph">Interactive Learning Center Diliman</a>
            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>
