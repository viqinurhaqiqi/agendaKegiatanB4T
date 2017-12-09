<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logob4t.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/style_login.css">
  <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/jquery-ui.css">
  <script src="<?php  echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?php  echo base_url() ?>assets/js/jquery-ui.js"></script>
  <script src="<?php  echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="fullscreen_bg" class="fullscreen_bg"/>

  <div class="container">

    <br><br><br><br>
    <?php echo $status_login ?>
    <div class="transparent text-center">
      <form class="form-signin" method="POST" action="<?php echo base_url() ?>login/act_login">
        <h1 class="form-signin-heading text-muted"><img class="img-responsive" src="<?php echo base_url() ?>assets/img/Logo_B4T.png" style="" alt="B4T Logo"></h1>
        <input type="text" class="form-control" name="username" placeholder="Nama Pengguna">
        <input type="password" class="form-control" name="password" placeholder="Kata Sandi">
        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">
          Masuk
        </button>
      </form>
    </div>
    
  </div>
</body>
</html>
