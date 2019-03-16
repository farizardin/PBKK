<!-- Hapus SKIM -->
<div class="modal fade" id="hapusNilai">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 class="modal-title">Perhatian!</h4>
    
    <button type="button" class="close" data-dismiss="modal">&times;</button>

    </div>
    
    <!-- Modal body -->
    <div class="modal-body" style="padding-top:3rem;padding-bottom:3rem;">
        <span id="judul" style="font-size:15pt;">Apakah anda yakin akan menghapus nilai ini?</span>
    </div>
    
    <!-- Modal footer -->
    <div>
        <form action="" method="post">
            <div class="row" style="padding-left:7rem;padding-right:7rem;padding-bottom:2rem;">
              <div class="col">
                <input type="submit" id="confirm" name="submit" value="Hapus" style="border-radius:0px !important;margin:auto; width:5rem;" class="btn btn-primary">
              </div>
              <div class="col">
              <button type="button" data-dismiss="modal" style="margin:auto; width:5rem; border-radius:0px !important;" class="btn btn-danger">Batal</button>
              </div>
            </div> 
        </form>
    </div>                                                    
</div>
</div>
</div>

<!-- Tambah Nilai -->
<div class="modal fade" id="inputNilai">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">Penilaian  </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="form-group">
            <span style="float:left; padding-top: 5px; font-weight: bold;  margin-left: 20px;" id="judul"></span>
            <form action="<?php echo site_url('Petugas/confirmProposal')?>" method="post">
                <div class="row" style="width:100%; padding-left: 2rem;">
                    <div class="col">
                        <label style="float:left; padding-top:5px; padding-left: 5px;">NIP<span style="color: red"> *</span></label>
                        <input type="number" style="border-radius:0px !important;" class="form-control" name="dana" id="dana" required>
                        <label style="float:left; padding-top:5px; padding-left: 5px;">Nilai Aspek 1<span style="color: red"> *</span></label>
                        <input type="number" style="border-radius:0px !important;" class="form-control" name="dana" id="dana" required>
                        <label style="float:left; padding-top:5px; padding-left: 5px;">Nilai Aspek 2<span style="color: red"> *</span></label>
                        <input type="number" style="border-radius:0px !important;" class="form-control" name="dana" id="dana" required>
                        <label style="float:left; padding-top:5px; padding-left: 5px;">Nilai Aspek 3<span style="color: red"> *</span></label>
                        <input type="number" style="border-radius:0px !important;" class="form-control" name="dana" id="dana" required>
                        <label for="comment" style="float:left; padding-top:5px; padding-left: 5px;">Komentar<span style="color: red"> *</span></label>
                        <textarea class="form-control" style="border-radius:0px !important;" rows="5" id="comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_proposal" name="id_proposal" value="" >
                    <input type="submit" id="submit" name="submit" value="Submit" style="border-radius:0px !important; margin:auto" class="btn btn-primary">
                </div>
            </form>
        </div>                                                                                                      
    </div>
    </div>
</div>

<!-- Edit Nilai -->
<div class="modal fade" id="editNilai">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">Edit Nilai</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="form-group">
            <span style="float:left; padding-top: 5px; font-weight: bold;  margin-left: 20px;" id="judul"></span>
            <form action="<?php echo site_url('Petugas/confirmProposal')?>" method="post">
                <div class="row" style="width:100%; padding-left: 2rem;">
                    <div class="col">
                        <label style="float:left; padding-top:5px; padding-left: 5px;">Nilai Aspek 1<span style="color: red"> *</span></label>
                        <input type="number" style="border-radius:0px !important;" class="form-control" name="dana" id="dana" required>
                        <label style="float:left; padding-top:5px; padding-left: 5px;">Nilai Aspek 2<span style="color: red"> *</span></label>
                        <input type="number" style="border-radius:0px !important;" class="form-control" name="dana" id="dana" required>
                        <label style="float:left; padding-top:5px; padding-left: 5px;">Nilai Aspek 3<span style="color: red"> *</span></label>
                        <input type="number" style="border-radius:0px !important;" class="form-control" name="dana" id="dana" required>
                        <label for="comment" style="float:left; padding-top:5px; padding-left: 5px;">Komentar<span style="color: red"> *</span></label>
                        <textarea class="form-control" style="border-radius:0px !important;" rows="5" id="comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_proposal" name="id_proposal" value="" >
                    <input type="submit" id="submit" name="submit" value="Submit" style="border-radius:0px !important; margin:auto" class="btn btn-primary">
                </div>
            </form>
        </div>                                                                                                      
    </div>
    </div>
</div>