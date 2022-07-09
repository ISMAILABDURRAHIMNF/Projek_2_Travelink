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
                <h1 class="m-0">Edit Foto Wisata 2</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit Wisata</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>


        <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            

            <?php echo form_open_multipart('admin/upload_foto2');?>

            <input type="hidden" name="id" value="<?= $wstedit->id ?>">
            <input type="file" name="foto2" size="20" />

            <br /><br />

            <button name="submit" type="submit"class="btn btn-primary">Upload</button>

            <?php echo form_close();?>
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