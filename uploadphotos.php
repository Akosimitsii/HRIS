<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: xx-large; }
.style10 {font-size: 12px}
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
.style15 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
	color: #FF0000;
}
.style16 {color: #FF0000}
.style17 {color: #0000FF}
.style18 {font-size: 18px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>
</head>
<SCRIPT Language = Javascript>
<!--
function validateMe() {
smut="#@&*%!#@&*%!#@&*%!";
cmp="kantot gago tangina puta putangina sex babes xxx shit fuck damn porno porn adultsex hardcore wet viagra cum analsex bj blowjob adultsex ass anal oralsex asshole pedophile ";
txt=document.form1.description.value;
tstx="";
for (var i=0;i<16;i++){
pos=cmp.indexOf(" ");
wrd=cmp.substring(0,pos);
wrdl=wrd.length
cmp=cmp.substring(pos+1,cmp.length);
while (txt.indexOf(wrd)>-1){
pos=txt.indexOf(wrd);
txt=txt.substring(0,pos)+smut.substring(0,wrdl)+txt.substring((pos+wrdl),txt.length);
   }
} 
document.form1.description.value=txt;

frm1 = document.form1;
if(frm1.category.value == '') {
alert("Please select category");
frm1.category.focus();
return false;
}
if(frm1.description.value == '') {
alert("Please enter some description of the photo");
frm1.description.focus();
return false;
}


// next item to be validated
return true;
}
// End -->
</SCRIPT>

<?php 
@session_start();
include("webconnect.php");
if(@$_SESSION['accesslevel']!="Admin") { ?>
			<SCRIPT Language=Javascript>
			<!--
				alert("You are not logged -in or you have no authorization to view this page!");
			// End -->
			</SCRIPT>
			<SCRIPT Language=Javascript>
			<!--
				history.back();
			// End -->
			</SCRIPT>
	 <?php
} else {
			
$datep=date('M d, Y H:i:s');
ini_set("post_max_size","128M");
ini_set("session.gc_maxlifetime","10800"); 
ini_set("upload_max_filesize", "200M");

$result = mysql_query(" SELECT * from gallery order by photoname ") ; 

if(isset($_POST['Submit'])) 
{
$fle=$_FILES['file']['name'];
$uploaddir = "photos"; 
	
$category = $_POST['category'];
$description= $_POST['description'];

if($fle=="") {
?>
<SCRIPT Language=Javascript>
<!--
	alert("You have not selected any photo!");
// End -->
</SCRIPT>
<SCRIPT Language=Javascript>
<!--
	history.back();
// End -->
</SCRIPT>
<?php
} 

$result = mysql_query(" SELECT * from gallery WHERE photoname = '$fle' AND description = '$description' AND category='$category' " )or die('Error, query failed. ' . mysql_error()); 
		
$row = mysql_fetch_array($result);
$count = mysql_num_rows($result);

if($count==0) {

$sql = "INSERT INTO gallery (photoname,category,description)  VALUES('$fle','$category','$description' )";

mysql_query($sql) or die('Error, query failed. ' . mysql_error()); 


if($fle!="") {

$fle=$_FILES['file']['name'];

//----- initialize file for upload

$uploaddir = "photos"; 
@$limit_size=1000;

//if ($fle=="") {
//  $fle="s.jpeg";
//}

#$ip=@$REMOTE_ADDR; 
$ip=$_SERVER['REMOTE_ADDR']; 

$pic=($_FILES['file']['name']);
$source_file = $_FILES['file']['tmp_name'];

//To get the image width and height if you want to resize the image with a perfect ratio and etc..
list($img_width,$img_height) = getimagesize($source_file);
$filename = stripslashes($_FILES['file']['name']);
$targett="photos/".$filename;

$img_width=640;
$img_height=($img_height/$img_width)*640;

//This is your source file path

//Create a new true color image
$im = @imagecreatetruecolor($img_width, $img_height) or
die('Cannot Initialize new GD image stream');

//Create a new image from file or URL
$img_source = imagecreatefromjpeg($source_file);

//Copy and resize part of an image with resampling
imagecopyresampled($im, $img_source, 0, 0, 0, 0, $img_width, $img_height,$img_width, $img_height);

//Output image to browser or file
$uu=imagejpeg($im, "photos/$filename", 50);
move_uploaded_file($uu, $targett);

//$query1=mysql_query("insert into tab values ('$uu')");
  }

?>
	<SCRIPT Language=Javascript>
	<!--
	alert("Photo and its description has been successfully uploaded!");
	// End -->
	</SCRIPT>
	<SCRIPT Language=Javascript>
	<!--
      location.href="gallery.php";
	// End -->
	</SCRIPT>
 <?php
} else {
?>
<SCRIPT Language=Javascript>
<!--
	alert("Record Already exists. Please try again!");
// End -->
</SCRIPT>
<SCRIPT Language=Javascript>
<!--
 location.href="uploadphotos.php";
// End -->
</SCRIPT>
<?php

  }
 }
}
?>




<body>
<center><br />

<table width="98%" border="0">
  <tr>
    <td height="24" align="center" valign="top" class="style4 style10"><p class="style18">Image gallery maintenance </p>    </td>
  </tr>
  <tr>
    <td height="694" align="center" valign="middle" background="bg/Bkgrnd66.jpeg">
	<form id="form1" name="form1" method="post" enctype="multipart/form-data" onsubmit="return validateMe(this.description.value);">
	  <table width="99%" height="720" border="0" bordercolor="#333333" bgcolor="#FFFFFF">
        <tr>
          <td height="265" colspan="2" valign="top"><p class="style15">Important Reminder in uploading photos: It is a very good practice to reduce the file size of your photo for faster loading! This uploading facility will reduce your file size dramatically from &gt;200kb to less than 90Kb only. </p>
              <ol>
                <li class="style13">
                  <p>Photo limit size is 640 pixels only, <em>(height or widht)</em> photo file size should not exceed 400Kb, otherwise it may not upload properly or may not load proportionally in the gallery page. </p>
                </li>
                <li class="style13">
                  <p>If your file is greater than the dimensions and size mentioned above, you can use <span class="style16 style17">Microsoft Office Picture Manager</span> to reduce your photo size.</p>
                </li>
                <li class="style13">
                  <p>First, open your photo using Microsoft Office Picture Manager.</p>
                </li>
                <li class="style13">
                  <p>Click the <span class="style17">Picure</span> menu, select <span class="style17">Resize</span>. </p>
                </li>
                <li class="style13">
                  <p>Then, from the selection panel at the right side, select <span class="style17">Web-Large 640 x 480 px</span>, click Ok button. </p>
                </li>
                <li class="style13">
                  <p>Finally, you may now proceed in uploading that photo you just resized </p>
                </li>
            </ol></td>
          <td width="227" rowspan="5" valign="top"><img src="images/picturemenu.png" width="217" height="242" /><br />
              <br />
              <img src="images/photoresize.png" width="204" height="414" /></td>
        </tr>
        <tr>
          <td width="162" height="32"><span class="style13">Category:</span></td>
          <td width="852"><select name="category" id="category">
              <option value="" selected="selected">Select category</option>
              <option value="K12-Senior High">K-12 Senior High</option>
              <option value="Admin">Admin</option>
              <option value="WAD">WAD</option>
              <option value="CSDP">CSDP</option>
              <option value="NTT">NTT</option>
              <option value="Activities">Activities</option>
            </select>          </td>
        </tr>
        <tr>
          <td height="207" valign="top"><span class="style13">Description: </span></td>
          <td valign="top"><textarea name="description" cols="60" rows="12" id="description"></textarea></td>
        </tr>
        <tr>
          <td height="26" valign="top"><span class="style13">Select a Photo: </span></td>
          <td valign="top"><input name="file" type="file" size="50" /></td>
        </tr>
        <tr>
          <td height="178">&nbsp;</td>
          <td valign="top"><input type="submit" name="Submit" value="  Upload   " /> <input name="Cancel" type="reset" id="Cancel" value="   Cancel    " /></td>
        </tr>
      </table>
	</form></td>
  </tr>
</table>
<p>&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
</body>
</html>
