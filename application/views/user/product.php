<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce s| Product Details</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url(); ?>assetsA/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetsA/css/core-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetsA/style.css">

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
                <a href="index.php"><img src="<?php echo base_url(); ?>assetsA/img/core-img/logo.png" alt=""></a>
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
                <a href="index.php"><img src="<?php echo base_url(); ?>assetsA/img/core-img/coba.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="<?php echo base_url('U_welcome') ?>">Home</a></li>
                    <li class="active"><a href="<?php echo base_url('U_shop'); ?>">Shop</a></li>
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
                <a href="<?php echo base_url('cart');?>" class="cart-nav"><img src="<?php echo base_url(); ?>assetsA/img/core-img/cart.png" alt=""> Cart <span>(<?php
                  $this->db->from('cart');
                  $this->db->where('_c', '1');
                  $this->db->where('nama_pbl',$this->session->userdata("email"));
                  $query = $this->db->get();
                  echo $query->num_rows();
                ?>)</span></a>
                <a href="#" class="search-nav"><img src="<?php echo base_url(); ?>assetsA/img/core-img/search.png" alt=""> Search</a>
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

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

              <?php foreach ($get_single_product as $data): ?>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="img/product-img/pro-big-1.jpg">
                                            <img class="d-block w-100" src="<?php echo base_url('upload/'.$data->gambar)?>" style="width: 723px; height: 550px" alt="First slide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">Rp. <?php echo number_format($data->harga,0,',','.'); ?></p>
                                    <h6><?php echo $data->nama_produk; ?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review">
                                        <a href="#">Write A Review</a>
                                    </div>
                                </div>
                                <!-- Avaiable -->
                                <?php
                                if ($data->qty > 0) {
                                    echo '<p><i class="text-success fa fa-circle"></i> In Stock</p>';
                                } else{
                                  echo '<p><i class="text-danger fa fa-circle"></i> Out Stock</p>';
                                }

                                ?>
                            </div>

                            <div class="short_overview my-5">
                                <p><?php echo $data->deskripsi; ?></p>
                            </div>

                            <!-- Add to Cart Form -->

                            <form action="<?php echo base_url('cart/save_cart');?>" method="post" class="cart clearfix">
                                <input type="hidden" class="buyfield" name="id_produk" value="<?php echo $data->id_produk?>"/>
                                <input type="hidden" class="buyfield" name="nama" value="<?php echo $data->nama_produk;?>"/>
                                <input type="hidden" class="buyfield" name="harga" value="<?php echo $data->harga;?>"/>
                                <?php
                                if($data->qty > 0){
                                echo '<input type="submit" class="btn amado-btn"  name="submit" value="Add to Cart"/>';
                              } else {
                                echo '<input type="submit" class="btn amado-btn"  name="submit" value="Add to Cart" disabled/>';
                              }
                                ?>
                            </form>

                        </div>
                    </div>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
        <!-- Product Details Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix" style="width: 100%">
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
                                            <a class="nav-link" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.php">Shop</a>
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
