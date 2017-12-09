        <div class="col-md-9">
          <div class="profile-content">
            <div class="container-fluid">
              <img src="<?php echo base_url() ?>assets/img/Logo_B4T.png" style="width: 250px;" alt="B4T Logo">
                  <h2 class="page-header" style="font-family: calibri;">Input Agenda Kegiatan</h2>
                  <a href="<?php echo base_url() ?>Admin/lihat_jadwal"><button class="btn btn-warning" style="float: right;"><span class="glyphicon glyphicon glyphicon-arrow-left"></span> Kembali</button></a>
                    <br><br>
                    <div class="col-md-7">
                      <form method="post" action="<?php echo base_url()."Admin/aksi_add_jadwal"; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="waktu">Tanggal:</label>
                            <input type="text" class="form-control" placeholder="Tanggal Awal" name="date" id="tanggal">
                            <br>
                            <input type="text" class="form-control" placeholder="Tanggal Akhir" name="date_end" id="tanggalAkhir">
                        </div>
                        <div class="form-group">
                          <label for="venue">Tempat:</label>
                          <input type="text" class="form-control" id="venue" name="venue" placeholder="Tempat">
                        </div>
                        <div class="form-group">
                          <label for="judul">Judul Kegiatan:</label>
                          <input type="text" class="form-control" id="email" name="judul" placeholder="Nama Kegiatan">
                        </div>
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi:</label>
                          <textarea class="form-control" rows="5" id="comment" name="deskripsi" placeholder="Deskripsi kegiatan yang akan dilaksanakan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto: </label>
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                <span class="input-group-btn">
                                    <!-- image-preview-clear button -->
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Hapus
                                    </button>
                                    <!-- image-preview-input -->
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Cari Gambar</span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="gambar"/> <!-- rename it -->
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-success" name="simpan" value="simpan" style="width: 20%">Simpan</button>
                          <button type="reset" class="btn btn-default" name="reset" value="reset" style="width: 20%">Reset</button>
                        </div>
                  </form> 
                </div>
                <div class="col-md-5">
                  <br>
                  <div class="panel panel-default">
                    <div class="panel-heading">Kalender</div>
                    <div class="panel-body">
                      <div id='calendar'></div>
                    </div>
                  </div>
                </div>
            </div>
          </div>           
        </div>  
                