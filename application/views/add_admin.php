        <div class="col-md-9">
          <div class="profile-content">
            <div class="container-fluid">
              <img src="<?php echo base_url() ?>assets/img/Logo_B4T.png" style="width: 250px;" alt="B4T Logo">
                  <h2 class="page-header" style="font-family: calibri;">Input Data Admin</h2>
                  <a href="<?php echo base_url() ?>Admin/lihat_admin"><button class="btn btn-warning" style="float: right;"><span class="glyphicon glyphicon glyphicon-arrow-left"></span> Kembali</button></a>
                    <br><br><form method="post" action="<?php echo base_url()."Admin/aksi_add"; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="nama">Nama:</label>
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="username">Nama Pengguna:</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna">
                        </div>
                        <div class="form-group">
                          <label for="password">Kata Sandi:</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
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
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="foto"/> <!-- rename it -->
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
          </div>           
        </div>  
                