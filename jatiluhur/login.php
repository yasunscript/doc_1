
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo.ico">

    <title>REAL TIME DATA MONITORING</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loginstyle.css">
  </head>

<body> 



      
	<div class="login-box">
 <div class="logincolor" align="center"><img src="images/logo_login.png" width="100%"></div>        
   <form method="post" action="otentifikasi.php" name="form" class="login">  
   <input type="text" name="username" class="login-input" placeholder="Username" autofocus>
    <input type="password" name="password" class="login-input" placeholder="Password">
    <input type="submit" value="LOGIN" class="login-submit"> 
  </form>
<?php 
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h1 class="about about-author">Username dan Password belum diisi!</h1>';
	} else if ($_GET['error'] == 2) {
		echo '<h1 class="about about-author">Username belum diisi!</h1>';
	} else if ($_GET['error'] == 3) {
		echo '<h1 class="about about-author">Password belum diisi!</h1>';
	} else if ($_GET['error'] == 4) {
		echo '<h1 class="about about-author">Username dan Password tidak terdaftar!</h1>';
	}
}
?>  

</div>
 
  </body>
</html>
