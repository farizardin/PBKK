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
                <h1>Agenda</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Agenda</li>
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
                <h3 class="card-title">Agenda</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover" style="font-size:10pt; text-align:center; vertical-align:middle;">
                    <thead>
                    <tr>
                    <th style="width:0.1rem;">No.</th>
                    <th>Nama SKIM</th>
                    <th>Nama Tahap</th>
                    <th>Jadwal Mulai</th>
                    <th>Jadwal Selesai</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td style="vertical-align:middle;">1</td>
                    <td style="vertical-align:middle;">Hiyaa</td>
                    <td style="vertical-align:middle;">Tahaap</td>
                    <td style="vertical-align:middle;">Sekarang</td>
                    <td style="vertical-align:middle;">Kemarin</td>
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