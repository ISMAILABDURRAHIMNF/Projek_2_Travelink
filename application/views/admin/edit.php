<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin Web Wisata Depok</title>

    <?php $this->load->view('layout/library_css.php');?>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <?php $this->load->view('layout/navbar.php');?>

    <?php $this->load->view('layout/sidebar.php');?>
    <!-- Content Wrapper. Contains page content -->

     <!-- /.content-wrapper -->
    <div class="content-wrapper">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data Mahasiswa </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit Mahasiswa</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>


        <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            
            <?php echo form_open_multipart('admin/update')?>
                        <input type="hidden" name="id" value="<?= $wstedit->id ?>">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"></div>
                                </div> 
                                <input id="nama" name="nama" placeholder="Nama Tempat Wisata" type="text" class="form-control" required="required" value="<?= $wstedit->nama ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                            <div class="col-8">
                            <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" aria-describedby="alamatHelpBlock" required="required" ><?= $wstedit->alamat ?></textarea> 
                            <span id="alamatHelpBlock" class="form-text text-muted">Isi menggunakan alamat lengkap</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="latlong" class="col-4 col-form-label">Garis Lintang</label> 
                            <div class="col-8">
                            <textarea id="latlong" name="latlong" cols="40" rows="5" class="form-control" required="required" ><?= $wstedit->latlong ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_id" class="col-4 col-form-label">Jenis ID</label> 
                            <div class="col-8">
                            <?php 
                            $selected_1 = ($wstedit->jenis_id=="1")?"selected":"";
                            $selected_2 = ($wstedit->jenis_id=="2")?"selected":"";
                            $selected_3 = ($wstedit->jenis_id=="3")?"selected":"";
                            $selected_4 = ($wstedit->jenis_id=="4")?"selected":"";
                            $selected_5 = ($wstedit->jenis_id=="5")?"selected":"";
                            ?>
                            <select id="jenis_id" name="jenis_id" class="custom-select" required="required">
                                <option value="1" <?=$selected_1?>>1</option>
                                <option value="2" <?=$selected_2?>>2</option>
                                <option value="3" <?=$selected_3?>>3</option>
                                <option value="4" <?=$selected_4?>>4</option>
                                <option value="5" <?=$selected_5?>>5</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="skor_rating" class="col-4 col-form-label">Skor Rating</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"></div>
                                </div> 
                                <input id="skor_rating" name="skor_rating" placeholder="Skor Rating" type="text" required="required" class="form-control" value="<?= $wstedit->skor_rating ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_tiket" class="col-4 col-form-label">Harga Tiker</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"></div>
                                </div> 
                                <input id="harga_tiket" name="harga_tiket" placeholder="Harga Tiket" type="text" required="required" class="form-control" value="<?= $wstedit->harga_tiket ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan_id" class="col-4 col-form-label">Kecamatan ID</label> 
                            <div class="col-8">
                            <?php 
                            $terpilih_1 = ($wstedit->kecamatan_id=="1")?"selected":"";
                            $terpilih_2 = ($wstedit->kecamatan_id=="2")?"selected":"";
                            $terpilih_3 = ($wstedit->kecamatan_id=="3")?"selected":"";
                            $terpilih_4 = ($wstedit->kecamatan_id=="4")?"selected":"";
                            $terpilih_5 = ($wstedit->kecamatan_id=="5")?"selected":"";
                            $terpilih_6 = ($wstedit->kecamatan_id=="6")?"selected":"";
                            $terpilih_7 = ($wstedit->kecamatan_id=="7")?"selected":"";
                            $terpilih_8 = ($wstedit->kecamatan_id=="8")?"selected":"";
                            $terpilih_9 = ($wstedit->kecamatan_id=="9")?"selected":"";
                            $terpilih_10 = ($wstedit->kecamatan_id=="10")?"selected":"";
                            $terpilih_11 = ($wstedit->kecamatan_id=="11")?"selected":"";
                            ?>
                            <select id="kecamatan_id" name="kecamatan_id" required="required" class="custom-select">
                                <option value="1" <?=$terpilih_1?>>1</option>
                                <option value="2" <?=$terpilih_2?>>2</option>
                                <option value="3" <?=$terpilih_3?>>3</option>
                                <option value="4" <?=$terpilih_4?>>4</option>
                                <option value="5" <?=$terpilih_5?>>5</option>
                                <option value="6" <?=$terpilih_6?>>6</option>
                                <option value="7" <?=$terpilih_7?>>7</option>
                                <option value="8" <?=$terpilih_8?>>8</option>
                                <option value="9" <?=$terpilih_9?>>9</option>
                                <option value="10" <?=$terpilih_10?>>10</option>
                                <option value="11" <?=$terpilih_11?>>11</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="website" class="col-4 col-form-label">Website</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"></div>
                                </div> 
                                <input id="website" name="website" placeholder="Website" type="text" required="required" class="form-control" value="<?= $wstedit->website ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"></div>
                                </div> 
                                <input id="fasilitas" name="fasilitas" placeholder="Fasilitas" type="text" required="required" class="form-control"  value="<?= $wstedit->fasilitas ?>">
                            </div>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    <?php echo form_close()?>


        </div><!--/. container-fluid -->
        </section>
    </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <?php $this->load->view('layout/footer.php');?>

</div>
<!-- ./wrapper -->

    <?php $this->load->view('layout/library_js.php');?>
</body>
</html>