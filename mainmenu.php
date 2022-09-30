<?php
@session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PCAAT HRIS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="icon" type="image/png" href="inc/pcaaticon.ico">

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="qr_login.php">QR Login</a></li>
                        <li><a class="dropdown-item" href="login.php">Keyboard Login</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>       

				<?php if((@$_SESSION['accesslevel'] =="Admin") && (@$_SESSION['accesslevel']!="Guest" )) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                        </a>
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
                        Employees
                        </a>
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
	</body>
</html>