<!DOCTYPE html>
<html>
<head>
<?php require_once(dirname(dirname(__FILE__)) . '/Include/header.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php require_once 'navbar_petugas.php' ?>
  <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data SKIM</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data SKIM</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col">
            <div class="card table-responsive" style="border-radius: 0px !important;">
                <div class="card-header">
                <h3 class="card-title">Data SKIM</h3>
                <a href="<?php echo base_url("Petugas/TambahSkim") ?>"><button type="button" class="btn btn-primary btn-sm" style="float:right; margin-top:-1.6rem; border-radius:0px !important;">Tambah</button></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover" style="font-size:10pt; text-align:center; vertical-align:middle;">
                    <thead>
                    <tr>
                    <th style="width:0.1rem;">No.</th>
                    <th>Tahun</th>
                    <th>Kode Sumber</th>
                    <th>Nama Sumber</th>
                    <th>SKIM</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th style="max-width:9rem;min-width:9rem;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td style="vertical-align:middle;">1</td>
                    <td style="vertical-align:middle;">2019</td>
                    <td style="vertical-align:middle;">D12019</td>
                    <td style="vertical-align:middle;">Lokal ITS</td>
                    <td style="vertical-align:middle;">TEST</td>
                    <td style="vertical-align:middle;">10 November 2019</td>
                    <td style="vertical-align:middle;">10 Desember 2019</td>
                    <td>
                    <button type="button" class="btn btn-primary btn-sm" style="border-radius:0px !important;" title="Detail">Detail</button>
                    <button type="button" class="btn btn-warning btn-sm" style="border-radius:0px !important; color:white;" title="Edit">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusSKIM" style="border-radius:0px !important;" title="Hapus">Hapus</button>
                    <?php require_once 'skim_modal.php' ?>
                    </td>
                    </tr>
                    </tfoot>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once(dirname(dirname(__FILE__)) . '/Include/footer.php'); ?>