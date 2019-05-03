<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="assetsA/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="assetsA/css/core-style.css">
    <link rel="stylesheet" href="assetsA/style.css">
    <link rel="stylesheet" href="assetsA/bootstrap.min.css">

</head>

<body>

    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="<?php echo base_url('search')?>" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="assetsA/img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="assetsA/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="assetsA/img/core-img/coba.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="<?php base_url('U_welcome') ?>">Home</a></li>
                    <li><a href="<?php echo base_url('U_shop');?>">Shop</a></li>
                    <li><a href="<?php echo base_url('login/logout');?>">Logout</a></li></br>
                    <li>Welcome <?php echo $this->session->userdata("email"); ?></li>
                </ul>
            </nav>
          </br>
          </br>
          </br>
          </br>
          </br>
          </br>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="<?php echo base_url('cart');?>" class="cart-nav"><img src="assetsA/img/core-img/cart.png" alt=""> Cart <span>
                  (<?php
                    $this->db->from('cart');
                    $this->db->where('_c', '1');
                    $this->db->where('nama_pbl',$this->session->userdata("email"));
                    $query = $this->db->get();
                    echo $query->num_rows();
                  ?>)</span></a>
                <a href="#" class="search-nav"><img src="assetsA/img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                <!-- <div class="single-products-catagory clearfix">
                    <a href="<?php echo base_url('Shop'); ?>">
                        <img src="assetsA/img/bg-img/1.jpg" alt="">
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Mulai dari Rp.180.000</p>
                            <h4>Kursi</h4>
                        </div>
                    </a>
                </div> -->

                <!-- Single Catagory -->
                <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="assetsA/img/bg-img/2.jpg" alt="">
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Mulai dari Rp.100.000</p>
                            <h4>Pot minimalis</h4>
                        </div>
                    </a>
                </div> -->

                <!-- Single Catagory -->
                <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="assetsA/img/bg-img/meja a.jpg" alt="">
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Mulai dari Rp.280.000</p>
                            <h4>Meja</h4>
                        </div>
                    </a>
                </div> -->

                <!-- Single Catagory -->
                <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="assetsA/img/bg-img/lampu.jpg" alt="">
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>Night Stand</h4>
                        </div>
                    </a>
                </div> -->

                <!-- Single Catagory -->
                <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="assetsA/img/bg-img/sofa.jpg" alt="">
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $18</p>
                            <h4>Plant Pot</h4>
                        </div>
                    </a>
                </div> -->

                <!-- Single Catagory -->
                <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="assetsA/img/bg-img/lemari.jpg" alt="">
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $320</p>
                            <h4>Small Table</h4>
                        </div>
                    </a>
                </div> -->

                <!-- Single Catagory -->
                <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="assetsA/img/bg-img/kursig.jpg" alt="">
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Metallic Chair</h4>
                        </div>
                    </a>
                </div> -->

                <!-- Single Catagory -->
                <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="assetsA/img/bg-img/jam.jpg" alt="">
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Modern Rocking Chair</h4>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->



    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="assetsA/img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="<?php echo base_url('U_welcome'); ?>">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('U_shop'); ?>">Shop</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="assetsA/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assetsA/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assetsA/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="assetsA/js/plugins.js"></script>
    <!-- Active js -->
    <script src="assetsA/js/active.js"></script>

</body>

</html>
