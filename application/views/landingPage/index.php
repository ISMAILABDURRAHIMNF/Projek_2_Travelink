
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

	<?php $this->load->view('./landingPage/meta_js_css.php');?>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		
		<?php $this->load->view('./landingPage/header.php');?>
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo base_url('assets/images/background_1.jpg')?>);">
				<div class="desc animate-box">
					<h2>Depok City Travelink.</h2>
					<!-- <span>Lovely Crafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FREEHTML5.co</a></span> -->
					<span><a class="btn btn-primary btn-lg" href="<?php echo base_url('landingPage/main')?>">Search NOW</a></span>
				</div>
			</div>

		</div>


		<div class="fh5co-listing">
			<div class="container">
				<div class="row">
					<div class="col-md-12"><h3><a href="">Recommendation</a></h3></div>
				</div>
				<div class="row">
					<?php foreach ($list_wisata as $wisata) { ?>
						<div class="col-md-4 col-sm-4 fh5co-item-wrap">
							<a href="<?= base_url('landingPage/findById?id='.$wisata->id) ?>" class="fh5co-listing-item">
								<img src="<?php echo base_url('uploads/'.$wisata->foto1)?>" alt="image" class="img-responsive" style="width325px;height:325px;object-fit:cover"width="325">
								<div class="fh5co-listing-copy">
									<h2><?= $wisata->nama ?></h2>
									<span class="icon">
										<i class="icon-chevron-right"></i>
									</span>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>


		<div class="fh5co-section">
			<div class="container">
					<div class="row">
						<div class="col-md-12"><h3>Comment</h3></div>
					</div>
				<div class="row">
					<div class="col-md-6 fh5co-news">
						<ul>
							<?php foreach ($list_komentar as $komentar) { ?>
								<li>
									<a style="height:155px;">
										<span class="fh5co-date">
											<?php
												$date = date_create($komentar->tanggal);
												echo date_format($date, "M. d, Y");
											?>
										</span>
										<h3><?= $komentar->username ?></h3>
										<p><?= $komentar->nilai_rating_id ?>(<?=$komentar->rating ?>) - <?= $komentar->isi ?></p>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="col-md-6 fh5co-testimonial">
						<?php foreach($list_komentar as $komentar) { ?>
							<img src="<?php echo base_url('uploads/'.$komentar->foto)?>" alt="Image" class="img-responsive mb20" style=" height:145px; width: 400px;object-fit: cover">
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		
		<?php $this->load->view('./landingPage/js_footer.php');?>

	</body>
</html>

