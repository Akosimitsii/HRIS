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
      <title>PCAAT Menu</title>
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
			<img src="images/pcaatHQ.jpg" width="65" height="65" border="0" padding="3" align="left">
            <section class="wrapper">
               <h1 style="font-size:22px;" valign="middle"><a href="#">&nbsp;&nbsp;&nbsp;P.C.A.A.T &nbsp;&nbsp;e-Library </a></h1>
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
                       <a href="index.php" data-toggle="sub-menu">e-Lib Home<i class="expand"></i></a>
                        <ul class="sub-menu">
                           <li class="menu-item"><a href="login.php">Login</a></li>
                           <li class="menu-item"><a href="logout.php">Logout</a></li>
                           <li class="menu-item"><a href="register.php">Register</a></li>
                        </ul>
                     </li>					 
					<?php if(@$_SESSION['accesslevel']=="Admin" && @$_SESSION['accesslevel']!="Guest" ) { ?>
                     <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu">Admin<i class="expand"></i></a>
                        <ul class="sub-menu">
                           <li class="menu-item"><a href="uploadmodule.php">Upload Modules</a></li>
                           <li class="menu-item"><a href="updatesubjects.php">Update Subjects</a></li>
                           <li class="menu-item"><a href="#">Faculty</a></li>
                           <li class="menu-item"><a href="#">Updates</a></li>
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
                        <a href="#" data-toggle="sub-menu">Students <i class="expand"></i></a>
                        <ul class="sub-menu">
						<?php if(@$_SESSION['accesslevel']=="Admin" || @$_SESSION['accesslevel']=="Student" && @$_SESSION['accesslevel']!="Guest" ) { ?>
                           <li class="menu-item"><a href="modules.php">Modules</a></li>
						 <?php } ?>  
                           <li class="menu-item"><a href="register.php">Register</a></li>
                           <li class="menu-item"><a href="login.php">Login</a></li>
                           <li class="menu-item"><a href="logout.php">Logout</a></li>
                           <li class="menu-item"><a href="#">Enroll</a></li>
                        </ul>
                     </li>
                     <li class="menu-item"><a href="enroll.php">Enroll Now</a></li>
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
