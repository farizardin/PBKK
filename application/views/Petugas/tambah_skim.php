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
                <h1>Tambah Skim</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Tambah SKIM</li>
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
                <!-- /.card-header -->
                <div class="card-body">
                        <!-- Grid -->
            <form id="msform" style="height:33rem;">
            <!-- progressbar -->
            <ul id="progressbar" style="padding-left:15rem;padding-right:15rem;">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 style="font-size:25pt;">Data SKIM</h2>
                
                <div class="row" style="padding-bottom:1rem;">
                    <div class="col-2" style="padding-top:5px; float:left; text-align:left;">
                        Tahun
                    </div>
                    <div class="col">
                        <select class="form-control" id="skim" name="skim" data-fv-field="id_sumber_dana" style="border-radius:0px !important;">
                            <option value="" selected disabled>-- Tahun --</option>
                            <option value="1">2019</option>
                            <option value="2">2020</option>
                            <option value="3">2021</option>
                            <option value="4">2022</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="padding-bottom:1rem;">
                    <div class="col-2" style="padding-top:5px; text-align:left;">
                        Kode Sumber
                    </div>
                    <div class="col">
                        <input type="text" id="kodesumber" placeholder="Kode Sumber" class="form-control aspect_list" required style="border-radius:0px !important;">
                    </div>
                </div>
                <div class="row" style="padding-bottom:1rem;">
                    <div class="col-2" style="padding-top:5px; text-align:left;">
                        Nama Sumber
                    </div>
                    <div class="col">
                        <input type="text" id="kodesumber" placeholder="Kode Sumber" class="form-control aspect_list" required style="border-radius:0px !important;">
                    </div>
                </div>
                <div class="row" style="padding-bottom:1rem;">
                    <div class="col-2" style="padding-top:5px; text-align:left;">
                        SKIM
                    </div>
                    <div class="col">
                        <input type="text" id="kodesumber" placeholder="Kode Sumber" class="form-control aspect_list" required style="border-radius:0px !important;">
                    </div>
                </div>
                <div class="row" style="padding-bottom:1rem;">
                    <div class="col-2" style="padding-top:5px; text-align:left;">
                        Tanggal Mulai
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="tgl_transfer" id="tglmulai" required style="border-radius:0px !important;">
                    </div>
                </div>
                <div class="row" style="padding-bottom:1rem;">
                    <div class="col-2" style="padding-top:5px; text-align:left;">
                        Tanggal Selesai
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="tgl_transfer" id="tglselesai" required style="border-radius:0px !important;">
                    </div>
                </div>
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
                <div>
                    <h2 style="font-size:25pt;">Agenda</h2>
                    <button type="button" class="btn btn-primary btn-sm" id="add" name="add" style="float:right; margin-top:-2.5rem; border-radius:0px !important;">Tambah</button>
                    <div class="row">
                        <div class="col-3" style="margin:auto">
                            <label for="">Nama Agenda</label>
                        </div>
                        <div class="col-3" style="margin:auto">
                            <label for="">Tanggal Mulai</label>
                        </div>
                        <div class="col-3" style="margin:auto">
                            <label for="">Tanggal Selesai</label>
                        </div>
                        <div class="col-1" style="margin:auto">
                        </div>
                    </div>
                    <div id="dynamic_field">
                    <div class="row" style="padding-bottom:1rem;">
                        <div class="col-3" style="margin:auto">
                        <input type="text" id="namaagenda" name="namaagenda[]" placeholder="Nama Agenda" class="form-control agenda_list" required style="border-radius:0px !important; text-align:center;">
                        </div>
                        <div class="col-3" style="margin:auto">
                        <input type="text" id="tglmulai" name="tglmulaiagenda[]" placeholder="Tanggal Mulai" class="form-control agenda_list" required style="border-radius:0px !important;text-align:center;">
                        </div>
                        <div class="col-3" style="margin:auto">
                        <input type="text" id="tglselesai" name="tglselesaiagenda[]" placeholder="Tanggal Selesai" class="form-control agenda_list" required style="border-radius:0px !important;text-align:center;">
                        </div>
                        <div class="col-1" style="margin:auto">
                        </div>
                    </div>
                    </div>
                    </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
            <h2 style="font-size:25pt;">Aspek Penilaian Tambahan</h2>
                    <button type="button" class="btn btn-primary btn-sm" id="add2" name="add2" style="float:right; margin-top:-2.5rem; border-radius:0px !important;">Tambah</button>
                    <div id="dynamic_field2">
                    <div class="row" style="padding-bottom:1rem;">
                        <div class="col-8" style="margin:auto; padding-left:22.5%;">
                        <input type="text" id="aspekpenilaiantambahan" name="aspekpenilaiantambahan[]" placeholder="Tambahkan Aspek Penilaian Opsional" class="form-control aspekopsional_list" required style="border-radius:0px !important; text-align:center;">
                        </div>
                        <div class="col-1" style="margin:auto">
                        </div>
                    </div>
                    </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
            </form>
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
    <script type="text/javascript">
    $(document).ready(function () {
        $('#tglmulai').datepicker({
            language: 'id',
            format: "dd/mm/yyyy",
            autoclose:true
        });
    });
    $(document).ready(function () {
        $('#tglselesai').datepicker({
            language: 'id',
            format: "dd/mm/yyyy",
            autoclose:true
        });
    });
