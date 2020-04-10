<?php
include ("login_cek.php");
include "&_server_&/&_connection/server_connection.php";

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
header ("Location: index.php");
exit();
}
?>

<html>
<head>
    <title>REAL TIME DATA MONITORING</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.ico">
    

	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loginstyle.css">    
</head>

<body>

    <?php 
    include("menu.php");
    ?>
 
<?php 

$id = $_SESSION['id'];

$query = mysql_query("select * from userme where id='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

	<div class="login-box">
   <form method="post" action="user_update.php" name="form" class="login">  
     <h3 align="center">User Account</h3>
    <input type="hidden" name="userid" value="<?php echo $data['id'];?>">
    <input type="text" name="fullname" class="login-input" placeholder="Full Name" value="<?php echo $data['name'];?>" autofocus>
   <input type="text" name="username" class="login-input" placeholder="User Name" value="<?php echo $data['username'];?>">
    <input type="password" name="password" class="login-input" placeholder="Password" value="<?php echo $data['password'];?>">
    <input type="submit" value="Update" class="login-submit"> 
  </form>
    </div>
    
    <br></br>   

      <footer>
  <table width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
<tr>
       <td width="100%" align="center"><div id="clock"></div></td>
      </tr>
  </table>
 </footer>
    
    <script src="js/app.v1.js"></script>   
    <script src="js/datetime.js"></script>    
</body>
</html>