<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $judul; ?></title>

	<!-- CSS FILES -->
	<link href="<?= base_url('assets/front-jejo/') ?>css/bootstrap.min.css" rel="stylesheet">

	<link href="<?= base_url('assets/front-jejo/') ?>css/bootstrap-icons.css" rel="stylesheet">

	<link href="<?= base_url('assets/front-jejo/') ?>css/templatemo-kind-heart-charity.css" rel="stylesheet">
	<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>

<body id="section_1">

	<header class="site-header">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-12 d-flex flex-wrap">

					<p class="d-flex mb-0">
						<i class="bi-envelope me-2"></i>

						<a href="mailto:info@company.com">
						<?= $konfig->email; ?>
						</a>
					</p>
				</div>

				<div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
					<ul class="social-icon">
						<li class="social-icon-item">
							<a href="#" class="social-icon-link bi-twitter"></a>
						</li>

						<li class="social-icon-item">
							<a href="#" class="social-icon-link bi-facebook"></a>
						</li>

						<li class="social-icon-item">
							<a href="#" class="social-icon-link bi-instagram"></a>
						</li>

						<li class="social-icon-item">
							<a href="#" class="social-icon-link bi-youtube"></a>
						</li>

						<li class="social-icon-item">
							<a href="#" class="social-icon-link bi-whatsapp"></a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</header>

	<nav class="navbar navbar-expand-lg navbar-dark bg-light">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="<?= base_url('assets/front-jejo/') ?>images/logo.png" class="logo img-fluid"
					alt="Kind Heart Charity">
				<span>
					<?= $konfig->judul_website; ?>
					<small>Web Mas Jejo</small>
				</span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link click-scroll" href="#top">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							All Kategori
						</a>
						<ul class="dropdown-menu dropdown-menu-dark">
							<?php foreach ($kategori as $kata){?>
							<li><a class="dropdown-item"
									href="<?= base_url('home/kategori/'.$kata['id_kategori']) ?>"><?= $kata['nama_kategori'] ?></a>
							</li>
							<?php } ?>
						</ul>
					</li>
					<li class="nav-item ms-3">
						<a class="nav-link custom-btn custom-border-btn btn" href="<?= base_url('auth') ?>">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<main>

		<section class="news-detail-header-section text-center">
			<div class="section-overlay"></div>

			<div class="container">
				<div class="row">

					<div class="col-lg-12 col-12">
						<h1 class="text-white"><?= $konten->judul; ?></h1>
					</div>

				</div>
			</div>
		</section>

		<section class="news-section section-padding">
			<div class="container">
				<div class="row">

					<div class="col-lg-7 col-12">
						<div class="news-block">
							<div class="news-block-top">
								<a href="news-detail.html">
									<img src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>"
										class="custom-text-box-image img-fluid" alt="" width="500px">
								</a>

								<div class="news-category-block">
									<a href="#" class="category-block-link">
										<?= $konten->judul; ?>
									</a>
								</div>
							</div>

							<div class="news-block-info">
								<div class="d-flex mt-2">
									<div class="news-block-date">
										<p>
											<i class="bi-calendar4 custom-icon me-1"></i>
											<?php
											$tanggal_database = $konten->tanggal;
											$tanggal_format = date('F j, Y', strtotime($tanggal_database));
											echo $tanggal_format;
											?>
										</p>
									</div>

									<div class="news-block-author mx-5">
										<p>
											<i class="bi-person custom-icon me-1"></i>
											By <?= $konten->nama; ?>
										</p>
									</div>

									<div class="news-block-comment">
										<p>
											<i class="bi-chat-left custom-icon me-1"></i>
											32 Comments
										</p>
									</div>
								</div>
								<div class="news-block-body">
									<p><?= $konten->keterangan; ?></p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 mx-auto">
						<form class="custom-form search-form" action="#" method="post" role="form">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">

							<button type="submit" class="form-control">
								<i class="bi-search"></i>
							</button>
						</form>

						<h5 class="mt-5 mb-3">Recent news</h5>
						<div class="news-block news-block-two-col d-flex mt-4">
							<div class="news-block-two-col-image-wrap">
								<a href="news-detail.html">
									<img src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>"
										class="news-image img-fluid" alt="">
								</a>
							</div>

							<div class="news-block-two-col-info">
								<div class="news-block-title mb-2">
									<h6><a href="news-detail.html" class="news-block-title-link"><?= $konten->judul; ?></a>
									</h6>
								</div>

								<div class="news-block-date">
								<p>
											<i class="bi-calendar4 custom-icon me-1"></i>
											<?php
											$tanggal_database = $konten->tanggal;
											$tanggal_format = date('F j, Y', strtotime($tanggal_database));
											echo $tanggal_format;
											?>
										</p>
								</div>
							</div>
						</div>
						<div class="category-block d-flex flex-column">
							<h5 class="mb-3">Categories</h5>
							<?php foreach ($kategori as $kata){?>
							<a href="<?= base_url('home/kategori/'.$kata['id_kategori']) ?>"
								class="category-block-link">
								<?= $kata['nama_kategori'] ?>
							</a>
							<?php } ?>


						</div>

						<div class="tags-block">
							<h5 class="mb-3">Tags</h5>

							<a href="#" class="tags-block-link">
								<?= $konten->tag; ?>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>
	</main>

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12 mb-4">
					<img src="<?= base_url('assets/front-jejo/') ?>images/logo.png" class="logo img-fluid" alt="">
				</div>

				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<h5 class="site-footer-title mb-3">Quick Links</h5>

					<ul class="footer-menu">
						<?php foreach ($kategori as $kata){?>
						<li class="footer-menu-item"><a href="<?= base_url('home/kategori/'.$kata['id_kategori']) ?>"
								class="footer-menu-link"><?= $kata['nama_kategori'] ?></a></li>
						<?php } ?>
					</ul>
				</div>

				<div class="col-lg-4 col-md-6 col-12 mx-auto">
					<h5 class="site-footer-title mb-3">Contact Infomation</h5>

					<p class="text-white d-flex mb-2">
						<i class="bi-telephone me-2"></i>

						<a href="tel: 305-240-9671" class="site-footer-link">
							<?= $konfig->no_wa; ?>
						</a>
					</p>

					<p class="text-white d-flex">
						<i class="bi-envelope me-2"></i>

						<a href="mailto:info@yourgmail.com" class="site-footer-link">
							<?= $konfig->email; ?>
						</a>
					</p>

					<p class="text-white d-flex mt-3">
						<i class="bi-geo-alt me-2"></i>
						<?= $konfig->alamat; ?>
					</p>

					<a href="#" class="custom-btn btn mt-3">SUBSCRIBE</a>
				</div>
			</div>
		</div>

		<div class="site-footer-bottom">
			<div class="container">
				<div class="row">

					<div class="col-lg-6 col-md-7 col-12">
						<p class="copyright-text mb-0">Copyright © 2023 <a href="#">Jonathan</a>
						</p>
					</div>

					<div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
						<ul class="social-icon">
							<li class="social-icon-item">
								<a href="#" class="social-icon-link bi-twitter"></a>
							</li>

							<li class="social-icon-item">
								<a href="#" class="social-icon-link bi-facebook"></a>
							</li>

							<li class="social-icon-item">
								<a href="#" class="social-icon-link bi-instagram"></a>
							</li>

							<li class="social-icon-item">
								<a href="#" class="social-icon-link bi-linkedin"></a>
							</li>

							<li class="social-icon-item">
								<a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</footer>

	<!-- JAVASCRIPT FILES -->
	<script src="<?= base_url('assets/front-jejo/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/front-jejo/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/front-jejo/') ?>js/jquery.sticky.js"></script>
	<script src="<?= base_url('assets/front-jejo/') ?>js/click-scroll.js"></script>
	<script src="<?= base_url('assets/front-jejo/') ?>js/counter.js"></script>
	<script src="<?= base_url('assets/front-jejo/') ?>js/custom.js"></script>

</body>

</html>
