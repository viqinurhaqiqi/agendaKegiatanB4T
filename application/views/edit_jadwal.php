        <div class="col-md-9">
          <div class="profile-content">
            <div class="container-fluid">
              <img src="<?php echo base_url() ?>assets/img/Logo_B4T.png" style="width: 250px;" alt="B4T Logo">
                  <h2 class="page-header" style="font-family: calibri;">Edit Agenda Kegiatan</h2>
                  <a href="<?php echo base_url() ?>Admin/lihat_jadwal"><button class="btn btn-warning" style="float: right;"><span class="glyphicon glyphicon glyphicon-arrow-left"></span> Kembali</button></a>
                    <br><br>
                    <div class="col-md-7">
                          <?php 
                            foreach ($jadwal as $m) {  
                          ?>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."Admin/aksi_edit_jadwal"; ?>">
                              <div class="form-group">
                                <label for="kode_jadwal">Kode Jadwal:</label>
                                <input type="text" class="form-control" value="<?php echo $m->kode_jadwal ?>" name="kode_jadwal" placeholder="Kode Jadwal">
                              </div>
                              <div class="form-group">
                                <label for="date">Tanggal:</label>
                                <?php 
                                    echo form_input(array('type' =>'hidden',
                                                            'name'=> 'kode_lama',
                                                            'value'=>$m->kode_jadwal)
                                                    );
                                    $att = array('name'=>'date',
                                                    'class'=>'form-control',
                                                    'type'=>'text',
                                                    'placeholder'=>'Tanggal Awal',
                                                    'id' => 'tanggal',
                                                    'value'=>$m->date);
                                    echo form_input($att);
                                    echo "<br>";
                                    $att = array('name'=>'date_end',
                                                    'class'=>'form-control',
                                                    'type'=>'text',
                                                    'placeholder'=>'Tanggal Akhir',
                                                    'id' => 'tanggalAkhir',
                                                    'value'=>$m->date_end);
                                    echo form_input($att);
                                 ?>
                              </div>
                              <div class="form-group">
                                <label for="judul">Tempat:</label>
                                <?php 
                                    $att = array('name'=>'venue',
                                                    'class'=>'form-control',
                                                    'type'=>'text',
                                                    'placeholder'=>'Tempat',
                                                    'value'=>$m->venue);
                                    echo form_input($att);
                                 ?>
                              </div>
                              <div class="form-group">
                                <label for="judul">Judul Kegiatan:</label>
                                <?php 
                                    $att = array('name'=>'judul',
                                                    'class'=>'form-control',
                                                    'type'=>'text',
                                                    'placeholder'=>'Nama Kegiatan',
                                                    'value'=>$m->judul);
                                    echo form_input($att);
                                 ?>
                              </div>
                              <div class="form-group">
                                <label for="deskripsi">Deskripsi Kegiatan:</label>
                                <?php 
                                    $att = array('name'=>'deskripsi',
                                                    'class'=>'form-control',
                                                    'type'=>'textarea',
                                                    'placeholder'=>'Username',
                                                    'value'=>$m->deskripsi);
                                    echo form_input($att);
                                 ?>
                              </div>
                              <div class="form-group">
                               <label for="gambar">Foto</label>
                               <?php          
                                 $att = array('name' => 'gambar',
                                              'class'=> 'form-control',
                                              'type' => 'file'
                                              );
                                 echo form_input($att);
                               ?>
                              </div>
                              <div class="form-group">
                                <?php 
                                    $att = array('class'=>'btn btn-success',
                                                    'type'=>'submit',
                                                    'style'=>'width: 20%',
                                                    'value'=>'SIMPAN');
                                    echo form_input($att);
                                 ?>
                                <?php 
                                    $att = array('class'=>'btn btn-default',
                                                    'type'=>'reset',
                                                    'style'=>'width: 20%',
                                                    'value'=>'RESET');
                                    echo form_input($att);
                                 ?>
                              </div>
                            </form>
                            <?php 
                            } ?>
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
                