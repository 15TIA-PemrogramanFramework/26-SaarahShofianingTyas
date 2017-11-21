<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="<?php echo base_url('assets/login/') ?>css/style.css">

</head>

<body>
    <div class="wrapper">
    <form class="form-signin" action="<?php echo site_url('login') ?>" method="post"> 
    <p><?php echo tanggal(); ?>  </p>    
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Masukkan username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label> 
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
  
  
</body>
</html>
