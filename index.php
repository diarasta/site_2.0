<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/styless.css">
   <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css"  href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
</head>
<body>
  <div class="header">
  	<h2>Enregistrez vous ici </h2>
  </div>
	
  <form method="post" action="index.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group" class="form-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group" class="form-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group" class="form-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group" class="form-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group" class="form-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Deja membre cliquer ici? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>