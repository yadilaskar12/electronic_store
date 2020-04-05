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
	<style>
	#ne:hover{opacity: 1;}
</style>

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
									<div><a href="#">Login</a></div>
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
						<div class="col-lg-3 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
								<!-- <div class="wishlist d-flex flex-row align-items-center justify-content-end">
									<div class="wishlist_icon"><img src="<?php echo base_url('asset/') ?>images/heart.png" alt=""></div>
									<div class="wishlist_content">
										<div class="wishlist_text"><a href="#">Wishlist</a></div>
										<div class="wishlist_count">115</div>
									</div>
								</div> -->

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

						<!-- Wishlist -->
						<div class="col-lg-6 col-9 order-lg-3 order-2 text-lg-left text-right offset-1">
								<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form action="#" class="header_search_form clearfix">
											<input type="search" required="required" class="header_search_input" placeholder="Search for products..." onkeyup="cari(this.value)">
											<div class="custom_dropdown">
												<div class="custom_dropdown_list">
													<span class="custom_dropdown_placeholder clc">Semua Kategori</span>
													<i class="fas fa-chevron-down"></i>
													<ul class="custom_list clc">
														<li><a class="clc" href="#">Semua Kategori</a></li>
														<?php 
														$data=$this->db->get('kategori')->result();?>
														<?php foreach ($data as $val): ?>
															<li><a href="<?php echo site_url('prodak/kategori/').$val->id_kategori ?>" class="clc" data-id="<?php echo $val->id_kategori ?>"><?php echo $val->kategori ?> <i class="fas fa-chevron-right ml-auto"></i></a></li>
														<?php endforeach ?>

														
													</ul>
												</div>
											</div>
											<button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php echo base_url('asset/') ?>images/search.png" alt=""></button>
										</form>
									</div>
								</div>
							</div>

							
						</div>
					</div>
				</div>
			</div>
			<!-- pencarian data -->
			<div class="row position-absolute justify-content-center" style="z-index: 88;top:190px;margin-left: 475px;">
				<div class="col-md-6" id="carii">
					
					
				</div>
			</div>

			<!-- end pencarian -->
			<!-- Main Navigation -->
			<!-- menu bawah -->

			<nav class="main_nav fixed-top" >
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

									<!-- <ul class="cat_menu">
										<?php 
										$data=$this->db->get('kategori')->result();?>
										<?php foreach ($data as $val): ?>
											<li><a href="#"><?php echo $val->kategori ?> <i class="fas fa-chevron-right ml-auto"></i></a></li>
										<?php endforeach ?>
										
										
									</ul> -->
								</div>

								<!-- Main Nav Menu -->

								<div class="main_nav_menu ml-auto">
									<ul class="standard_dropdown main_nav_dropdown">
										<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>



										<li><a href="#">Tentang Kami<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="#" data-toggle="modal" data-target=".bd-bayar-modal-lg">Cara Bayar<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="#" data-toggle="modal" data-target=".bd-bantuan-modal-lg">Pusat Bantuan<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="#" data-toggle="modal" data-target=".bd-konfirmasi-modal-lg">Konfirmasi Pembayaran<i class="fas fa-chevron-down"></i></a></li>
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
			<!-- modal informasi -->
			<!-- Large modal -->


			<!-- Small modal -->



			<!-- end modal -->
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
		
		<!-- modal -->
		<!-- Button trigger modal -->


		<!-- Modal -->
		<div class="modal fade bd-konfirmasi-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h3 class="card-title">Konfirmasikan Pembayaran Melalui Tombol<br> Di Bawah Ini</h3><br><br>
						<a href="https://api.whatsapp.com/send?phone=6288706886287&text=Saya%20Ingin%20Melakukan%20Konfirmasi%20pembayaran%20" target="_blank"" class="btn btn-success btn-lg" style="margin-left: 500px;">Konfirmasi Sekarang</a>
						
						
					</div>

				</div>
			</div>
		</div>

		<div class="modal fade bd-bantuan-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Pusat Bantuan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h3 class="card-title">Anda Bisa Menyampaikan Keluhan Anda dengan cara Menghubungi Kami Melalui</h3><br><br>
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="https://m.me/riyadi.rahmad.3" target="_blank" class="btn btn-primary">Massengger</a>
							<a href="mailto:rahmadriyadi164@gmail.com?subject=Butuh Bantuan&body=Saya ingin Menyampaikan Keluhan"  class="btn btn-primary">Kirim email</a>
							<a href="https://api.whatsapp.com/send?phone=6288706886287&text=Saya%20Butuh%20Bantuan%20Admin%20" target="_blank" class="btn btn-success">Chat Pribadi</a>
						</div>

						<br><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut laboriosam totam earum doloremque rerum mollitia itaque, iusto consequuntur, exercitationem sapiente est, dolorem doloribus voluptatibus vel aliquid magni aut, libero beatae.</p>
					</div>

				</div>
			</div>
		</div>

		<div class="modal fade bd-bayar-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Cara pembayaran</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h2 class="card-title">Cara Melakukan pembayaran Di Electronic Store</h2>
						<ul>
							<li>1. Transfer Melalui rekening berikut 00945787844</li>
							<li>2. Transfer Melalui rekening berikut 00945787844</li>
							<li>3. Transfer Melalui rekening berikut 00945787844</li>
							<li>4. Transfer Melalui rekening berikut 00945787844</li>
							<li>5. Transfer Melalui rekening berikut 00945787844</li>
						</ul>
						<br><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut laboriosam totam earum doloremque rerum mollitia itaque, iusto consequuntur, exercitationem sapiente est, dolorem doloribus voluptatibus vel aliquid magni aut, libero beatae.</p>
					</div>

				</div>
			</div>
		</div>
		<!-- end modal -->

		<div class="banner" style="margin-top: -75px;">
			
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
				<a class="carousel-control-prev bg-primary" href="#carouselExampleIndicators" role="button" data-slide="prev" style="padding: 10px;opacity: 0.3">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next bg-primary" href="#carouselExampleIndicators" role="button" data-slide="next" style="padding: 10px;opacity: 0.3" id="ne">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
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
		<!-- kelebihan -->
		<div class="characteristics shadow-lg mb-4">
			<div class="container">
				<div class="row">

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start bg-white">
							<div class="char_icon"><img src="<?php echo base_url('asset/') ?>images/char_1.png" alt=""></div>
							<div class="char_content ">
								<div class="char_title font-weight-bold">Free Ongkir</div>
								<div class="char_subtitle">Rp.0</div>
							</div>
						</div>
					</div>

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start bg-white">
							<div class="char_icon"><img src="<?php echo base_url('asset/') ?>images/char_2.png" alt=""></div>
							<div class="char_content">
								<div class="char_title font-weight-bold">100 %</div>
								<div class="char_subtitle">Original</div>
							</div>
						</div>
					</div>

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start bg-white">
							<div class="char_icon"><img src="<?php echo base_url('asset/') ?>images/char_3.png" alt=""></div>
							<div class="char_content">
								<div class="char_title font-weight-bold">Barang Tidak Sesuai</div>
								<div class="char_subtitle">100% Uang Kembali</div>
							</div>
						</div>
					</div>

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start bg-white">
							<div class="char_icon"><img src="<?php echo base_url('asset/') ?>images/char_4.png" alt=""></div>
							<div class="char_content">
								<div class="char_title font-weight-bold">Free Delivery</div>
								<div class="char_subtitle">from $50</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Deals of the week -->

		<div class="deals_featured">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Deals -->

						<div class="deals">
							<div class="deals_title">Deals of the Week</div>
							<div class="deals_slider_container">

								<!-- Deals Slider -->
								<div class="owl-carousel owl-theme deals_slider">

									<!-- Deals Item -->
									<?php foreach ($s as $v): ?>
										<div class="owl-item deals_item">
											<div class="deals_image"><img src="<?php echo base_url('asset/berkas_prodak/') .$v->file?>" alt=""></div>
											<div class="deals_content">
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_category"><a href="#">Headphones</a></div>
													<div class="deals_item_price_a ml-auto"></div>
												</div>
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_name"><?php echo $v->nm_barang ?></div>
													<div class="deals_item_price ml-auto"><?php echo $v->harga ?></div>
												</div>
												<div class="available">
													<div class="available_line d-flex flex-row justify-content-start">
														<div class="available_title">Terbeli: <span>6</span></div>
														<div class="sold_title ml-auto">Sisa Stok: <span><?php echo $v->stok ?></span></div>
													</div>
													<div class="available_bar"><span style="width:17%"></span></div>
												</div>
												<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
													<div class="deals_timer_title_container">
														<div class="deals_timer_title">Hurry Up</div>
														<div class="deals_timer_subtitle">Offer ends in:</div>
													</div>
													<div class="deals_timer_content ml-auto">
														<div class="deals_timer_box clearfix" data-target-time="">
															<div class="deals_timer_unit">
																<div id="deals_timer1_hr" class="deals_timer_hr"></div>
																<span>hours</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer1_min" class="deals_timer_min"></div>
																<span>mins</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer1_sec" class="deals_timer_sec"></div>
																<span>secs</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach ?>
									

									<!-- Deals Item -->
									

								</div>

							</div>

							<div class="deals_slider_nav_container">
								<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
								<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
							</div>
						</div>

						<!-- Featured -->
						<div class="featured">
							<div class="tabbed_container">
								<div class="tabs">
									<ul class="clearfix">
										<li class="active">Semua Prodak</li>
										
									</ul>
									<div class="tabs_line"><span></span></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="featured_slider slider">
										<?php foreach ($s as $value): ?>
											<div class="featured_slider_item">
												<div class="border_active"></div>
												<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('asset/berkas_prodak/').$value->file ?>" alt=""></div>
													<div class="product_content">
														<div class="product_price discount"><?php echo $value->harga ?></span></div>
														<div class="product_name px-3"><a href="product.html"><?php echo $value->nm_barang ?></a><div></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<a href="<?php echo site_url('prodak/transaksi/').$value->id ?>" class="btn btn-primary product_cart_button">Beli Barang</a>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount bg-primary">-25%</li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>

										<?php endforeach ?>
										<!-- Slider Item -->
										





										<!-- prodak detail -->
										

										<!-- Slider Item -->
										


										<!-- Slider Item -->
										

										<!-- Slider Item -->
										

										<!-- Slider Item -->


										<!-- Slider Item -->


										<!-- Slider Item -->
										

										<!-- Slider Item -->
										>

										<!-- Slider Item -->


										<!-- Slider Item -->
										

									</div>
									<div class="featured_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->

								


								<!-- Product Panel -->

								


							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Popular Categories -->

		<div class="popular_categories">
			<div class="container">
				<div class="row shadow-md">
					<div class="col-lg-3">
						<div class="popular_categories_content">
							<div class="popular_categories_title">Kategori Terpopuler</div>
							<div class="popular_categories_slider_nav">
								<div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
								<div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
							</div>
							<div class="popular_categories_link"><a href="#">full catalog</a></div>
						</div>
					</div>

					<!-- Popular Categories Slider -->

					<div class="col-lg-9">
						<div class="popular_categories_slider_container">
							<div class="owl-carousel owl-theme popular_categories_slider">

								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="<?php echo base_url('asset/') ?>images/popular_1.png" alt=""></div>
										<div class="popular_category_text">Smartphones & Tablets</div>
									</div>
								</div>

								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="<?php echo base_url('asset/') ?>images/popular_2.png" alt=""></div>
										<div class="popular_category_text">Computers & Laptops</div>
									</div>
								</div>

								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="<?php echo base_url('asset/') ?>images/popular_3.png" alt=""></div>
										<div class="popular_category_text">Gadgets</div>
									</div>
								</div>

								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="<?php echo base_url('asset/') ?>images/popular_4.png" alt=""></div>
										<div class="popular_category_text">Video Games & Consoles</div>
									</div>
								</div>

								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="<?php echo base_url('asset/') ?>images/popular_5.png" alt=""></div>
										<div class="popular_category_text">Accessories</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Banner -->



		<!-- Hot New Arrivals -->

		<div class="new_arrivals shadow-lg">
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
									$result=$this->db->get("produk")->result();									 ?>
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

		<div class="adverts">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 advert_col">

						<!-- Advert Item -->

						<div class="advert d-flex flex-row align-items-center justify-content-start">
							<div class="advert_content">
								<div class="advert_title"><a href="#">Trends 2018</a></div>
								<div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
							</div>
							<div class="ml-auto"><div class="advert_image"><img src="<?php echo base_url('asset/') ?>images/adv_1.png" alt=""></div></div>
						</div>
					</div>

					<div class="col-lg-4 advert_col">

						<!-- Advert Item -->

						<div class="advert d-flex flex-row align-items-center justify-content-start">
							<div class="advert_content">
								<div class="advert_subtitle">Trends 2018</div>
								<div class="advert_title_2"><a href="#">Sale -45%</a></div>
								<div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
							</div>
							<div class="ml-auto"><div class="advert_image"><img src="<?php echo base_url('asset/') ?>images/adv_2.png" alt=""></div></div>
						</div>
					</div>

					<div class="col-lg-4 advert_col">

						<!-- Advert Item -->

						<div class="advert d-flex flex-row align-items-center justify-content-start">
							<div class="advert_content">
								<div class="advert_title"><a href="#">Trends 2018</a></div>
								<div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
							</div>
							<div class="ml-auto"><div class="advert_image"><img src="<?php echo base_url('asset/') ?>images/adv_3.png" alt=""></div></div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Trends -->

		<div class="trends">
			<div class="trends_background" style="background-image:url(images/trends_background.jpg)"></div>
			<div class="trends_overlay"></div>
			<div class="container">
				<div class="row">

					<!-- Trends Content -->
					<div class="col-lg-3">
						<div class="trends_container">
							<h2 class="trends_title">Trends 2018</h2>
							<div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
							<div class="trends_slider_nav">
								<div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
								<div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
							</div>
						</div>
					</div>

					<!-- Trends Slider -->
					<div class="col-lg-9">
						<div class="trends_slider_container">

							<!-- Trends Slider -->

							<div class="owl-carousel owl-theme trends_slider">

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('asset/') ?>images/trends_1.jpg" alt=""></div>
										<div class="trends_content">
											<div class="trends_category"><a href="#">Smartphones</a></div>
											<div class="trends_info clearfix">
												<div class="trends_name"><a href="product.html">Jump White</a></div>
												<div class="trends_price">$379</div>
											</div>
										</div>
										<ul class="trends_marks">
											<li class="trends_mark trends_discount">-25%</li>
											<li class="trends_mark trends_new">new</li>
										</ul>
										<div class="trends_fav"><i class="fas fa-heart"></i></div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item">
										<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('asset/') ?>images/trends_2.jpg" alt=""></div>
										<div class="trends_content">
											<div class="trends_category"><a href="#">Smartphones</a></div>
											<div class="trends_info clearfix">
												<div class="trends_name"><a href="product.html">Samsung Charm...</a></div>
												<div class="trends_price">$379</div>
											</div>
										</div>
										<ul class="trends_marks">
											<li class="trends_mark trends_discount">-25%</li>
											<li class="trends_mark trends_new">new</li>
										</ul>
										<div class="trends_fav"><i class="fas fa-heart"></i></div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('asset/') ?>images/trends_3.jpg" alt=""></div>
										<div class="trends_content">
											<div class="trends_category"><a href="#">Smartphones</a></div>
											<div class="trends_info clearfix">
												<div class="trends_name"><a href="product.html">DJI Phantom 3...</a></div>
												<div class="trends_price">$379</div>
											</div>
										</div>
										<ul class="trends_marks">
											<li class="trends_mark trends_discount">-25%</li>
											<li class="trends_mark trends_new">new</li>
										</ul>
										<div class="trends_fav"><i class="fas fa-heart"></i></div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('asset/') ?>images/trends_1.jpg" alt=""></div>
										<div class="trends_content">
											<div class="trends_category"><a href="#">Smartphones</a></div>
											<div class="trends_info clearfix">
												<div class="trends_name"><a href="product.html">Jump White</a></div>
												<div class="trends_price">$379</div>
											</div>
										</div>
										<ul class="trends_marks">
											<li class="trends_mark trends_discount">-25%</li>
											<li class="trends_mark trends_new">new</li>
										</ul>
										<div class="trends_fav"><i class="fas fa-heart"></i></div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item">
										<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('asset/') ?>images/trends_2.jpg" alt=""></div>
										<div class="trends_content">
											<div class="trends_category"><a href="#">Smartphones</a></div>
											<div class="trends_info clearfix">
												<div class="trends_name"><a href="product.html">Jump White</a></div>
												<div class="trends_price">$379</div>
											</div>
										</div>
										<ul class="trends_marks">
											<li class="trends_mark trends_discount">-25%</li>
											<li class="trends_mark trends_new">new</li>
										</ul>
										<div class="trends_fav"><i class="fas fa-heart"></i></div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('asset/') ?>images/trends_3.jpg" alt=""></div>
										<div class="trends_content">
											<div class="trends_category"><a href="#">Smartphones</a></div>
											<div class="trends_info clearfix">
												<div class="trends_name"><a href="product.html">Jump White</a></div>
												<div class="trends_price">$379</div>
											</div>
										</div>
										<ul class="trends_marks">
											<li class="trends_mark trends_discount">-25%</li>
											<li class="trends_mark trends_new">new</li>
										</ul>
										<div class="trends_fav"><i class="fas fa-heart"></i></div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Reviews -->

		<div class="reviews">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="reviews_title_container">
							<h3 class="reviews_title">Reviews Customers</h3>
							<div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
						</div>

						<div class="reviews_slider_container">

							<!-- Reviews Slider -->
							<div class="owl-carousel owl-theme reviews_slider">

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div><div class="review_image"><img src="<?php echo base_url('asset/') ?>images/review_1.jpg" alt=""></div></div>
										<div class="review_content">
											<div class="review_name">Rois Wahidin</div>
											<div class="review_rating_container">
												<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="review_time">2 Hari Yang lalu</div>
											</div>
											<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
										</div>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div><div class="review_image"><img src="<?php echo base_url('asset/') ?>images/review_2.jpg" alt=""></div></div>
										<div class="review_content">
											<div class="review_name">Linda Oktaviani</div>
											<div class="review_rating_container">
												<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="review_time">4 Hari Yang Lalu</div>
											</div>
											<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
										</div>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div><div class="review_image"><img src="<?php echo base_url('asset/') ?>images/review_3.jpg" alt=""></div></div>
										<div class="review_content">
											<div class="review_name">Riyanti</div>
											<div class="review_rating_container">
												<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="review_time">1 Tahun Yang Lalu</div>
											</div>
											<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
										</div>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div><div class="review_image"><img src="<?php echo base_url('asset/') ?>images/review_1.jpg" alt=""></div></div>
										<div class="review_content">
											<div class="review_name">Eris Setiawan</div>
											<div class="review_rating_container">
												<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="review_time">6 Hari Yang Lalu</div>
											</div>
											<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
										</div>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div><div class="review_image"><img src="<?php echo base_url('asset/') ?>images/review_2.jpg" alt=""></div></div>
										<div class="review_content">
											<div class="review_name">Alex Prayugo</div>
											<div class="review_rating_container">
												<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="review_time">20 Menit yang Lalu</div>
											</div>
											<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
										</div>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div><div class="review_image"><img src="<?php echo base_url('asset/') ?>images/review_3.jpg" alt=""></div></div>
										<div class="review_content">
											<div class="review_name">Meilin Ashari</div>
											<div class="review_rating_container">
												<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="review_time">1 Bulan yang Lalu</div>
											</div>
											<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
										</div>
									</div>
								</div>

							</div>
							<div class="reviews_dots"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Recently Viewed -->

		<div class="viewed">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="viewed_title_container">
							<h3 class="viewed_title">Recently Viewed</h3>
							<div class="viewed_nav_container">
								<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
								<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
							</div>
						</div>

						<div class="viewed_slider_container">

							<!-- Recently Viewed Slider -->
							<!-- slider -->
							<div class="owl-carousel owl-theme viewed_slider">
								<?php foreach ($s as $v): ?>
									<div class="owl-item">
										<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="viewed_image"><img src="<?php echo base_url('asset/') ?>images/view_1.jpg" alt=""></div>
											<div class="viewed_content text-center">
												<div class="viewed_price">$225<span>$300</span></div>
												<div class="viewed_name"><a href="#">Beoplay H7</a></div>
											</div>
											<ul class="item_marks">
												<li class="item_mark item_discount">-25%</li>
												<li class="item_mark item_new">new</li>
											</ul>
										</div>
									</div>
								<?php endforeach ?>
								<!-- Recently Viewed Item -->
								

								<!-- Recently Viewed Item -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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
								<div class="newsletter_title">Electronic Store</div>
								<div class="newsletter_text"><p>Belanja Disini Hanya Dengan Uang Rp.15000</p></div>
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
							
							<div class="footer_contact_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque fugiat molestiae ipsum, .</p>
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
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
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
	<script type="text/javascript">



		function cari(text)
		{
			$.ajax({
				url:'<?php echo site_url('welcome/cari') ?>',
				type:'POST',
				dataType:'JSON',
				data:{'i':text},
				success:function(response)
				{
					$("#carii").html(response);
				},
				cache:true,
				error:function(data)
				{
					alert(data);
				}

			});
		}

		// function kate()
		// {
		// 	var d=$(this).attr("data-id");
		// 	console.log(d);

		// }
	</script>
</body>

</html>