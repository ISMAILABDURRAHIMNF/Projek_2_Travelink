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
                <h1 class="m-0">Daftar Wisata </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Wisata</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>


        <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            
            <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                        <div class="col-2">
                            <a class="btn btn-primary" href="<?= base_url('admin/create')?>" role="button">Tambah Data</a>
                        </div>
                        <div class="col-2">
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter Jenis
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?= base_url('admin')?>">No Filter</a>
                                    <?php foreach($list_jenis as $jenis): ?>
                                        <a class="dropdown-item" href="<?= base_url('admin/filterJenis?id='.$jenis->id)?>"><?= $jenis->nama ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter Kecamatan
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?= base_url('admin')?>">No Filter</a>
                                    <?php foreach($list_kecamatan as $kecamatan): ?>
                                        <a class="dropdown-item" href="<?= base_url('admin/filterKecamatan?id='.$kecamatan->id)?>"><?= $kecamatan->nama ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table table-bordered table-striped mt-2">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto 1</th>
                        <th scope="col">Foto 2</th>
                        <th scope="col">Foto 3</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Skor Rating</th>
                        <th scope="col">Harga Tiket</th>
                        <th scope="col">Fasilitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $nomor = 1;
                            foreach($list_wisata as $wst){
                        ?>
                            <tr>
                                <td><?=$nomor?></td>
                                <td><img src="<?php echo base_url('uploads/'.$wst->foto1)?>" alt="" width="60"><a class="btn btn-primary btn-sm" href="admin/upload1?id=<?=$wst->id?>" role="button">Upload</a></td>
                                <td><img src="<?php echo base_url('uploads/'.$wst->foto2)?>" alt="" width="60"><a class="btn btn-primary btn-sm" href="admin/upload2?id=<?=$wst->id?>" role="button">Upload</a></td>
                                <td><img src="<?php echo base_url('uploads/'.$wst->foto3)?>" alt="" width="60"><a class="btn btn-primary btn-sm" href="admin/upload3?id=<?=$wst->id?>" role="button">Upload</a></td>
                                <td><?=$wst->nama?></td>
                                <td><?=$wst->alamat?></td>
                                <td><?=$wst->nama_jenis?></td>
                                <td><?=$wst->skor_rating?></td>
                                <td><?=$wst->harga_tiket?></td>
                                <td><?=$wst->fasilitas?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="admin/edit?id=<?=$wst->id?>" role="button">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="admin/delete?id=<?=$wst->id?>" role="button"
                                    onclick="if(!confirm('Anda Yakin Hapus <?=$wst->nama?>?')) {return false}"
                                    >Delete</a>
                                    </td>
                            </tr>
                        <?php
                                $nomor++;
                            }
                        ?>
                    </tbody>
                </table>

            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <?php foreach($list_komentar as $komentar): ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $komentar->username ?></h5>
                                <h6 class="card-title"><?= $komentar->rating ?></h6>
                                <p class="card-text"><?= $komentar->komentar ?></p>
                            </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-warning btn-sm" href="admin/komentar" role="button">Komentar</a>
                </div>
            </div> -->
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