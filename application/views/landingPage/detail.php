
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
		
                <div class="row" style="bakcground-repeat:no-repeat;height:100px">

                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-8">
                            <div class="row space-16">&nbsp;</div>
                            <div class="row">
                            <div class="col-sm-12">
                                <div class="thumbnail">
                                <div class="caption text-center">
                                    <div class="position-relative">
                                        <!-- Carousel container -->
                                                    <div id="my-pics" class="carousel slide" data-ride="carousel" style="width:700px;margin:auto;">

                                                    <!-- Indicators -->
                                                    <ol class="carousel-indicators">
                                                    <li data-target="#my-pics" data-slide-to="0" class="active"></li>
                                                    <li data-target="#my-pics" data-slide-to="1"></li>
                                                    <li data-target="#my-pics" data-slide-to="2"></li>
                                                    </ol>

                                                    <!-- Content -->
                                                    <div class="carousel-inner" role="listbox">

                                                    <!-- Slide 1 -->
                                                    <div class="item active" >
                                                    <img src="<?= base_url('uploads/'.$wisatadetail->foto1)?>" style="width:700px;height:400px;object-fit:cover;" />
                                                    </div>

                                                    <!-- Slide 2 -->
                                                    <div class="item">
                                                    <img src="<?= base_url('uploads/'.$wisatadetail->foto2)?>" style="width:700px;height:400px;object-fit:cover;" />
                                                    </div>

                                                    <!-- Slide 3 -->
                                                    <div class="item">
                                                    <img src="<?= base_url('uploads/'.$wisatadetail->foto3)?>" style="width:700px;height:400px;object-fit:cover;" />
                                                    </div>

                                                    </div>

                                                    <!-- Previous/Next controls -->
                                                    <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
                                                    <span class="icon-prev" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
                                                    <span class="icon-next" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                    </a>

                                                    </div>
                                    
                                    </div>
                                    <h4 id="thumbnail-label"><a href="https://flow.microsoft.com/en-us/connectors/shared_slack/slack/" target="_blank">Microsoft Slack</a></h4>
                                    <h2><?= $wisatadetail->nama ?></h2>
                                    <i class="glyphicon glyphicon-pushpin light-red lighter bigger-120"></i>&nbsp;Kecamatan <?= $wisatadetail->nama_kecamatan ?>
                                    <div class="thumbnail-description smaller">
                                        <p><?=$wisatadetail->alamat?></p>
                                        <p>Fasilitas: <?=$wisatadetail->fasilitas?></p>
                                        <p>Rating: <?=$wisatadetail->skor_rating?> | Harga Tiket: Rp.<?=$wisatadetail->harga_tiket?>,00 -</p>
                                    </div>
                                </div>
                                <div class="row" style="background-color:#0D0D0D;width:60%;margin:auto; padding:30px 0;">
                                    <div class="col-md-12">
                                        <div class="card-header"><h3>Comment</h3></div>
                                        <?php foreach($list_komentar as $komentar): ?>
                                                
                                                <div class="card-body" style="background-color:#262626;">
                                                    <h4 style="color:white"><?= $komentar->username ?> - <?= $komentar->rating ?></h4>
                                                    <p style="margin-top:-20px; color:white"> <?= $komentar->isi ?></p>
                                                </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-md-12">
                                        <a class="btn btn-warning btn-sm" href="<?= base_url('komentar/tambahkomentar?id='.$wisatadetail->id)?>" role="button">Komentar</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-2">&nbsp;</div>
                        </div>
                    </div>
                </div>

                


        
		
		
		<?php $this->load->view('./landingPage/js_footer.php');?>

	</body>
</html>

