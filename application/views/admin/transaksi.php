<!DOCTYPE html>
<html lang="en">
<head>
  <title>Electronic Store</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="OneTech shop project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/') ?>styles/bootstrap4/bootstrap.min.css">
  <link href="<?php echo base_url('asset/') ?>plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/') ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/') ?>plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/') ?>plugins/slick-1.8.0/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/') ?>styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/') ?>styles/responsive.css">

</head>

<body>

  <div class="super_container">

    <!-- Header -->

    <header class="header">

      <!-- Top Bar -->

      <div class="top_bar">
        <div class="container">
          <div class="row">
            <div class="col d-flex flex-row">
              <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo base_url('asset/') ?>images/phone.png" alt=""></div>+ 085766712431</div>
              <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo base_url('asset/') ?>images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">rahmadriyadi164@gmail.com</a></div>
              <div class="top_bar_content ml-auto">
                <div class="top_bar_menu">

                </div>
                <div class="top_bar_user">
                  <div class="user_icon"><img src="<?php echo base_url('asset/') ?>images/user.svg" alt=""></div>
                  <div><a href="#">Register</a></div>
                  <div><a href="#">Sign in</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>

      <!-- Header Main -->

      <div class="header_main shadow-lg">
        <div class="container">
          <div class="row">

            <!-- Logo -->
            <div class="col-lg-2 col-sm-3 col-3 order-1">
              <div class="logo_container">
                <div class="logo"><a href="#">Electronic Store</a></div>
              </div>
            </div>

            <!-- Search -->
            <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
              <div class="header_search">
                <div class="header_search_content">
                  <div class="header_search_form_container">
                    <form action="#" class="header_search_form clearfix">
                      <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                      <div class="custom_dropdown">
                        <div class="custom_dropdown_list">
                          <span class="custom_dropdown_placeholder clc">All Categories</span>
                          <i class="fas fa-chevron-down"></i>
                          <ul class="custom_list clc">
                            <li><a class="clc" href="#">All Categories</a></li>
                            <li><a class="clc" href="#">Computers</a></li>
                            <li><a class="clc" href="#">Laptops</a></li>
                            <li><a class="clc" href="#">Cameras</a></li>
                            <li><a class="clc" href="#">Hardware</a></li>
                            <li><a class="clc" href="#">Smartphones</a></li>
                          </ul>
                        </div>
                      </div>
                      <button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php echo base_url('asset/') ?>images/search.png" alt=""></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Wishlist -->
            <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
              <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                  <div class="wishlist_icon"><img src="<?php echo base_url('asset/') ?>images/heart.png" alt=""></div>
                  <div class="wishlist_content">
                    <div class="wishlist_text"><a href="#">Wishlist</a></div>
                    <div class="wishlist_count">115</div>
                  </div>
                </div>

                <!-- Cart -->
                <div class="cart">
                  <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                    <div class="cart_icon">
                      <img src="<?php echo base_url('asset/') ?>images/cart.png" alt="">
                      <div class="cart_count"><span>10</span></div>
                    </div>
                    <div class="cart_content">
                      <div class="cart_text"><a href="#">Cart</a></div>
                      <div class="cart_price">$85</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Navigation -->

      <nav class="main_nav fixed-bottom shadow-lg">
        <div class="container">
          <div class="row">
            <div class="col">

              <div class="main_nav_content d-flex flex-row">

                <!-- Categories Menu -->

                <div class="cat_menu_container">
                  <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                    <div class="cat_burger"><span></span><span></span><span></span></div>
                    <div class="cat_menu_text">Electronic Store</div>
                  </div>

                 <!--  <ul class="cat_menu">
                    <li><a href="#">Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
                    <li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
                    <li class="hassubs">
                      <a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
                      <ul>
                        <li class="hassubs">
                          <a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                          <ul>
                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                          </ul>
                        </li>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                      </ul>
                    </li>
                    <li><a href="#">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
                  </ul> -->
                </div>

                <!-- Main Nav Menu -->

                <div class="main_nav_menu ml-auto">
                  <ul class="standard_dropdown main_nav_dropdown">
                    <li><a href="<?php echo site_url("/") ?>">Home<i class="fas fa-chevron-down"></i></a></li>



                    <li><a href="#">Cara Beli<i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="contact.html">Cara Bayar<i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="contact.html">Bantuan<i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="contact.html">Konfirmasi Pembayaran<i class="fas fa-chevron-down"></i></a></li>
                  </ul>
                </div>

                <!-- Menu Trigger -->

                <div class="menu_trigger_container ml-auto">
                  <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                    <div class="menu_burger">
                      <div class="menu_trigger_text">Bantuan</div>
                      <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </nav>

      <!-- Menu -->

      <div class="page_menu">
        <div class="container">
          <div class="row">
            <div class="col">

              <div class="page_menu_content">

                <div class="page_menu_search">
                  <form action="#">
                    <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                  </form>
                </div>
                <ul class="page_menu_nav">
                  <li class="page_menu_item has-children">
                    <a href="#">Language<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection">
                      <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                  </li>
                  <li class="page_menu_item has-children">
                    <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection">
                      <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                  </li>
                  <li class="page_menu_item">
                    <a href="#">Home<i class="fa fa-angle-down"></i></a>
                  </li>
                  <li class="page_menu_item has-children">
                    <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection">
                      <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                      <li class="page_menu_item has-children">
                        <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                        <ul class="page_menu_selection">
                          <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                          <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                          <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                          <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                        </ul>
                      </li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                  </li>
                  <li class="page_menu_item has-children">
                    <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection">
                      <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                  </li>
                  <li class="page_menu_item has-children">
                    <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection">
                      <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                  </li>
                  <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                  <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                </ul>

                <div class="menu_contact">
                  <div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo base_url('asset/') ?>images/phone_white.png" alt=""></div>+085766712431</div>
                  <div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo base_url('asset/') ?>images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">rahmadriyadi164@gmail.com</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>

    <!-- Banner -->

    <!-- <div class="banner" style="margin-top: -105px;">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('asset/imgku/2.jpg') ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('asset/imgku/2.jpg') ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('asset/imgku/2.jpg') ?>" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev bg-white" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next bg-primary" href="#carouselExampleIndicators" role="button" data-slide="next" style="padding: 10px;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div> -->
      <!-- <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
      <div class="container fill_height">
        <div class="row fill_height">
          <div class="banner_product_image"><img src="<?php echo base_url('asset/') ?>images/banner_product.png" alt=""></div>
          <div class="col-lg-5 offset-lg-4 fill_height">
            <div class="banner_content">
              <h1 class="banner_text">new era of smartphones</h1>
              <div class="banner_price"><span>$530</span>$460</div>
              <div class="banner_product_name">Apple Iphone 6s</div>
              <div class="button banner_button"><a href="#">Shop Now</a></div>
            </div>
          </div>

        </div>
      </div> -->
    </div>

    <!-- Characteristics -->
    <div class="row justify-content-center">
      <div class="col-md-10 px-2 py-3">
        <div class="card mb-3 shadow-lg" style="border:none;">
          <div class="row no-gutters">
            <div class="col-md-4 px-5 py-5"><br>
              <img src="<?php echo base_url('asset/berkas_prodak/').$rt->file ?>" alt="..." class="card-img">
            </div>
            <div class="col-md-6 px-3 py-2">
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><br><h1 class="card-title"><?php echo $rt->nm_barang ?></h1></li>
                  <li class="list-group-item">Harga Rp.<br><h3 class="card-title"> <?php echo $rt->harga ?></h3></li>
                  <li class="list-group-item"><h4 class="card-title">Stok : <?php echo $rt->stok ?></h4></li>
                  <li class="list-group-item font-weight-bold">Info Prodak<br><h6 class="card-title"><?php echo $rt->des ?></h6>
                    Kondisi<br><h5 class="card-title">Baru</h5>
                  </li>
                  
                </ul><br><br>
                <a href="https://api.whatsapp.com/send?phone=6288706886287&text=Saya%20tertarik%20untuk%20membeli%20<?php echo $rt->nm_barang ?>%20dengan%20harga%20<?php echo $rt->harga ?>%20" class="btn btn-primary mx-3 my-2 blank" target="_blank">Buat Pesanan Sekarang</a>
                <a href="https://api.whatsapp.com/send?phone=6288706886287&text=Saya%20ingin%20melakukan%20penawaran%20%20untuk%20prodak%20<?php echo $rt->nm_barang ?>%20dengan%20harga%20<?php echo $rt->harga ?>%20" class="btn btn-success mx-3 my-2 blank" target="_blank">Ajukan Penawaran</a>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Deals of the week -->



    <!-- Popular Categories -->

    

    <!-- Banner -->



    <!-- Hot New Arrivals -->

   <div class="new_arrivals">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="tabbed_container">
              <div class="tabs clearfix tabs-right">
                <div class="new_arrivals_title">Prodak Terlaris</div>
                <ul class="clearfix">
                  <li class="active">Rekomendasi</li>
                
                </ul>
                <div class="tabs_line"><span></span></div>
              </div>
              <div class="row">
                <div class="col-lg-9" style="z-index:1;">
                    <?php 
                    $this->db->where('stok <',40);
                    $result=$this->db->get("produk")->result();                  ?>
                  <!-- Product Panel -->
                  <div class="product_panel panel active">
                    <div class="arrivals_slider slider">
                      <?php foreach ($result as $prodak): ?>
                        <div class="arrivals_slider_item">
                        <div class="border_active"></div>
                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                          <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('asset/berkas_prodak/').$prodak->file ?>" alt=""></div>
                          <div class="product_content">
                            <div class="product_price">RP. <?php echo $prodak->harga ?></div>
                            <div class="product_name"><div><a href="product.html" class="px-5 py-1" style="padding-right: 45px;"><?php echo $prodak->nm_barang ?></a>
                            </div></div>
                            <div class="product_extras">
                              <div class="product_color">
                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                <input type="radio" name="product_color" style="background:#000000">
                                <input type="radio" name="product_color" style="background:#999999">
                              </div>
                              <form action="<?php echo site_url('prodak/transaksi/'.$prodak->id.'') ?>">
                                <button class="product_cart_button">Beli Barang</button>
                              </form>
                              
                            </div>
                          </div>
                          <div class="product_fav"><i class="fas fa-heart"></i></div>
                          <ul class="product_marks">
                            <li class="product_mark product_discount">-25%</li>
                            <li class="product_mark product_new bg-danger"><?php echo $prodak->stok ?></li>
                          </ul>
                        </div>
                      </div>
                      <?php endforeach ?>
                      <!-- Slider Item -->
                      

                      <!-- Slider Item -->
                    </div>
                    <div class="arrivals_slider_dots_cover"></div>
                  </div>

                  <!-- Product Panel -->
                  

                </div>

                <div class="col-lg-3">
                  <div class="arrivals_single clearfix">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                      <div class="arrivals_single_image"><img src="<?php echo base_url('asset/') ?>images/new_single.png" alt=""></div>
                      <div class="arrivals_single_content">
                        <div class="arrivals_single_category"><a href="#">Smartphones</a></div>
                        <div class="arrivals_single_name_container clearfix">
                          <div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
                          <div class="arrivals_single_price text-right">$379</div>
                        </div>
                        <div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
                        <form action="#"><button class="arrivals_single_button">Beli Barang</button></form>
                      </div>
                      <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
                      <ul class="arrivals_single_marks product_marks">
                        <li class="arrivals_single_mark product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>    
    </div>

    <!-- Best Sellers -->


    <!-- Adverts -->

    
    <!-- Trends -->

    

    <!-- Reviews -->



    <!-- Recently Viewed -->



    <!-- Brands -->

    <div class="brands">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="brands_slider_container">

              <!-- Brands Slider -->

              <div class="owl-carousel owl-theme brands_slider">

                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url('asset/') ?>images/brands_1.jpg" alt=""></div></div>
                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url('asset/') ?>images/brands_2.jpg" alt=""></div></div>
                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url('asset/') ?>images/brands_3.jpg" alt=""></div></div>
                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url('asset/') ?>images/brands_4.jpg" alt=""></div></div>
                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url('asset/') ?>images/brands_5.jpg" alt=""></div></div>
                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url('asset/') ?>images/brands_6.jpg" alt=""></div></div>
                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url('asset/') ?>images/brands_7.jpg" alt=""></div></div>
                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url('asset/') ?>images/brands_8.jpg" alt=""></div></div>

              </div>

              <!-- Brands Slider Navigation -->
              <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
              <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
              <div class="newsletter_title_container">
                <div class="newsletter_icon"><img src="<?php echo base_url('asset/') ?>images/send.png" alt=""></div>
                <div class="newsletter_title">Sign up for Newsletter</div>
                <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
              </div>
              <div class="newsletter_content clearfix">
                <form action="#" class="newsletter_form">
                  <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                  <button class="newsletter_button">Subscribe</button>
                </form>
                <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 footer_col">
            <div class="footer_column footer_contact">
              <div class="logo_container">
                <div class="logo"><a href="#">Electronic Store</a></div>
              </div>
              <div class="footer_title">Got Question? Call Us 24/7</div>
              <div class="footer_phone">+38 068 005 3570</div>
              <div class="footer_contact_text">
                <p>17 Princess Road, London</p>
                <p>Grester London NW18JR, UK</p>
              </div>
              <div class="footer_social">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fab fa-google"></i></a></li>
                  <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-2 offset-lg-2">
            <div class="footer_column">
              <div class="footer_title">Find it Fast</div>
              <ul class="footer_list">
                <li><a href="#">Computers & Laptops</a></li>
                <li><a href="#">Cameras & Photos</a></li>
                <li><a href="#">Hardware</a></li>
                <li><a href="#">Smartphones & Tablets</a></li>
                <li><a href="#">TV & Audio</a></li>
              </ul>
              <div class="footer_subtitle">Gadgets</div>
              <ul class="footer_list">
                <li><a href="#">Car Electronics</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2">
            <div class="footer_column">
              <ul class="footer_list footer_list_2">
                <li><a href="#">Video Games & Consoles</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Cameras & Photos</a></li>
                <li><a href="#">Hardware</a></li>
                <li><a href="#">Computers & Laptops</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2">
            <div class="footer_column">
              <div class="footer_title">Customer Care</div>
              <ul class="footer_list">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order Tracking</a></li>
                <li><a href="#">Wish List</a></li>
                <li><a href="#">Customer Services</a></li>
                <li><a href="#">Returns / Exchange</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Product Support</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col">

            <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
              <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </div>
              <div class="logos ml-sm-auto">
                <ul class="logos_list">
                  <li><a href="#"><img src="<?php echo base_url('asset/') ?>images/logos_1.png" alt=""></a></li>
                  <li><a href="#"><img src="<?php echo base_url('asset/') ?>images/logos_2.png" alt=""></a></li>
                  <li><a href="#"><img src="<?php echo base_url('asset/') ?>images/logos_3.png" alt=""></a></li>
                  <li><a href="#"><img src="<?php echo base_url('asset/') ?>images/logos_4.png" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?php echo base_url('asset/') ?>js/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="<?php echo base_url('asset/') ?>styles/bootstrap4/popper.js"></script>
  <script src="<?php echo base_url('asset/') ?>styles/bootstrap4/bootstrap.min.js"></script>
  <script src="<?php echo base_url('asset/') ?>plugins/greensock/TweenMax.min.js"></script>
  <script src="<?php echo base_url('asset/') ?>plugins/greensock/TimelineMax.min.js"></script>
  <script src="<?php echo base_url('asset/') ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="<?php echo base_url('asset/') ?>plugins/greensock/animation.gsap.min.js"></script>
  <script src="<?php echo base_url('asset/') ?>plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="<?php echo base_url('asset/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="<?php echo base_url('asset/') ?>plugins/slick-1.8.0/slick.js"></script>
  <script src="<?php echo base_url('asset/') ?>plugins/easing/easing.js"></script>
  <script src="<?php echo base_url('asset/') ?>js/custom.js"></script>
</body>

</html>