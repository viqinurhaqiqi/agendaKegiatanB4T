<div class="container-fluid">
<div class="col-sm-8">
<?php
			$nomor = 1;
			foreach ($jadwal as $k) {
?>
	<div id="details_jadwal<?php echo $nomor; ?>">
		<div class="col-md-8">
			<div class="col-md-4">
				<p><?php echo $nomor; ?></p>
			</div>
			<div class="col-md-8">
				<h1><?php echo $k->judul; ?></h1>
				<h3 style="margin-left: 50px;"><?php echo $k->venue; ?></h3>
			</div>
			<div class="hentikan_float">
			
			</div>
		</div>
		<div class="col-md-8">
			<div class="isi">
				<h2>Deskripsi</h2>
				<p><?php echo $k->deskripsi; ?></p>
			</div>
			<div class="isiWaktu">
				<h2>Waktu</h2>
				<h3>Dilaksanakan : <?php echo $k->date." s/d ".$k->date_end; ?></h3>
			</div>
		</div>
	</div>
	<?php
		$nomor++;
	}
		?>

<?php
	foreach ($jadwal_besok as $k) {
?>
	<div id="details_jadwal<?php echo $nomor; ?>">
		<div class="col-md-8">
			<div class="col-md-4">
				<p><?php echo $nomor; ?></p>
			</div>
			<div class="col-md-8">
				<h1><?php echo $k->judul; ?></h1>
				<h3 style="margin-left: 50px;"><?php echo $k->venue; ?></h3>
			</div>
			<div class="hentikan_float">
			
			</div>
		</div>
		<div class="col-md-8">
			<div class="isi">
				<h2>Deskripsi</h2>
				<p><?php echo $k->deskripsi; ?></p>
			</div>
			<div class="isiWaktu">
				<h2>Waktu</h2>
				<h3>Dilaksanakan : <?php echo $k->date." s/d ".$k->date_end; ?> </h3>
			</div>
		</div>
	</div>
	<?php
		$nomor++;
	}
		?>

<?php
	foreach ($jadwal_besoknya as $k) {
?>
	<div id="details_jadwal<?php echo $nomor; ?>">
		<div class="col-md-8">
			<div class="col-md-4">
				<p><?php echo $nomor; ?></p>
			</div>
			<div class="col-md-8">
				<h1><?php echo $k->judul; ?></h1>
				<h3 style="margin-left: 50px;"><?php echo $k->venue; ?></h3>
			</div>
			<div class="hentikan_float">
			
			</div>
		</div>
		<div class="col-md-8">
			<div class="isi">
				<h2>Deskripsi</h2>
				<p><?php echo $k->deskripsi; ?></p>
			</div>
			<div class="isiWaktu">
				<h2>Waktu</h2>
				<h3>Dilaksanakan : <?php echo $k->date." s/d ".$k->date_end; ?></h3>
			</div>
		</div>
	</div>
	<?php
		$nomor++;
	}
		?>		

</div >
<div class="col-md-4">
	<div class="list_agenda">
		<div class="floatright">
		 	<img src="<?php echo base_url() ?>assets/img/Logo_B4T.png"  alt="b4t" class="logo">
		 	<h5>List Jadwal</h5>
		 	<hr style="border-color: #010033;"></hr>
		 	<?php
		 	$no = 1;
		 		foreach ($jadwal_trkhr as $key) {
		 	?>
		 	<div class="list1">
		 		<a class="btn btn-success btn-xs btn-block active" id="list_jadwal" enabled><span><?php echo $key->judul; ?></span></a>
		 	</div>
		 <?php
		 	}	
		 ?>
		 <?php
		 	$no = 1;
		 		foreach ($jadwal_besok as $key) {
		 	?>
		 	<div class="list1">
		 		<a class="btn btn-success btn-xs btn-block active" id="list_jadwal" enabled><span><?php echo $key->judul; ?></span></a>
		 	</div>
		 <?php
		 	}	
		 ?>
		 <?php
		 	$no = 1;
		 		foreach ($jadwal_trkhr as $key) {
		 	?>
		 	<div class="list1">
		 		<a class="btn btn-success btn-xs btn-block active" id="list_jadwal" enabled><span><?php echo $key->judul; ?></span></a>
		 	</div>
		 <?php
		 	}	
		 ?>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		//inisialisasi
		var daftarlist1 = $(".list1 #list_jadwal");
		var daftarlist2 = $(".list2 #list_jadwal");
		var daftarlist3 = $(".list3 #list_jadwal");
		var jum1 = 0;
		var jum2 = 0;
		var jum3 = 0;
		var isi = 0;
		var masuk = 2000;
		var tampil = 12000;
		var keluar = 200;
		var tunggu = 174000;
		var pembuka = 16000;


		//pengambilan jumlah data di front kiri
		for (var i = 0; i < daftarlist1.length; i++) {
			jum1+=1;
		}
		for (var i = 0; i < daftarlist2.length; i++) {
			jum2+=1;
		}
		for (var i = 0; i < daftarlist3.length; i++) {
			jum3+=1;
		}
		isi = jum1+jum2+jum3;
		for(var i =0;i<=isi;i++){
			$('#details_jadwal'+i).hide();
		}
		$('#details_jadwal'+i).hide();

		setInterval(function(){
				for (var j = 1; j <= isi; j++) {
					if(j == 1){

						$('#details_jadwal'+j).fadeIn(masuk)
									 		  .delay(tampil)
											  .fadeOut(keluar)
											  .delay(tunggu);



					}else if(j == 2){
						tunggu -= 10000;
						$('#details_jadwal'+j).delay(pembuka)
									 		  .fadeIn(masuk)
									 		  .delay(tampil)
									 		  .fadeOut(keluar)
									 		  .delay(tunggu);

						
					}else{
						pembuka += 16000;
						tunggu -= 10000;
						$('#details_jadwal'+j).delay(pembuka)
									 		  .fadeIn(masuk)
						 			 		  .delay(tampil)
									 		  .fadeOut(keluar)
									 		  .delay(tunggu);
					}
				}
			}, 30);
		
	});
</script>
</body>