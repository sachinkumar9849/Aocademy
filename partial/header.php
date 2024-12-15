<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Academy Of Commerce Chartered Accountant </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="icon" href="assets/images/logo.png">
    <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
    <link rel="stylesheet" href="assets/vendors/owlcarousel/css/owl.theme.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');

        /* new slider start  */
        header .item {
            height: 90vh;
            position: relative;
        }

        header .item img {
            width: 100%;
            height: 90vh;
            object-fit: cover;
        }

        header .item .cover {
            padding: 75px 0;
            position: absolute;
            width: 100%;
            height: 90vh;
            top: 0;

            left: 0;
            background: rgb(0 0 0 / 31%);
            display: flex;
            align-items: center;
            /* background: linear-gradient(to right, #01010152, #00aeee00); */
        }

        header .item .cover .header-content {
            position: relative;
    padding: 56px;
    overflow: hidden;
    z-index: 9999;
    display: flex
;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;

        }

       

        header .item .cover .header-content h1 {
            font-size: 50px;
            font-weight: 600;
            margin: 14px 0 20px;
            word-spacing: 3px;
            color: #fff;
        }

        header .item .cover .header-content h4 {
            font-size: 24px;
            font-weight: 300;
            line-height: 36px;
            color: #fff;
        }

        header .owl-item.active h1 {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: fadeInDown;
            animation-delay: 0.3s;
        }

        header .owl-item.active h2 {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: fadeInDown;
            animation-delay: 0.3s;
        }

        header .owl-item.active h4 {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: fadeInUp;
            animation-delay: 0.3s;
        }

        header .owl-item.active .line {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: fadeInLeft;
            animation-delay: 0.3s;
        }

        header .owl-nav .owl-prev {
            position: absolute;
            left: 15px;
            top: 43%;
            opacity: 0;
            -webkit-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            background: rgba(0, 0, 0, 0.5) !important;
            width: 40px;
            cursor: pointer;
            height: 40px;
            position: absolute;
            display: block;
            z-index: 1000;

        }

        header .owl-nav .owl-prev span {
            font-size: 1.6875rem;
            color: #fff;
        }

        header .owl-nav .owl-prev:focus {
            outline: 0;
        }

        header .owl-nav .owl-prev:hover {
            background: #000 !important;
        }

        header .owl-nav .owl-next {
            position: absolute;
            right: 15px;
            top: 43%;
            opacity: 0;
            -webkit-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            background: rgba(0, 0, 0, 0.5) !important;
            width: 40px;
            cursor: pointer;
            height: 40px;
            position: absolute;
            display: block;
            z-index: 1000;

        }

        header .owl-nav .owl-next span {
            font-size: 1.6875rem;
            color: #fff;
        }

        header .owl-nav .owl-next:focus {
            outline: 0;
        }

        header .owl-nav .owl-next:hover {
            background: #000 !important;
        }

        header:hover .owl-prev {
            left: 0px;
            opacity: 1;
        }

        header:hover .owl-next {
            right: 0px;
            opacity: 1;
        }

        /* new slider emd  */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Manrope", sans-serif !important;
            margin-bottom: 0;
        }

        header .item .cover .header-content h2 {
            color: white;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 700;
        }

        @media (max-width: 1026px) {

            html,
            body {
                overflow-x: hidden;
            }

            header.site-header.header-primary {
                display: none !important;
            }

            header .item img {
                width: 100%;
                height: 50vh;
                object-fit: cover;
            }

            header .item .cover {

                height: 50vh;
            }

            header .item .cover .header-content h1 {
                font-size: 37px;
            }

            header .item {
                height: 50vh;
                position: relative;
            }

            header .item .cover .header-content .line {
                display: none;
            }
        }

        @media (max-width: 767px) {

            header .item .cover .header-content h1 {
                font-size: 24px;
                line-height: 35px;
            }

            header .item img,
            header .item .cover {
                width: 100%;
                height: 40vh;

            }

            header .item {
                width: 100%;
                height: 40vh;
            }

            header .item .cover .header-content {

                padding: 0;

            }

        }
    </style>
</head>

