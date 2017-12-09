<!DOCTYPE html>
<html lang="en">
<head>
  <title>Agenda B4T</title>
<?php
  $jumlah_data = 0;
  $waktu_refresh = 18;
  foreach ($jadwal_trkhr as $key) {
    $jumlah_data++;
  }
  foreach ($jadwal_besok as $key) {
    $jumlah_data++;
  }
  foreach ($jadwal_besoknya as $key) {
    $jumlah_data++;
  }
  for ($i = 1;$i<=$jumlah_data;$i++) {
    if($i == 1){
      $waktu_refresh = 18;
    }else{
      $waktu_refresh += 16;
    }
  }
?>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="<?php echo $waktu_refresh; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logob4t.png">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php  echo base_url() ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php  echo base_url() ?>/assets/css/style1.css">
  <link rel="stylesheet" href="<?php  echo base_url() ?>/assets/css/jquery-ui.css">
  <script src="<?php  echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?php  echo base_url() ?>assets/js/jquery-ui.js"></script>
  <script src="<?php  echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <link href='<?php  echo base_url() ?>assets/css/fullcalendar.min.css' rel='stylesheet' />
  <link href='<?php  echo base_url() ?>assets/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src='<?php  echo base_url() ?>assets/js/moment.min.js'></script>
  <script src='<?php  echo base_url() ?>assets/js/fullcalendar.min.js'></script>
</head>
<body>
