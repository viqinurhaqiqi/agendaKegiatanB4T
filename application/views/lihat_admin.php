        <div class="col-md-9">
            <div class="profile-content">
                <div class="container-fluid">
                  <img src="<?php echo base_url() ?>assets/img/Logo_B4T.png" style="width: 250px;" alt="B4T Logo">
                  <h2 class="page-header" style="font-family: calibri;">Data Admin</h2>
                    <div class="panel panel-success">
                        <div class="panel-heading"><a href="<?php echo base_url() ?>Admin/add"><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</button></a></div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered data">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama </th>
                                                <th>Email </th>
                                                <th>Username</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no=1;
                                            foreach ($admin as $k) {
                                                echo "<tr>
                                                        <td>$no</td>
                                                        <td>$k->nama</td>
                                                        <td>$k->email</td>
                                                        <td>$k->username</td>
                                                          <td>
                                                            <a href = '".base_url()."Admin/edit/".$k->id."'><button type='button' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button></a> 
                                                            <a href = '".base_url()."Admin/hapus/".$k->id."' onclick='return confirm(\"Anda yakin akan menghapusnya?\")'><button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button></a>
                                                          </td>
                                                    </tr>";
                                                $no++;
                                                
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
