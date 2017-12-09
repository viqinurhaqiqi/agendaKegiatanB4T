<style type="text/css">
  table.scroll {
    font:12px;
    font-family: calibri;
    color:#006E51;
  }

  table.scroll tbody {
    display:block;
    height:460px;
    overflow:auto;
    float:left;
  }

</style>

<div class="container-fluid bg-3 text-center">
  <div class="panel panel-default">
    <div class="panel-body">
    <div class="col-md-8">
    <div class="">
      <div class="">
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <?php 
                foreach($jadwal_random as $u){ 
              ?>
              <?php echo"<img src = '".base_url()."foto/".$u->gambar."' style ='width:1000px; height: 500px;' class =''>"?>
              <div class="back">
                
              </div>
              <div class="carousel-caption">
                <h3><?php echo $u->judul ?></h3>
                <p><?php echo $u->date ?></p>
              </div>
            </div>
            <?php } ?>
            <div class="item">
              <?php 
                foreach($jadwal_random1 as $u){ 
              ?>
              <?php echo"<img src = '".base_url()."foto/".$u->gambar."' style ='width:1000px; height: 500px;' class =''>"?>
              <div class="carousel-caption">
                <h3><?php echo $u->judul ?></h3>
                <p><?php echo $u->date ?></p>
              </div>
            </div>
            <?php } ?>
            <div class="item">
              <?php 
                foreach($jadwal_random2 as $u){ 
              ?>
              <?php echo"<img src = '".base_url()."foto/".$u->gambar."' style ='width:1000px; height: 500px;' class =''>"?>
              <div class="carousel-caption">
                <h3><?php echo $u->judul ?></h3>
                <p><?php echo $u->date ?></p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>  
      </div>
    </div> 
  </div> 

  <div class="col-md-4">
    <div class="">
      <div class="">
          <table class="table table-responsive data scroll">
            <thead>
              <tr>
                <th>Daftar Kegiatan B4T</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=1;
                foreach ($jadwal as $k) {
                echo "<tr>
                  <td>$no</td>
                  <td style='width:100px;'>$k->date</td>
                  <td>$k->judul</td>
                  <td>$k->deskripsi</td>
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
  

  <div class="modal fade" id="myModal" role="dialog" style="margin-top: 200px;">
    <div class="modal-dialog modal-m">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rincian Jadwal</h4>
        </div>
        <div class="modal-body" align="left">
          <ul class="list-group">
            <li class="list-group-item">Jadwal 1</li>
            <li class="list-group-item">Jadwal 2</li>
            <li class="list-group-item">Jadwal 3</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
</div>