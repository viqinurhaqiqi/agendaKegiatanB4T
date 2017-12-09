        <div class="col-md-9">
          <div class="profile-content">
            <div class="container-fluid">
              <img src="<?php echo base_url() ?>assets/img/Logo_B4T.png" style="width: 250px;" alt="B4T Logo">
                  <h2 class="page-header" style="font-family: calibri;">Edit Data Admin</h2>
                  <a href="<?php echo base_url() ?>Admin/lihat_admin"><button class="btn btn-warning" style="float: right;"><span class="glyphicon glyphicon glyphicon-arrow-left"></span> Kembali</button></a>
                    <br><br>
                          <?php 
                            foreach ($admin as $m) {  
                          ?>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."Admin/aksi_edit"; ?>">
                              <div class="form-group">
                                <label for="id">Id:</label>
                                <input type="text" class="form-control" value="<?php echo $m->id ?>" name="id" placeholder="Id">
                              </div>
                              <div class="form-group">
                                <label for="nama">Nama:</label>
                                <?php 
                                    echo form_input(array('type' =>'hidden',
                                                            'name'=> 'id_lama',
                                                            'value'=>$m->id)
                                                    );
                                    $att = array('name'=>'nama',
                                                    'class'=>'form-control',
                                                    'type'=>'text',
                                                    'placeholder'=>'Name',
                                                    'value'=>$m->nama);
                                    echo form_input($att);
                                 ?>
                              </div>
                              <div class="form-group">
                                <label for="email">Email:</label>
                                <?php 
                                    $att = array('name'=>'email',
                                                    'class'=>'form-control',
                                                    'type'=>'email',
                                                    'placeholder'=>'Email',
                                                    'value'=>$m->email);
                                    echo form_input($att);
                                 ?>
                              </div>
                              <div class="form-group">
                                <label for="username">Username:</label>
                                <?php 
                                    $att = array('name'=>'usernmae',
                                                    'class'=>'form-control',
                                                    'type'=>'text',
                                                    'placeholder'=>'Username',
                                                    'value'=>$m->username);
                                    echo form_input($att);
                                 ?>
                              </div>
                              <div class="form-group">
                                <label for="password">Password:</label>
                                <?php 
                                    $att = array('name'=>'password',
                                                    'class'=>'form-control',
                                                    'type'=>'text',
                                                    'placeholder'=>'Password',
                                                    'value'=>$m->password);
                                    echo form_input($att);
                                 ?>
                              </div>
                              <div class="form-group">
                               <label for="foto">Foto</label>
                               <?php          
                                 $att = array('name' => 'foto',
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
          </div>           
        </div>  
                