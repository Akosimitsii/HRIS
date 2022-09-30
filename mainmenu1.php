<?php
@session_start();
?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Syahrizaldev">
      <title>PCAAT Home</title>
      <link rel="stylesheet" type="text/css" href="./css/reset.min.css">
      <link rel="stylesheet" type="text/css" href="./css/style.min.css">
      <link rel="stylesheet" type="text/css" href="./css/ionicon.min.css">
      <style type="text/css">
<!--

.style1 {font-size: x-large}
-->
</style>

</head>
   <body>
      <!-- Section: Header -->
      <header class="header">
         <div class="container">
			<img src="images/pcaatHQ.jpg" width="65" height="65" border="0" padding="3" align="left" valign="bottom">
            <section class="wrapper">
               <h1 style="font-size:22px;" valign="middle">&nbsp;PCAAT Employee Time Logs</h1>
               <button type="button" class="opened-menu">
                  <span></span>
                  <span></span>
                  <span></span>               </button>
               <div class="overlay"></div>
               <nav class="navbar">
                  <button type="button" class="closed-menu">
                     <img src="./asset/closed.svg" class="closed-icon" alt="closed">
                  </button>
                  <ul class="menu">
                     <li class="menu-item menu-item-has-children">
                       <a href="index.php" data-toggle="sub-menu">Home<i class="expand"></i></a>
                        <ul class="sub-menu">
                           <li class="menu-item"><a href="qr_login.php">QR Login</a></li>
                           <li class="menu-item"><a href="login.php">Keyboard Login</a></li>
                           <li class="menu-item"><a href="logout.php">Logout</a></li>
                        </ul>
                     </li>					 

					<?php if((@$_SESSION['accesslevel'] =="Admin") && (@$_SESSION['accesslevel']!="Guest" )) { ?>
                     <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu">Admin<i class="expand"></i></a>
                        <ul class="sub-menu">
                           <li class="menu-item"><a href="timelogs.php">Time Logs</a></li>
                           <li class="menu-item"><a href="add_employee_qr.php">Add Employee </a></li>
                           <li class="menu-item"><a href="update_deductions.php">Add/Edit Deduction Rates </a></li>
                           <li class="menu-item"><a href="employees_grid_view.php">Employee Grid View</a></li>
                           <li class="menu-item"><a href="empqr_grid_view.php">Emp. QR Grid View</a></li>
                           <li class="menu-item"><a href="employees_master.php">Employee Masterlist</a></li>
                        </ul>
                     </li>					 
					 <?php } ?>

					<?php if((@$_SESSION['accesslevel']=="Admin") || (@$_SESSION['accesslevel']=="Employee" )){ ?>
                     <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu">Employee<i class="expand"></i></a>
                        <ul class="sub-menu">
                           <li class="menu-item"><a href="myaccount.php">My Account</a></li>
                           <li class="menu-item"><a href="mytimelogs.php">My Timelogs</a></li>
                           <li class="menu-item"><a href="login2.php">Change Password</a></li>
                        </ul>
                     </li>					 
					 <?php } ?>
					 
                     <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu">About PCAAT<i class="expand"></i></a>
                        <ul class="sub-menu">
                           <li class="menu-item"><a href="#">Mission/Vision</a></li>
                           <li class="menu-item"><a href="#">Strands</a></li>
                           <li class="menu-item"><a href="#">The People</a></li>
                           <li class="menu-item"><a href="#">Advocacy</a></li>
                        </ul>
                     </li>
                     <li class="menu-item menu-item-has-children">
                        <a href="qr_login.php" data-toggle="sub-menu">QR Login <i class="expand"></i></a></li>
                  </ul>
               </nav>
            </section>
         </div>
      </header>

      <!-- Section: Main -->
      <main class="main">
      </main>

      <script src="./js/script.js" defer></script>
   </body>
</html>

