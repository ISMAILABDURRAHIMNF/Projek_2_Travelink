
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
                    <div class="row"
                        <?php 
                            if(empty($list_wisata)){
                                echo 'style="margin-bottom:450px;"';
                            } else {
                                echo 'style="margin-bottom:20px;"';
                            }
                        ?>>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Filter Jenis
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="<?= base_url('landingPage/main')?>">No Filter</a></li>
                                        <?php foreach($list_jenis as $jenis): ?>
                                            <li><a href="<?= base_url('landingPage/filterJenis?id='.$jenis->id)?>"><?= $jenis->nama ?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Filter Kecamatan
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="<?= base_url('landingPage/main')?>">No Filter</a></li>
                                        <?php foreach($list_kecamatan as $kecamatan): ?>
                                            <li><a href="<?= base_url('landingPage/filterKecamatan?id='.$kecamatan->id)?>"><?= $kecamatan->nama ?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if(empty($list_wisata)){
                                echo '<div class="col-md-12"><br><h3>Tidak ada data yang ditemukan</h3></div>';
                            } else {
                            }
                        ?>
                    </div>
                    <div class="row">
                        <?php foreach($list_wisata as $wisata): ?>
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><img src="<?= base_url('uploads/'.$wisata->foto1) ?>" alt="" style="width:225px;height:225px; object-fit:cover"></div>
                                    <div class="panel-body"><a href="<?= base_url('landingPage/findById?id='.$wisata->id) ?>" style="color:gray"><b><?= $wisata->nama ?></b></a></div>
                                    <div class="panel-footer"><?= $wisata->alamat ?></div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        <?php endforeach; ?>
                    </div>
                </div>


        
		
		
		<?php $this->load->view('./landingPage/js_footer.php');?>

	</body>
</html>

