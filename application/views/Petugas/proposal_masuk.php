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
                <h1>Proposal Masuk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Proposal Masuk</li>
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
                <h3 class="card-title">Proposal Masuk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover" style="font-size:10pt; text-align:center; vertical-align:middle;">
                    <thead>
                    <tr>
                    <th style="width:0.1rem;">No.</th>
                    <th>Judul</th>
                    <th>Bidang</th>
                    <th>Tahun Aktif</th>
                    <th>Status</th>
                    <th style="max-width:14rem;min-width:14rem;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td style="vertical-align:middle;">1</td>
                    <td style="vertical-align:middle;">Judu;</td>
                    <td style="vertical-align:middle;">Bidang</td>
                    <td style="vertical-align:middle;">2019SM</td>
                    <td style="vertical-align:middle;">Sedang Berlangsung</td>
                    <td>
                    <a href="<?php echo base_url("Petugas/DetailProposal") ?>"><button type="button" class="btn btn-primary btn-sm" style="border-radius:0px !important;" title="Detail">Detail</button></a>
                    <a href="<?php echo base_url("Petugas/PenilaianProposal") ?>"><button type="button" class="btn btn-info btn-sm" style="border-radius:0px !important;" title="Detail">Penilaian</button></a>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#terimaProposal" style="border-radius:0px !important; color:white;" title="Edit">Setujui</button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#tolakProposal" style="border-radius:0px !important;" title="Hapus">Tolak</button>
                    <?php require_once 'proposal_modals.php' ?>
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