<body>
    <div>
        <header class="site-header header-primary">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="topHeaderBlock">
                                <div class="top-header-info">
                                    <div class="header-contact-info">
                                        <ul>


                                            <li>
                                                <i class="fas fa-envelope"></i> academyofcommercenepal@gmail.com
                                            </li>
                                            <li>
                                                <i class="fas fa-map"></i>AOC Blue Complex, Ramshah Path, Putalisadak,Kathmandu
                                            </li>
                                            <li>
                                                <i class="fas fa-phone"></i>+977-01-4240338 , 01-4232067
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                                <div class="socialIconsTop">

                                    <ul>
                                        <li>
                                            <i class="fab fa-facebook"></i>
                                        </li>
                                        <li><i class="fab fa-twitter"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>

                                    </ul>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header bottom-header header-top">
                <div class="container">

                    <div class="d-flex" style="
                     justify-content: space-between;
                  ">
                        <div class="main-navigation">
                            <div class="site-identity">

                                <a href="index.php">
                                    <div class="logo_header">
                                        <img src="assets/images/logo.png" alt="logo">
                                    </div>
                                </a>

                            </div>
                            <nav id="navigation" class="navigation">


                                <ul>



                                    <li>
                                        <a href="">Home</a>
                                    </li>
                                    <li>
                                        <a href="">About Us</a>
                                    </li>
                                    <li>
                                        <a href="">CA Courses</a>
                                    </li>
                                    <li>
                                        <a href="">Our Team</a>
                                    </li>

                                    <li>
                                        <a href="">News & Notice</a>
                                    </li>

                                    <li>
                                        <a href="">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="rightHeaderBtn d-flex">
                            <div class="headerRight" data-toggle="modal" data-target="#exampleModalFeedBack">
                                <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-">
                                            <img class="img-fluid" src="https://cdn-icons-png.flaticon.com/128/3039/3039564.png" alt="">
                                        </span></div>
                                    <div class="elementor-icon-box-content">

                                        <p style="
    font-weight: bold;
" class="elementor-icon-box-description mb-0 pb-0 text-white"> FeedBack</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <a class="elementor-button elementor-button-link elementor-size-sm" href=""> <span class="elementor-button-content-wrapper">
                           <span class="elementor-button-icon">


                           </span> <span class="elementor-button-text">FREE Consult <i class="fa fa-arrow-right"></i> </span> </a> -->



                        </div>
                    </div>
                </div>

                <div class="mobile-menu-container"></div>
        </header>



        <div class="logoMobile">
            <img src="https://sportszone.dexignzone.com/xhtml/images/logo.png" alt="">
        </div>
        <!-- MOBILE MENU START  -->
        <!-- 
        <div class="nav-wrapper">
            <a href="#" class="js-nav-toggle">
                <span></span>
            </a>

            <nav role="navigation">
                <div class="nav-toggle">
                    <span class="nav-back"></span>
                    <span class="nav-title">Menu</span>
                    <span class="nav-close"></span>
                </div>

                <ul>
                    <li class="has-dropdown">
                        <a href="#">About Us</a>
                        <ul>
                            <li>
                                <a href="who-we-are.php">Who We Are</a>
                            </li>
                            <li>
                                <a href="our-difference.php">Our Difference</a>
                            </li>
                            <li>
                                <a href="it-industry-secret.php">IT Industry Secret</a>
                            </li>
                            <li>
                                <a href="employment.php">Employment</a>
                            </li>
                            <li>
                                <a href="refer-a-colleague-or-friend.php">Refer a Colleague or Friend</a>
                            </li>
                        </ul>
                    </li>



                    <li class="has-dropdown">
                        <a href="#">IT Services</a>
                        <ul>
                            <li class="has-dropdown">
                                <a href="#">Managed IT Services</a>
                                <ul>
                                    <li>
                                        <a href="it-services-detail.php">Managed Services</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">IT Consulting</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">Comprehensive IT Support</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">Remote Monitoring &amp; Maintenance</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">IT Vendor Management</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">Co-Managed IT</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">24/7 Help Desk</a>

                                    </li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">IT Security Services</a>
                                <ul>
                                    <li>
                                        <a href="it-services-detail.php">Managed Services</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">IT Consulting</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">Comprehensive IT Support</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">Remote Monitoring &amp; Maintenance</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">IT Vendor Management</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">Co-Managed IT</a>

                                    </li>
                                    <li>
                                        <a href="it-services-detail.php">24/7 Help Desk</a>

                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="">
                        <a href="news-list.php">News</a>

                    </li>
                    <li class="">
                        <a href="">Blog</a>

                    </li>

                    <li class="has-dropdown">
                        <a href="#">Support</a>
                        <ul>
                            <li>
                                <a href="support.php">How to Request Support</a>
                            </li>
                            <li>
                                <a href="help-desk.php">Help Desk</a>
                            </li>
                            <li>
                                <a href="remote-support-tool.php">Remote Support Tool</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="">Help!</a>

                    </li>
                    <li class="">
                        <a href="contact.php">Contact</a>

                    </li>
                </ul>
            </nav>
        </div> -->
        <!-- MOBILE MENU END  -->


        <div class="modal fade" id="exampleModalFeedBack" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content p-0">
                    <div class="modal-header p-0">

                        <button style="
    position: absolute;
    top: 17px;
    right: 17px;
    z-index: 9999999;
    border-radius: 50px;
    width: 22px;
    height: 22px;
    background: red;
    opacity: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    border: 0 !IMPORTANT;
    box-shadow: unset;
" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="card shadow">
                            <div class="card-header text-center bg-primary text-white">
                                <h3>We Value Your Feedback</h3>
                            </div>
                            <div class="card-body ">
                                <form>
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="name" class="form-control" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" id="email" class="form-control" placeholder="Enter your email">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="message">Your Feedback</label>
                                        <textarea id="message" class="form-control" rows="4" placeholder="Write your feedback here"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Submit Feedback</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>