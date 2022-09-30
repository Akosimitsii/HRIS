<?php
@session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PCAAT HRIS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="icon" type="image/png" href="inc/pcaaticon.ico">

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: xx-large;
	font-weight: bold;
	color: #FFFFFF;
}
.style2 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: large;
}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: xx-large; font-weight: bold; color: #0000FF; }
.style5 {font-size: x-large; font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; color: #0000FF; }
.style8 {font-size: 24px; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #0000FF; }
.style9 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style11 {font-size: xx-large; font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; color: #0000FF; }
-->
    </style>
    </head>
    <body>              
        <nav class="navbar navbar-expand-lg bg-primary bg-opacity-10">
            <div class="container-fluid">
              <img src="img/pcaat-logo.png" class="rounded-circle" width="40" height="40">&nbsp;
              <a class="navbar-brand" href="index.html">PCAAT-HRIS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
             
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">                   
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>                    </li>                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="qr_login.php">QR Login</a></li>
                        <li><a class="dropdown-item" href="login.php">Keyboard Login</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>       

				<?php if((@$_SESSION['accesslevel'] =="Admin") && (@$_SESSION['accesslevel']!="Guest" )) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="time_logs.php">Time Logs</a></li>
                        <li><a class="dropdown-item" href="add_employee_qr.php">Add Employees</a></li>
                       <li><a class="dropdown-item" href="deduction_rates.php">Deduction Rates </a></li>
                        <li><a class="dropdown-item" href="employees_grid_view.php">Employee Grid View</a></li>
                        <li><a class="dropdown-item" href="empqr_grid_view.php">Emp. QR Grid View</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="employees_master.php">Employee Masterlist</a></li>
                        </ul>
                    </li>                    
				 <?php } ?>

				<?php if((@$_SESSION['accesslevel']=="Admin") || (@$_SESSION['accesslevel']=="Employee" )){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Employees                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="myaccount.php">My Account</a></li>
                        <li><a class="dropdown-item" href="mytimelogs.php">My Timelogs</a></li>
                        <li><a class="dropdown-item" href="login2.php">Change Password</a></li>
                        </ul>
                    </li>       
				 <?php } ?>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
              </div>
          </div>
    </nav>
          <!-- end of nav-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>	
 <?php include("standard.php"); ?>		  
 <br>
 <table width="100%" border="0" bgcolor="#D9E4EC">
   <tr>
     <td>&nbsp;</td>
     <td align="center"><p class="style3">Be a PCAATian Now</p>
     <p class="style1"><img src="img/pcaat-logo.png" width="121" height="121"> &nbsp;<img src="img/pcaat-logo2.png" width="120" height="120"> </p></td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td width="10%">&nbsp;</td>
     <td width="77%"><p class="style2"><span class="style11">Free Tuition&nbsp;</span><br>
           <br>
       For entering senior high school students, voucher schemes are available.</p>
       <p>Senior High School Voucher Program (SHS VP), on the other hand, is a DepEd program that attempts to assist junior high school (JHS) graduates in pursuing their chosen senior high school (SHS) course. It enables them to enroll in SHS with less financial stress due to the high cost of school fees.</p>
       <p>JHS graduates can take advantage of this opportunity to receive a high-quality education at a lesser cost. Students from both public and private schools receive a voucher certificate as a result of this program.       </p>
     <p>DepEd is able to provide vouchers to public school graduates. Meanwhile, students from private institutions can apply for the Education Service Contracting (ESC) award through the Private Education Assistance Committee (PEAC).</p></td>
     <td width="13%">&nbsp;</td>
   </tr>
   <tr>
     <td height="22">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td><p class="style5">No Top-up for ESC Grantees</p>
       <p><span class="style8">NO TOP UP FOR 2 YEARS</span><br>
         Only the best and most well-trained teachers provide purequality education.</p>
       <p><span class="style5">No Registration Fee 
       </span><br>
       <span class="style9">No Registration Fee needed. FREE ID 
       <br>
       FREE SIM 
       <br>
       FREE MODULE 
       <br>
       FREE PCAAT SHIRT!<br>
     Now accepting new enrollees!!!</span></p></td>
     <td>&nbsp;</td>
   </tr>
 </table>
 <p class="style2">&nbsp;</p>
 <p>&nbsp;</p>
 </body>
</html>
