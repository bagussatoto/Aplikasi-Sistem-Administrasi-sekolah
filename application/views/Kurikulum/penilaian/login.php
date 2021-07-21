<!DOCTYPE html>
<head>
  <title>Login Sistem Informasi SMP</title>

  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/superadmin/sweetalert/sweetalert.css'); ?>">
   
  <script type="text/javascript" src="<?php echo base_url('assets/superadmin/sweetalert/sweetalert.min.js'); ?>"></script>
</head>

<style>
  body{
    background: white;
  }

  #kotak{
    text-align: center;
    margin: auto;
    padding: auto;
    padding-top: 2%;
    height: 500px;
    width: 360px;


  }

  #login{
    text-align: center;
    margin: auto;
    font-size: 16px;
    padding: auto;
    padding-top: 2%;
    height: auto;
    width: 30%;
  }

  h2{
    color:white;
  }

</style>
<body>
  <div>

    <div id="kotak">
      <img src="<?php echo base_url();?>assets/admin/image/smp.png" width="50%">
      <div class="login-logo" style="color:navy">
       <b>SISTEM INFORMASI</b><br>SMP</br>
     </div>

<div class="form-group"> <?php echo $this->session->flashdata('warning')?></div>


<?php echo form_open('login/ceklogin')?>
      <div class="form-group"><input type="text"  required="required" class="form-control" name="username"  placeholder="Masukkan NIP/NISN"></div>
      <div class="form-group"><input type="password" class="form-control" required="required" name="password" placeholder="Masukkan Password"></div>
   
   
   
      <button id="login" name="login" type="submit" class="btn btn-primary btn-block btn-large">Login</button>

    <?php echo form_close()?>

  </div>
</body>
</html>