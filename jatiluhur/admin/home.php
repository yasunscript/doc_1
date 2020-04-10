<?php
include "login_cek.php";
include "../&_server_&/&_connection/server_connection.php";
date_default_timezone_set('Asia/Jakarta');
$Tahun = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../images/logo.ico">

    <title>REAL TIME DATA MONITORING</title>
	<link rel="stylesheet" href="../css/bootstrap.css"> 
     <link rel="stylesheet" href="../css/dashapp.css">  
       <link rel="stylesheet" href="../css/tablestyle.css"> 
      <link rel="stylesheet" href="../css/loginstyle.css">
      
  </head>

  
<body> 
<?php 
    include("menu.php");
    ?>
    
<div class="container-fluid">
<div class="row">


	  
<div class="panels-header1" align="center">  
<div class="container-fluid"> 
    <div class="col-md-12" style="font-size:1.1em; font-weight:bold;">Data Akun Pengguna</div> 
</div>
</div> 
    
<div class="col-md-3">    
<div class="panels-white1" style="font-weight:bold; color:#ffffff; background:#0B48DC;" align="center">Form Input Data </div>    
<div class="panels-white4" style="width: 100%; height: 75vh; overflow:hidden; padding:10px;">  
   <form method="post" action="akun/insert.php" name="form"> 
    <label class="style1">Username :</label>   
    <input type="text" name="username" class="form-control">
    <label class="style1">Password :</label>   
    <input type="text" name="password" class="form-control">
    <label class="style1">Nama Lengkap :</label>   
    <input type="text" name="fullname" class="form-control">       
    <label class="style1">No. Handphone :</label>   
    <input type="text" name="no_hp" class="form-control">       
    <label class="style1">Level :</label>   
       <select type="text" name="level" class="form-control">
           <option>User</option>
           <option>Admin</option>           
       </select>       

       <br>
    <input type="submit" value="Save" class="login-submit"> 
  </form>

</div> 
    </div>    
        
<div class="col-md-9">  
<div class="panels-white1" style="font-weight:bold; color:#ffffff; background:#0B48DC;" align="center">Data Tabel  </div>    
<div class="panels-white4" style="width: 100%; height: 75vh;">
   
<table  width="100%" cellpadding="10" cellspacing="0">

<thead class="style13">
<th width="10%" align="center"  class="style13">User Id</th>    
<th width="20%" align="center"  class="style13">Username</th>
<th width="20%" align="center"  class="style13">Password</th>    
<th width="20%" align="center"  class="style13">Nama Lengkap</th>
<th width="15%" align="center"  class="style13">No. Handphone</th>    
<th width="15%" align="center"  class="style13">Level</th>
<th width="10%" align="center"  class="style13" >Aksi</th>     
</thead>


<tbody>    
<?php
   
$result = mysql_query("select * from user order by user_id asc");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style4"><?php echo ($rows['user_id']); ?></td>    
<td align="left" class="style3"><?php echo ($rows['username']); ?></td>
<td align="left" class="style3"><?php echo bin2hex($rows['password']); ?></td> 
<td align="left" class="style3"><?php echo ($rows['fullname']); ?></td>    
<td align="left" class="style3"><?php echo ($rows['no_hp']); ?></td> 
<td align="left" class="style3"><?php echo ($rows['level']); ?></td>     
<td align="center" class="style3">
    <form method="post" action="akun/delete.php" name="form">
    <input type="hidden" name="id" value="<?php echo ($rows['user_id']); ?>" class="form-control">
    <input type="submit" value="Hapus" class="btn-red" style="width:100%"></form></td>    
</tr>
</tbody>        
    
    
<?php
}
?>
     
</table>



</div> 
    </div>



      <footer>
  <table width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
<tr>
       <td width="100%" align="center"><div id="clock"></div></td>
      </tr>
  </table>
 </footer>
    

    <script src="../js/datetime.js"></script>
    <script src="../js/jquery-1.7.1.min.js"></script>
    
  </body>
</html>
