
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo.ico">

	<link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/dashapp.css">
    <link rel="stylesheet" href="../css/tablestyle.css">
      
  </head>

<body> 

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>        
          <div class="navbar-brand" ><a href="" class="nav-brand" data-toggle="fullscreen"><img src="../images/logo.png" width="180px" height="35px"></a></div>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Akun</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Operasi&nbsp;<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="rencana_operasi.php">Rencana</a></li>
                    <li><a href="realisasi_operasi.php">Realisasi</a></li>                        
                  </ul>
                </li>
          </ul>            
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo "<strong>".$_SESSION['realname']."</strong>";?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/app.v1.js"></script>
        
  </body>
</html>
