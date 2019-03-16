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
                <h1>Penilaian</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Proposal Masuk</a></li>
                <li class="breadcrumb-item active">Penilaian</li>
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
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#inputNilai" style="float:right; margin-top:-1.6rem; border-radius:0px !important;">Tambah Nilai</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover" style="font-size:10pt; text-align:center; vertical-align:middle;">
                    <thead>
                    <tr>
                    <th style="width:0.1rem;">No.</th>
                    <th style="width:9rem;">NIP</th>
                    <th style="width:5rem;">Tanggal Input</th>
                    <th style="width:10rem;">Komentar</th>
                    <th>Nilai</th>
                    <th style="max-width:9rem;min-width:9rem;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td style="vertical-align:middle;">1</td>
                    <td style="vertical-align:middle;">2019</td>
                    <td style="vertical-align:middle;">10 November 2019</td>
                    <td style="vertical-align:middle;">Ini adalah contoh komentar untuk melakukan penilaian pada proposal di SIMKWU.</td>
                    <td style="vertical-align:middle;">90</td>
                    <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editNilai" style="border-radius:0px !important; color:white;" title="Edit">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusNilai" style="border-radius:0px !important;" title="Hapus">Hapus</button>
                    <?php require_once 'penilaian_modals.php' ?>
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