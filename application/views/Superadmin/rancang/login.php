
<!DOCTYPE html>
<head>
  <title>Login Sistem Informasi SMP</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="css/style.css">
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
      <img src="image/smp.png" width="50%">
      <div class="login-logo" style="color:navy">
       <b>SISTEM INFORMASI</b><br>SMP</br>
     </div>

     <form action="login_proses.php"  method="post">
      <div class="form-group"><input type="text"  class="form-control" name="username" value="" placeholder="NIP"></div>
      <div class="form-group"><input type="password" class="form-control" name="password" value="" placeholder="Password"></div>
      
     
     <button id="login" type="submit" class="btn btn-primary btn-block btn-large">Login</button>
   </form>

 </div>
</body>
</html>