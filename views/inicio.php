<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- pageHeader -->
		<header id="header" class="pt-lg-5 pt-md-3 pt-2 position-absolute w-100">
			<div class="container-fluid px-xl-17 px-lg-5 px-md-3 px-0 d-flex flex-wrap">
				<div class="col-6 col-sm-3 col-lg-2 order-sm-2 order-md-0 dis-none">
					<!-- langList -->
					<ul class="nav nav-tabs langList pt-xl-6 pt-lg-4 pt-3 border-bottom-0">
						<li>
							<a class="icon-menu" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false"></a>
							<div class="dropdown-menu pl-4 pr-4">
								<a class="dropdown-item" href="javascript:void(0);">Login</a>
								<a class="dropdown-item" href="javascript:void(0);">Registration</a>
								<a class="dropdown-item" href="javascript:void(0);">Logout</a>
							</div>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle text-uppercase" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">ENG</a>
							<div class="dropdown-menu pl-4 pr-4">
								<a class="dropdown-item" href="javascript:void(0);">English</a>
								<a class="dropdown-item" href="javascript:void(0);">Vietnamese</a>
								<a class="dropdown-item" href="javascript:void(0);">French</a>
							</div>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle text-uppercase" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">USD</a>
							<div class="dropdown-menu text-uppercase pl-4 pr-4 border-0">
								<a class="dropdown-item" href="javascript:void(0);">USD</a>
								<a class="dropdown-item" href="javascript:void(0);">VND</a>
								<a class="dropdown-item" href="javascript:void(0);">euro</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-8 static-block">
					<!-- mainHolder -->
					<div class="mainHolder justify-content-center">
						<!-- pageNav1 -->
						<nav class="navbar navbar-expand-lg navbar-light p-0 pageNav1 position-static">
							<button type="button" class="navbar-toggle collapsed position-relative mt-md-2" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav mx-auto text-uppercase d-inline-block">
									<li class="nav-item active dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">home</a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="<?php echo BASE_URL ?>inicio">Home 1</a></li>
											<li class="d-block mx-0"><a href="<?php echo BASE_URL ?>inicio2">Home 2</a></li>
											<li class="d-block mx-0"><a href="<?php echo BASE_URL ?>inicio3">Home 3</a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Store</a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="shop.html">Shop Left Sidebar</a></li>
											<li class="d-block mx-0"><a href="shop-detail.html">Single Product</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="d-block" href="<?php echo BASE_URL ?>informacion">About</a>
									</li>
									<li class="nav-item">
										<a class="nLogo" href="home.html"><img src="images/logo.png" alt="Botanical" class="img-fluid"></a>
									</li>
									<li class="nav-item dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="blog.html">Blog Left Sidebar</a></li>
											<li class="d-block mx-0"><a href="blog-detail.html">Blog Detail</a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="<?php echo BASE_URL ?>carrito">Cart Page</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="d-block" href="<?php echo BASE_URL ?>contacto">contacto</a>
									</li>
								</ul>
							</div>
						</nav>
						<div class="logo">
							<a href="home.html"><img src="images/logo.png" alt="Botanical" class="img-fluid"></a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-3 col-lg-2 order-sm-3 order-md-0 dis-none">
					<!-- wishList -->
					<ul class="nav nav-tabs wishList pt-xl-5 pt-lg-4 pt-3 mr-xl-3 mr-0 justify-content-end border-bottom-0">
						<li class="nav-item"><a class="nav-link icon-search" href="javascript:void(0);"></a></li>
						<li class="nav-item"><a class="nav-link position-relative icon-heart" href="javascript:void(0);"><span class="num rounded d-block">1</span></a></li>
						<li class="nav-item"><a class="nav-link position-relative icon-cart" href="javascript:void(0);"><span class="num rounded d-block">2</span></a></li>
					</ul>
				</div>
			</div>
		</header>
		<!-- main -->
		<main>
			<!-- introBlock -->
			<section class="introBlock position-relative">
				<div class="slick-fade">
					<div>
						<div class="align w-100 d-flex align-items-center bgCover" style="background-image: url(images/b-bg.jpg);">
							<!-- holder -->
							<div class="container position-relative holder pt-xl-10 pt-0">
								<!-- py-12 pt-lg-30 pb-lg-25 -->
								<div class="row">
									<div class="col-12 col-xl-7">
										<div class="txtwrap pr-lg-10">
											<h1 class="fwEbold position-relative pb-lg-8 pb-4 mb-xl-7 mb-lg-6">Houseplant <span class="text-break d-block">The Perfect Choice.</span></h1>
											<p class="mb-xl-15 mb-lg-10">Lorem ipsum is simply dummy text of the printing and typesetting industry <br>has been the industry's standard.</p>
											<a href="shop.html" class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
										</div>
									</div>
									<div class="imgHolder">
										<img src="http://placehold.it/900x795" alt="image description" class="img-fluid w-100">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="align w-100 d-flex align-items-center bgCover" style="background-image: url(images/b-bg2.jpg);">
							<!-- holder -->
							<div class="container position-relative holder pt-xl-10 pt-0">
								<!-- py-12 pt-lg-30 pb-lg-25 -->
								<div class="row">
									<div class="col-12 col-xl-7">
										<div class="txtwrap pr-lg-10">
											<span class="title d-block text-uppercase fwEbold position-relative pl-2 mb-lg-5 mb-sm-3 mb-1">wellcome to botanical</span>
											<h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">Plants Gonna Make  <span class="text-break d-block">People Happy.</span></h2>
											<p class="mb-xl-15 mb-lg-10">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
											<a href="shop.html" class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
										</div>
									</div>
									<div class="imgHolder">
										<img src="http://placehold.it/800x700" alt="image description" class="img-fluid w-100">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="align w-100 d-flex align-items-center bgCover" style="background-image: url(images/b-bg3.jpg);">
							<!-- holder -->
							<div class="container position-relative holder pt-xl-10 pt-0">
								<!-- py-12 pt-lg-30 pb-lg-25 -->
								<div class="row">
									<div class="col-12 col-xl-7">
										<div class="txtwrap pr-lg-10">
											<span class="title d-block text-uppercase fwEbold position-relative pl-2 mb-lg-5 mb-sm-3 mb-1">wellcome to botanical</span>
											<h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">Plants for healthy</h2>
											<p class="mb-xl-15 mb-lg-10">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
											<a href="shop.html" class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
										</div>
									</div>
									<div class="imgHolder">
										<img src="http://placehold.it/820x815" alt="image description" class="img-fluid w-100">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slickNavigatorsWrap">
					<a href="#" class="slick-prev"><i class="icon-leftarrow"></i></a>
					<a href="#" class="slick-next"><i class="icon-rightarrow"></i></a>
				</div>
			</section>
			<!-- chooseUs-sec -->
			<section class="chooseUs-sec container pt-xl-22 pt-lg-20 pt-md-16 pt-10 pb-xl-12 pb-md-7 pb-2">
				<div class="row">
					<div class="col-12 col-lg-6 mb-lg-0 mb-4">
						<img src="http://placehold.it/570x590" alt="image description" class="img-fluid">
					</div>
					<div class="col-12 col-lg-6 pr-4">
						<h2 class="headingII fwEbold playfair position-relative mb-6 pb-5">Why choose us ?</h2>
						<p class="mb-xl-14 mb-lg-10">Lorem ipsum is simply dummy text of the printing and typesetting industry, lorem ipsum has been the industry's standard dummy text ever since the 1500s  when an unknown printer took a galley ... <a href="javascript:void(0);" class="btnMore"><i>Learn More</i></a></p>
						<!-- chooseList -->
						<ul class="list-unstyled chooseList">
							<li class="d-flex justify-content-start mb-xl-7 mb-lg-5 mb-3">
								<span class="icon icon-plant"></span>
								<div class="alignLeft d-flex justify-content-start flex-wrap">
									<h3 class="headingIII fwEbold mb-2">Hand Planted</h3>
									<p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form.</p>
								</div>
							</li>
							<li class="d-flex justify-content-start mb-xl-6 mb-lg-5 mb-4">
								<span class="icon icon-ic-plant"></span>
								<div class="alignLeft d-flex justify-content-start flex-wrap">
									<h3 class="headingIII fwEbold mb-2">Natural Sunlight</h3>
									<p>It is a long established fact that a reader will be distracted by the reable content of a page.</p>
								</div>
							</li>
							<li class="d-flex justify-content-start">
								<span class="icon icon-desert"></span>
								<div class="alignLeft d-flex justify-content-start flex-wrap">
									<h3 class="headingIII fwEbold mb-2">Clean Air</h3>
									<p>There are many variations of passages of lorem ipsum available, but the majority have suffered.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- featureSec -->
			<section class="featureSec container-fluid overflow-hidden pt-xl-12 pt-lg-10 pt-md-80 pt-5 pb-xl-10 pb-lg-4 pb-md-2 px-xl-14 px-lg-7">
				<!-- mainHeader -->
				<header class="col-12 mainHeader mb-7 text-center">
					<h1 class="headingIV playfair fwEblod mb-4">Featured Product</h1>
					<span class="headerBorder d-block mb-md-5 mb-3"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
					<p>Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
				</header>
				<div class="col-12 p-0 overflow-hidden d-flex flex-wrap">
					<!-- featureCol -->
					<div class="featureCol px-3 mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
								<span class="price d-block fwEbold">68.00 $</span>
							</div>
						</div>
					</div>
					<!-- featureCol -->
					<div class="featureCol px-3 position-relative mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Neque Porro Quisquamest</a></span>
								<span class="price d-block fwEbold">60.50 $</span>
								<span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
							</div>
						</div>
					</div>
					<!-- featureCol -->
					<div class="featureCol px-3 mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque aliquet</a></span>
								<span class="price d-block fwEbold">68.00 $</span>
							</div>
						</div>
					</div>
					<!-- featureCol -->
					<div class="featureCol px-3 position-relative mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Aspetur Autodit Autfugit</a></span>
								<span class="price d-block fwEbold"><del>80.00 $</del>66.00 $</span>
								<span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
							</div>
						</div>
					</div>
					<!-- featureCol -->
					<div class="featureCol px-3 mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
								<span class="price d-block fwEbold">70.50 $</span>
							</div>
						</div>
					</div>
					<!-- featureCol -->
					<div class="featureCol position-relative px-3 mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Sint Incidunt Utlabore</a></span>
								<span class="price d-block fwEbold"><del>75.00 $</del>60.50 $</span>
								<span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
								<span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block ml-8">Sale</span>
							</div>
						</div>
					</div>
					<!-- featureCol -->
					<div class="featureCol px-3 mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat Voluptem</a></span>
								<span class="price d-block fwEbold">58.00 $</span>
							</div>
						</div>
					</div>
					<!-- featureCol -->
					<div class="featureCol position-relative px-3 mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Neque Porro Quisquam</a></span>
								<span class="price d-block fwEbold"><del>60.00 $</del>48.00 $</span>
								<span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
							</div>
						</div>
					</div>
					<!-- featureCol -->
					<div class="featureCol px-3 mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
								<span class="price d-block fwEbold">65.00 $</span>
							</div>
						</div>
					</div>
					<!-- featureCol -->
					<div class="featureCol position-relative px-3 mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
									<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
								</ul>
							</div>
							<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat Voluptatem</a></span>
								<span class="price d-block fwEbold">80.00 $</span>
								<span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">Hot</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- contactListBlock -->
			<div class="contactListBlock container overflow-hidden pt-xl-8 pt-lg-10 pt-md-8 pt-4 pb-xl-12 pb-lg-10 pb-md-4 pb-1">
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-van"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Free shipping order</strong>
								<p class="m-0">On orders over  $100</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-gift"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Special gift card</strong>
								<p class="m-0">The perfect gift idea</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-4 px-md-2 px-3 d-flex">
							<span class="icon icon-recycle"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Return &amp; exchange</strong>
								<p class="m-0">Free return within 3 days</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-call"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Support 24 / 7</strong>
								<p class="m-0">Customer support</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- productOfferSec -->
			<div class="productOfferSec container overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
				<div class="row">
					<div class="col-12 col-sm-6 mb-sm-0 mb-2">
						<a href="shop.html" class="w-100"><img src="http://placehold.it/570x350" alt="image description" class="img-fluid"></a>
					</div>
					<div class="col-12 col-sm-6">
						<a href="shop.html" class="w-100"><img src="http://placehold.it/570x350" alt="image description" class="img-fluid"></a>
					</div>
				</div>
			</div>
			<!-- dealSecHolder -->
			<section class="dealSecHolder container-fluid overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
				<!-- mainHeader -->
				<header class="col-12 mainHeader mb-7 text-center">
					<h1 class="headingIV playfair fwEblod mb-5">Daily Deal</h1>
					<span class="headerBorder d-block mb-md-5 mb-3"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
					<p class="mb-6">There are many variations of passages of lorem ipsum available.</p>
					<div id="defaultCountdown" class="comming-timer"></div>
				</header>
				<!-- dealSlider -->
				<div class="dealSlider w-100 px-lg-10 px-md-5">
					<div>
						<!-- featureCol -->
						<div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
							<div class="border">
								<div class="imgHolder position-relative w-100 overflow-hidden">
									<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
									<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
										<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
									</ul>
								</div>
								<div class="text-center py-5 px-2">
									<span class="title d-block mb-2"><a href="shop-detail.html">Sint Incidunt Utlabore</a></span>
									<span class="price d-block fwEbold"><del>75.00 $</del>60.50 $</span>
									<span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
									<span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
								</div>
							</div>
						</div>
					</div>
					<div>
						<!-- featureCol -->
						<div class="featureCol px-3 w-100 mb-sm-8 mb-6">
							<div class="border">
								<div class="imgHolder position-relative w-100 overflow-hidden">
									<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
									<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
										<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
									</ul>
								</div>
								<div class="text-center py-5 px-2">
									<span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat Voluptem</a></span>
									<span class="price d-block fwEbold">58.00 $</span>
								</div>
							</div>
						</div>
					</div>
					<div>
						<!-- featureCol -->
						<div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
							<div class="border">
								<div class="imgHolder position-relative w-100 overflow-hidden">
									<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
									<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
										<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
									</ul>
								</div>
								<div class="text-center py-5 px-2">
									<span class="title d-block mb-2"><a href="shop-detail.html">Neque Porro Quisquam</a></span>
									<span class="price d-block fwEbold"><del>60.00 $</del>48.00 $</span>
									<span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
								</div>
							</div>
						</div>
					</div>
					<div>
						<!-- featureCol -->
						<div class="featureCol px-3 w-100 mb-sm-8 mb-6">
							<div class="border">
								<div class="imgHolder position-relative w-100 overflow-hidden">
									<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
									<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
										<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
									</ul>
								</div>
								<div class="text-center py-5 px-2">
									<span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
									<span class="price d-block fwEbold">65.00 $</span>
								</div>
							</div>
						</div>
					</div>
					<div>
						<!-- featureCol -->
						<div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
							<div class="border">
								<div class="imgHolder position-relative w-100 overflow-hidden">
									<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
									<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
										<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
									</ul>
								</div>
								<div class="text-center py-5 px-2">
									<span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat Voluptatem</a></span>
									<span class="price d-block fwEbold">80.00 $</span>
									<span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
								</div>
							</div>
						</div>
					</div>
					<div>
						<!-- featureCol -->
						<div class="featureCol px-3 w-100 mb-sm-8 mb-6">
							<div class="border">
								<div class="imgHolder position-relative w-100 overflow-hidden">
									<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
									<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
										<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
									</ul>
								</div>
								<div class="text-center py-5 px-2">
									<span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
									<span class="price d-block fwEbold">65.00 $</span>
								</div>
							</div>
						</div>
					</div>
					<div>
						<!-- featureCol -->
						<div class="featureCol w-100 px-3 mb-sm-8 mb-6">
							<div class="border">
								<div class="imgHolder position-relative w-100 overflow-hidden">
									<img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
									<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
										<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
									</ul>
								</div>
								<div class="text-center py-5 px-2">
									<span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
									<span class="price d-block fwEbold">65.00 $</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- partnerSec -->
			<div class="partnerSec container overflow-hidden pt-xl-12 pb-xl-23 pt-lg-10 pt-md-8 pt-5 pb-lg-20 pb-md-16 pb-10">
				<div class="row">
					<div class="col-12">
						<!-- partnerSlider -->
						<div class="partnerSlider d-flex flex-wrap">
							<div>
								<div class="logoColumn d-flex align-items-center justify-content-center">
									<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
								</div>
							</div>
							<div>
								<div class="logoColumn d-flex align-items-center justify-content-center">
									<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
								</div>
							</div>
							<div>
								<div class="logoColumn d-flex align-items-center justify-content-center">
									<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
								</div>
							</div>
							<div>
								<div class="logoColumn d-flex align-items-center justify-content-center">
									<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
								</div>
							</div>
							<div>
								<div class="logoColumn d-flex align-items-center justify-content-center">
									<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
								</div>
							</div>
							<div>
								<div class="logoColumn d-flex align-items-center justify-content-center">
									<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
								</div>
							</div>
							<div>
								<div class="logoColumn d-flex align-items-center justify-content-center">
									<a href="javascript:void(0);"><img src="http://placehold.it/105x59" alt="Partner Logo" class="img-fluid"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-xl-20 px-lg-14">
				<!-- subscribeSecBlock -->
				<section class="subscribeSecBlock bgCover col-12 pt-xl-24 pb-xl-12 pt-lg-20 pt-md-16 pt-10 pb-md-8 pb-5" style="background-image: url(http://placehold.it/1720x465)">
					<header class="col-12 mainHeader mb-sm-9 mb-6 text-center">
						<h1 class="headingIV playfair fwEblod mb-4">Subscribe Our Newsletter</h1>
						<span class="headerBorder d-block mb-md-5 mb-3"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
						<p class="mb-sm-6 mb-3">Enter Your email address to join our mailing list and keep yourself update</p>
					</header>
					<form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
						<input type="email" class="form-control px-4 border-0" placeholder="Enter your mail...">
						<button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></button>
					</form>
				</section>
			</div>