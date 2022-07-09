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
                <h1 class="m-0">Daftar Komentar </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Wisata</a></li>
                <li class="breadcrumb-item active">Komentar</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>


        <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            
            <div class="row">
                <table class="table table-bordered table-striped mt-2">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Tempat Wisata</th>
                        <th scope="col">Rating (No/Ket)</th>
                        <th scope="col">Username</th>
                        <th scope="col">Isi Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $nomor = 1;
                            foreach($list_komentar as $komentar){
                        ?>
                            <tr>
                                <td><?=$nomor?></td>
                                <td><?=$komentar->tanggal?></td>
                                <td><?=$komentar->nama_wisata?></td>
                                <td><?=$komentar->nilai_rating_id?>/<?=$komentar->rating?></td>
                                <td><?=$komentar->username?></td>
                                <td><?=$komentar->isi?></td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="admin/delete?id=<?=$komentar->id?>" role="button"
                                    onclick="if(!confirm('Anda yakin hapus komentar <?=$komentar->username?>?')) {return false}"
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