<?php
$servername = "sql200.epizy.com";
$database = "epiz_26142135_gabby";
$username = "epiz_26142135";
$password = "3PiR6yYlQxlm2";


//$servername = "localhost";
//$database = "kellys_database";
//$username = "root";
//$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} else {
echo "Connected successfully"; 
}
echo " -> ";
//mysqli_close($conn);
//mysqli_connect("localhost", "id14219470_gideongallardo", "Armageddon0543!","id14219470_gideon") or die(mysqli_error()); 
//mysqli_select_db("id14219470_kellysdb") or die(mysqli_error());

//mysqli_query("USE `id14219470_kellysdb` ");

//$sql1 = "DROP table IF EXISTS employees"; 
//mysqli_error($sql1);
//	if ($conn->query($sql1) === FALSE) {
//	  echo "Table employess created successfully";
//	} else {
//	  echo "Error creating table: " . $conn->error;
//	}


//-- Table structure for table `expenses`

//$sql3 = "DROP table IF EXISTS `expenses`;") or die('Error, query failed. ' . mysqli_error());
$sql3 = "CREATE TABLE if not exists expenses ( 
  id int(5) NOT NULL auto_increment, 
  si_number varchar(20) collate latin1_general_ci NOT NULL, 
  cust_name varchar(50) collate latin1_general_ci NOT NULL, 
  address text collate latin1_general_ci NOT NULL, 
  items text collate latin1_general_ci NOT NULL, 
  description varchar(200) collate latin1_general_ci NOT NULL, 
  si_date date NOT NULL, 
  qty int(4) NOT NULL, 
  amount float NOT NULL, 
  subtotal float NOT NULL, 
  paymentmode varchar(20) collate latin1_general_ci NOT NULL, 
  checknumber varchar(100) collate latin1_general_ci NOT NULL, 
  delivery_date date NOT NULL, 
  person_in_charge varchar(20) collate latin1_general_ci NOT NULL, 
  remarks varchar(100) collate latin1_general_ci NOT NULL, 
  PRIMARY KEY  (id) )";
	if(mysqli_query($conn, $sql3)){
		echo "Table expenses created successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";
//-- Dumping data for table `expenses`

$sql4 ="INSERT INTO expenses (id, si_number, cust_name, address, items, description, si_date, qty, amount, 
  subtotal, paymentmode, checknumber, delivery_date, person_in_charge, remarks) VALUES  
  (64, '234343', 'Water', 'sald fjkldsfj', 'Electric bill', 'slfjs lsdfjkl', '2020-06-02', 1, 2020, 2020, 'Cash', 
  '', '0000-00-00', 'salflds lsjflsdjf', 'New expenses'),(63, '109w9999', 'ariel p. clemente', 'manila, philippines', 
  '1 set of wireless lavalier mic', 'BOYA WM4 wireless lavalier mic', '2020-06-03', 2, 20000, 40000, 'Cash', '123', '2020-06-11', 'pops', 'New Sales')";

	if(mysqli_query($conn, $sql4)){
		echo "Expenses records inserted successfully.";
	} else{
	  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";

//-- Table structure for table `jobcontracts`
//mysqli_query("DROP table IF EXISTS `jobcontracts`;") or die('Error, query failed. ' . mysqli_error());
$sql5 = "CREATE TABLE if not exists jobcontracts (id int(5) NOT NULL auto_increment, 
  si_number varchar(20) collate latin1_general_ci NOT NULL, 
  cust_name varchar(50) collate latin1_general_ci NOT NULL, 
  address text collate latin1_general_ci NOT NULL, 
  items text collate latin1_general_ci NOT NULL, 
  description varchar(200) collate latin1_general_ci NOT NULL, 
  si_date date NOT NULL, 
  amount float NOT NULL, 
  paymentmade float NOT NULL, 
  balance float NOT NULL, 
  newpayment float NOT NULL, 
  newpaymentdate date NOT NULL, 
  paymentmode varchar(20) collate latin1_general_ci NOT NULL, 
  checknumber varchar(100) collate latin1_general_ci NOT NULL, 
  delivery_date date NOT NULL, 
  person_in_charge varchar(20) collate latin1_general_ci NOT NULL, 
  remarks varchar(100) collate latin1_general_ci NOT NULL, 
  PRIMARY KEY  (id))";
	if(mysqli_query($conn, $sql5)){
		echo "Table jobcontracts created successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";

//-- 
//-- Dumping data for table `jobcontracts`
//-- 

$sql6 = "INSERT INTO jobcontracts (id, si_number, cust_name, address, items, description, si_date, amount, paymentmade, balance, newpayment, newpaymentdate, paymentmode, checknumber, delivery_date, person_in_charge, remarks) VALUES 
(54, '14444', 'norimae arroz', 'lkdsjfkladsjf', 'ring light', 'slkfjldsfj l', '2020-06-23', 300, 100, 200, 0, '0000-00-00', '', '', '2020-06-23', 'aaaaa', 'New Sales'),
(81, '123132', 'pos de leon', 'mandaluyong city', 'offshore drilling ', '4-hole drilling job', '2020-06-27', 40000, 10000, 10000, 0, '2020-06-27', '', '', '2020-06-23', 'new man', 'Payments Updated'),
(61, '2222111', 'jephone marsh', 'Manila', '1 set of vlogging gear', 'Zhiyun Gimbal', '2009-06-07', 5000, 3000, 2000, 0, '0000-00-00', '', 'ADDD', '2009-06-09', 'alsfjldskfjl', 'New Sales'),
(67, '109w9999', 'ariel p. clemente', 'manila, philippines', '1 set of ', 'adsafs asdfdsaf asdf', '2020-06-06', 20000, 16000, 4000, 0, '0000-00-00', '', '', '2020-06-14', 'pops', 'New Sales'),
(80, '123132', 'pos de leon', 'mandaluyong city', 'offshore drilling ', '4-hole drilling job', '2020-06-27', 40000, 10000, 10000, 0, '2020-06-27', '', '', '2020-06-23', 'new man', 'Payments Updated'),
(102, '123132', 'pos de leon', 'mandaluyong city', 'offshore drilling ', '4-hole drilling job', '2020-06-27', 40000, 10000, 10000, 0, '2020-06-27', '', '', '2020-06-23', 'new man', 'Payments Updated') ";

	if(mysqli_query($conn, $sql6)){
		echo "Records inserted to jobcontracts successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";
//-- Table structure for table `payroll`

//mysqli_query("DROP table IF EXISTS `payroll`;") or die('Error, query failed. ' . mysqli_error());
$sql7 ="CREATE TABLE if not exists payroll_master ( 
  id int(11) NOT NULL auto_increment, 
  lastname varchar(150) collate latin1_general_ci NOT NULL, 
  firstname varchar(50) collate latin1_general_ci NOT NULL, 
  mi varchar(50) collate latin1_general_ci NOT NULL, 
  position varchar(100) collate latin1_general_ci NOT NULL, 
  salary_rate float NOT NULL, 
  payperiod varchar(120) collate latin1_general_ci NOT NULL, 
  dayswork int(4) NOT NULL, 
  wtax float NOT NULL, 
  sss float NOT NULL, 
  pagibig float NOT NULL, 
  philhealth float NOT NULL, 
  tot_ded float NOT NULL, 
  netpay float NOT NULL, 
  paydate date NOT NULL, 
  subtotal float NOT NULL, 
  cashadvance float NOT NULL, 
  PRIMARY KEY  (`id`)) ";

	if(mysqli_query($conn, $sql7)){
		echo "Table payroll created successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";
//-- Dumping data for table `payroll`
//-- 

$sql8= "INSERT INTO payroll_master (id, lastname, firstname, mi, position, salary_rate, payperiod, dayswork, wtax, sss, pagibig, philhealth, tot_ded, netpay, paydate, subtotal, cashadvance) VALUES (1, 'Milante', 'Shane', '', 'manager', 550, '2020/6/1 - 2020/6/15', 12, 792, 264, 100, 100, 1256, 5344, '2020-06-26', 6600, 0)";
	if(mysqli_query($conn, $sql8)){
		echo "Records inserted successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";
//-- Table structure for table `purchase_orders`
//-- 

//$sql9 = "DROP table IF EXISTS `purchase_orders`;") or die('Error, query failed. ' . mysqli_error());
$sql9 ="CREATE TABLE if not exists purchase_orders ( 
  id int(5) NOT NULL auto_increment, 
  or_number varchar(20) collate latin1_general_ci NOT NULL, 
  taxpayers_tin varchar(16) collate latin1_general_ci NOT NULL, 
  cust_name varchar(50) collate latin1_general_ci NOT NULL, 
  address text collate latin1_general_ci NOT NULL, 
  items text collate latin1_general_ci NOT NULL, 
  description varchar(200) collate latin1_general_ci NOT NULL, 
  purchase_date date NOT NULL, 
  amount float NOT NULL, 
  tax_input float NOT NULL, 
  grosspurchase float NOT NULL, 
  paymentmode varchar(20) collate latin1_general_ci NOT NULL, 
  checknumber varchar(100) collate latin1_general_ci NOT NULL, 
  delivery_date date NOT NULL, 
  person_in_charge varchar(20) collate latin1_general_ci NOT NULL, 
  remarks varchar(100) collate latin1_general_ci NOT NULL, 
  PRIMARY KEY  (id) )";
	if(mysqli_query($conn, $sql9)){
		echo "Table purchase orders uccessfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";
//-- Dumping data for table `purchase_orders`
//-- 

//-- Table structure for table `purchases`

//mysqli_query("DROP table IF EXISTS `purchases`;") or die('Error, query failed. ' . mysqli_error());
$sql11 = " CREATE TABLE if not exists purchases ( 
  id int(5) NOT NULL auto_increment, 
  or_number varchar(20) collate latin1_general_ci NOT NULL, 
  taxpayers_tin varchar(16) collate latin1_general_ci NOT NULL, 
  cust_name varchar(50) collate latin1_general_ci NOT NULL, 
  address text collate latin1_general_ci NOT NULL, 
  items text collate latin1_general_ci NOT NULL, 
  description varchar(200) collate latin1_general_ci NOT NULL, 
  purchase_date date NOT NULL, 
  amount float NOT NULL, 
  tax_input float NOT NULL, 
  grosspurchase float NOT NULL, 
  paymentmode varchar(20) collate latin1_general_ci NOT NULL, 
  checknumber varchar(100) collate latin1_general_ci NOT NULL, 
  delivery_date date NOT NULL, 
  person_in_charge varchar(20) collate latin1_general_ci NOT NULL, 
  remarks varchar(100) collate latin1_general_ci NOT NULL, 
  PRIMARY KEY (id) )";
	if(mysqli_query($conn, $sql11)){
		echo "Table purchses created successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";


//-- Table structure for table `sales`
//mysqli_query("DROP table IF EXISTS `sales`;") or die('Error, query failed. ' . mysqli_error());
$sql13 = "CREATE TABLE if not exists sales ( 
  id int(5) NOT NULL auto_increment, 
  or_number varchar(20) collate latin1_general_ci NOT NULL, 
  taxpayers_tin varchar(16) collate latin1_general_ci NOT NULL, 
  cust_name varchar(50) collate latin1_general_ci NOT NULL, 
  address text collate latin1_general_ci NOT NULL, 
  items text collate latin1_general_ci NOT NULL, 
  description varchar(200) collate latin1_general_ci NOT NULL, 
  purchase_date date NOT NULL, 
  amount float NOT NULL, 
  tax_input float NOT NULL, 
  grosspurchase float NOT NULL, 
  paymentmode varchar(20) collate latin1_general_ci NOT NULL, 
  checknumber varchar(100) collate latin1_general_ci NOT NULL, 
  delivery_date date NOT NULL, 
  person_in_charge varchar(20) collate latin1_general_ci NOT NULL, 
  remarks varchar(100) collate latin1_general_ci NOT NULL, 
  PRIMARY KEY  (id) )";

	if(mysqli_query($conn, $sql13)){
		echo "Table created successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";
//-- Dumping data for table `sales`
//-- 

$sql14 = "INSERT INTO sales (id, or_number, taxpayers_tin, cust_name, address, items, description, purchase_date, 
 amount, tax_input, grosspurchase, paymentmode, checknumber, delivery_date, person_in_charge, remarks) VALUES  
 (64, '234343', '010-014-665-000', 'Water refilling station', 'sald fjkldsfj', 'Electric bill', 'slfjs lsdfjkl', '0000-00-00', 
 2020, 242.4, 2262.4, 'Cash', '', '0000-00-00', 'salflds lsjflsdjf', 'New expenses'), 
 (63, '109w9999', '102-222-665-000', 'ariel p. clemente', 'manila, philippines', '1 set of wireless lavalier mic', 
 'BOYA WM4 wireless lavalier mic', '2020-06-03', 3500, 420, 3920, 'Cash', '123', '2020-06-11', 'pops', 'New Sales'), 
 (65, '334343', '232-123-211-000', 'kelly drilling contracting', 'sta. cruz, manila', '', 'ls sllsjf lsf klsjf', '0000-00-00', 
 10200, 1224, 11424, 'Cash', '', '0000-00-00', 'ariel', 'New purchases'), (66, '2343432', '232-124-211-000', 
 'gideon offshore oil drilling industries', 'sdfdsfdsf', '', 'sdfsdf dsfsdf', '0000-00-00', 20000, 2400, 22400, '', '', '0000-00-00', 'ariel dd', 'New purchases'), 
 (67, '32233243', '231-123-211-000', 'Kelly Engineering international', 'valenzuela, manila', '', ' alsdfjkldsjf fljdsl fdklj', 
 '2020-06-06', 20000, 2400, 22400, 'Cash', '', '0000-00-00', 'gideon', 'New purchases'), 
 (68, '444444', '132-123-231-000', 'eagle corporation', 'sklfjls flsfj lj', '', '1 set 8' 'hex', '2020-05-04', 200, 24, 224, 
 'Cash', '', '0000-00-00', 'maria', 'New purchases')";

	if(mysqli_query($conn, $sql14)){
		echo "Records inserted successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
  echo "<br>";

// === table employees
$sql = "CREATE TABLE if not exists employees ( 
   id int(5) NOT NULL auto_increment, 
   employeenumber varchar(20) collate latin1_general_ci NOT NULL, 
   firstname varchar(35) collate latin1_general_ci NOT NULL, 
   mi varchar(4) collate latin1_general_ci NOT NULL, 
   lastname varchar(30) collate latin1_general_ci NOT NULL, 
   address text collate latin1_general_ci NOT NULL, 
   gender varchar(9) collate latin1_general_ci NOT NULL, 
   position varchar(200) collate latin1_general_ci NOT NULL, 
   birthday date NOT NULL, 
   salary_rate float NOT NULL, 
   SSS_No varchar(60) collate latin1_general_ci NOT NULL, 
   TIN varchar(20) collate latin1_general_ci NOT NULL, 
   pagibig_no varchar(60) collate latin1_general_ci NOT NULL, 
   phealth_no varchar(60) collate latin1_general_ci NOT NULL, 
   wtax float NOT NULL, 
   sss float NOT NULL, 
   pagibig float NOT NULL, 
   phealth float NOT NULL, 
   PRIMARY KEY  (id) )";
	if(mysqli_query($conn, $sql)){
	  echo "Table employees created successfully";
	} else {
	  echo "Error creating table: " . $conn->error;
	}
echo "<br>";
//-- 
//- Dumping data for table `employees`
//-- 

$sql2 = "INSERT INTO employees (id, employeenumber, firstname, mi, lastname, address, gender, position, 
  birthday, salary_rate, SSS_No, TIN, pagibig_no, phealth_no, wtax, sss, pagibig, phealth) VALUES  
   (61, '1222', 'Gideon', '', 'Gallardo', 'aurora, queozon', 'Male', 'master engineer 2', '2020-06-01', 1000, '293293', 
   '22222', '999999', '232999', 200, 200, 200, 100), (60, '123454', 'Shane', '', 'Milante', 'manila philippines', 'Female', 
   'manager', '2020-06-02', 550, '293829329', '29832983', '38298329', '', 110, 120, 100, 50)";

	if(mysqli_query($conn, $sql2)){
	  echo "Table employees inserted successfully";
	} else {
	  echo "Error creating table: " . $conn->error;
	}
echo "<br>";

$sql15 = "CREATE TABLE IF NOT EXISTS users (
  id int(5) NOT NULL AUTO_INCREMENT,
  username varchar(20) COLLATE latin1_general_ci NOT NULL,
  password varchar(20) COLLATE latin1_general_ci NOT NULL,
  studentnumber varchar(20) COLLATE latin1_general_ci NOT NULL,
  accesslevel varchar(15) COLLATE latin1_general_ci NOT NULL,
  birthday varchar(12) COLLATE latin1_general_ci NOT NULL,
  squestion varchar(150) COLLATE latin1_general_ci NOT NULL,
  answer varchar(70) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (id))";

	if(mysqli_query($conn, $sql15)){
	  echo "Table users created successfully";
	} else {
	  echo "Error creating table: " . $conn->error;
	}
echo "<br>";
//--
//-- Dumping data for table `users`
//--

$sql16 = "INSERT INTO users (id, username, password, studentnumber, accesslevel, birthday, squestion, answer) VALUES
(1, 'gideon', 'gidspogi', '15001642900', 'Admin', '', '', ''),
(2, 'ariel', 'clemente', '15000759300', 'Admin', '', '', ''),
(8, 'efraim', 'deleon', '15000421900', 'Admin', '', '', ''),
(10, '15002002100', 'Songalia', '15002002100', 'Admin', '', '', ''),
(11, '15001561400', 'Tiu', '15001561400', 'Admin', '', '', ''),
(17, '15001581500', 'DeQuiroz', '15001581500', 'Student', '', '', '') ";

	if(mysqli_query($conn, $sql16)){
	  echo "Records for users inserted successfully";
	} else {
	  echo "Error creating table: " . $conn->error;
	}
echo "<br>";

mysqli_close($conn);

?>
