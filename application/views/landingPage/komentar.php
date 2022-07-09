
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
                    <div class="row" style="margin-bottom:100px;">
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-8">
                            <div class="row space-16">&nbsp;</div>
                            <div class="row">
                            <div class="col-sm-12">
                                        <?php echo form_open('komentar/saveKomentar') ?>

                                            <div class="form-group row">
                                            <input type="hidden" name="wisata_id" value="<?= $list_wisata->id ?>">
                                                <label for="rating" class="col-4 col-form-label">Rating</label> 
                                                <div class="col-8">
                                                <select id="rating" name="rating" class="custom-select" required="required">
                                                    <option value="5" selected>Sangat Bagus</option>
                                                    <option value="4">Bagus</option>
                                                    <option value="3">Biasa Aja</option>
                                                    <option value="2">Kurang Bagus</option>
                                                    <option value="1">Jelek</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="komentar" class="col-4 col-form-label">Komentar</label> 
                                                <div class="col-8">
                                                <textarea id="komentar" name="komentar" cols="40" rows="5" class="form-control" required="required"></textarea>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        <?php echo form_close() ?>
                                
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

