<!DOCTYPE html>
<html>
<head>
<?php require_once(dirname(dirname(__FILE__)) . '/Include/header.php'); ?>
<?php require_once(dirname(dirname(__FILE__)) . '/Mahasiswa/navbar_mhs.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Usulan Baru</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Pengajuan Judul Tugas Akhir</li>
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
            <form id="msform" style="height:37rem;" method="POST" action="<?php site_url('kegiatan/tambahusulan');  ?>" enctype="multipart/form-data">
            <!-- fieldsets -->
            <fieldset>
                <h2 style="font-size:25pt;">Pengajuan Judul Tugas Akhir</h2>
                <div class="row" style="margin-top:2rem;padding-bottom:1rem;">
                    <div class="col-3" style="margin-top:5px; text-align:left;">
                        Rumpun Matakuliah<span style="color:red;">*</span>
                    </div>
                    <div class="col-6">
                       <select class="form-control" id="bidang" name="bidang" data-fv-field="id_sumber_dana">
                          <option value="" selected disabled>-- Pilih RMK --</option>  
                      </select>
                    </div>
                    <div class="col-3">
                        <span class="error_form" id="bidang_error">
                        </span>
                    </div>
                </div>
                <div class="row" style="padding-bottom:1rem;">
                    <div class="col-3" style="padding-top:5px; text-align:left;">
                        Judul<span style="color:red;">*</span>
                    </div>
                    <div class="col-6">
                        <input type="text" id="Judul" placeholder="Judul Proposal" name="judul" class="form-control aspect_list" required style="border-radius:0px !important;">
                    </div>
                    <div class="col-3">
                        <span class="error_form" id="judul_error">
                        </span>
                    </div>
                </div>
                <div class="row" style="padding-bottom:1rem;">
                    <div class="col-3" style="padding-top:5px; text-align:left;">
                        Abstrak<span style="color:red;">*</span>
                    </div>
                    <div class="col-6">
                        <textarea type="" id="Abstrak" placeholder="Abstrak" name="abstrak" class="form-control aspect_list" required style="border-radius:0px !important;" rows="3"></textarea> 
                    </div>
                    <div class="col-3">
                        <span class="error_form" id="abstrak_error">
                        </span>
                    </div>
                </div>
                <div class="row" style="padding-bottom:1rem;">
                    <div class="col-3" style="padding-top:5px; text-align:left;">
                        Pembimbing<span style="color:red;">*</span>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" name="pembimbing" id="pembimbing" required style="border-radius:0px !important;" value="198510172015042001">
                    </div>
                    <div class="col-3" id="valid_nip">
                        
                    </div>
                </div>
                <input type="button" name="next" class="next2 action-button" value="Submit" />
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

<script >
     $("#pembimbing").focusout(function(){
       var pembimbing = $("#pembimbing").val();
       $.post("<?php echo site_url('SiakadAPI/validationNIP')?>",{
         nip: pembimbing
       },function(data){
          if(data == 0){
              error = 1;
              $("#valid_nip").text('<span class="error_form">NIP is incorrect or not found </span>');
          }
          else{
            error =0;
            $("#valid_nip").html(data);
          } 
        });
     }) ;

    $("#tahun_dana").change(function(){
       var tahun = $(this).val();

        $.ajax({
          url:"<?php echo site_url('Pendanaan/filterSKIM');?>",
          method:"POST",
          data:{tahun:tahun},
          success:function(data){
              $('#sumber_dana').html(data);
          }
       });
    });

    $("#sumber_dana").click(function(){
       var dana = $(this).val();
       var tahun = $('#tahun_dana').val();

        $.ajax({
          url:"<?php echo site_url('Pendanaan/filterSKIM');?>",
          method:"POST",
          data:{tahun:tahun, dana:dana},
          success:function(data){
              $('#skim').html(data);
          }
       });
    });

    $("#dana").keyup(function(){

        var d =  parseInt($(this).val()) ;
        var n = d.toLocaleString('en-DE');       
         document.getElementById("amount").innerHTML = "Rp." + n;
    });


    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than 5Mb');  

    jQuery(function ($) {
        "use strict";
        $('#msform').validate({
            rules: {
                proposal: {
                    required: true,
                    extension: "pdf|docx|doc",
                    filesize: 5120000,
                }
            },
        });
    });


});
  </script>z
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.js"></script>