</script>
<script>
    $(document).ready(
        function(){
            var i = 1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<div class="row" id="row'+i+'" style="padding-bottom:1rem;"><div class="col-3" style="margin:auto"><input type="text" id="namaagenda" name="namaagenda[]" placeholder="Nama Agenda" class="form-control agenda_list" required style="border-radius:0px !important; text-align:center;"></div><div class="col-3" style="margin:auto"><input type="text" id="tglmulaiagenda'+i+'" name="tglmulaiagenda[]" placeholder="Tanggal Mulai" class="form-control agenda_list" required style="border-radius:0px !important;text-align:center;"></div><div class="col-3" style="margin:auto"><input type="text" id="tglselesaiagenda'+i+'" name="tglselesaiagenda[]" placeholder="Tanggal Selesai" class="form-control agenda_list" required style="border-radius:0px !important;text-align:center;"></div><div class="col-1" style="margin:auto"><button type="button" class="btn btn-danger btn-sm btn_remove" id="'+i+'" name="remove" style="float:right; border-radius:0px !important;"><i class="right fa fa-times"></i></button></div></div>');
                    $(document).ready(function () {
                        $('#tglmulaiagenda'+i+'').datepicker({
                            language: 'id',
                            format: "dd/mm/yyyy",
                            autoclose:true
                        });
                    });
                    $(document).ready(function () {
                        $('#tglselesaiagenda'+i+'').datepicker({
                            language: 'id',
                            format: "dd/mm/yyyy",
                            autoclose:true
                        });
                    });
            });
            $(document).on('click', '.btn_remove', function(){
                i--;
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
        });
</script>
<script>
    $(document).ready(
        function(){
            var x = 1;
            $('#add2').click(function(){
                x++;
                $('#dynamic_field2').append('<div class="row" id="row2'+x+'" style="padding-bottom:1rem;"><div class="col-8" style="margin:auto; padding-left:22.5%;"><input type="text" id="aspekpenilaiantambahan" name="aspekpenilaiantambahan[]" placeholder="Tambahkan Aspek Penilaian Opsional" class="form-control aspekopsional_list" required style="border-radius:0px !important; text-align:center;"></div><div class="col-1" style="margin:auto"><button type="button" class="btn btn-danger btn-sm btn_remove2" id="'+x+'" name="remove2" style="float:right; border-radius:0px !important;"><i class="right fa fa-times"></i></button></div></div>');
            });
            $(document).on('click', '.btn_remove2', function(){
                x--;
                var button_id2 = $(this).attr("id");
                $('#row2'+button_id2+'').remove();
            });
        });
</script>