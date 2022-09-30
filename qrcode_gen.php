<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php 
$ename = 'kristina.agpaoa@pcaat.edu.ph';

if($ename != '') {
$path = 'qr_codes/';
$imgname = $path.$ename.".png";
$data = isset($_GET['data']) ? $_GET['data'] : $ename;
$logo = isset($_GET['logo']) ? $_GET['logo'] : 'logo.png';
$sdir = explode("/",$_SERVER['REQUEST_URI']);
$dir = str_replace($sdir[count($sdir)-1],"",$_SERVER['REQUEST_URI']);
$_SESSION['imgfile'] = $ename.".png";
$_SESSION['email'] = $ename;
$qr_file = $ename.".png";

// === Create qrcode image
include('phpqrcode/qrlib.php');
QRcode::png($data,$imgname,QR_ECLEVEL_L,11.45,0);

// === Adding image to qrcode
$QR = imagecreatefrompng($imgname);
if($logo !== FALSE){
	$logopng = imagecreatefrompng($logo);
	$QR_width = imagesx($QR);
	$QR_height = imagesy($QR);
	$logo_width = imagesx($logopng);
	$logo_height = imagesy($logopng);
	
	list($newwidth, $newheight) = getimagesize($logo);
	$out = imagecreatetruecolor($QR_width, $QR_width);
	imagecopyresampled($out, $QR, 0, 0, 0, 0, $QR_width, $QR_height, $QR_width, $QR_height);
	imagecopyresampled($out, $logopng, $QR_width/2.65, $QR_height/2.65, 0, 0, $QR_width/4, $QR_height/4, $newwidth, $newheight);
	
}
imagepng($out,$imgname);
imagedestroy($out);

// === Change image color
$im = imagecreatefrompng($imgname);
$r = 44;$g = 62;$b = 80;
for($x=0;$x<imagesx($im);++$x){
	for($y=0;$y<imagesy($im);++$y){
        $index 	= imagecolorat($im, $x, $y);
        $c   	= imagecolorsforindex($im, $index);
        if(($c['red'] < 100) && ($c['green'] < 100) && ($c['blue'] < 100)) { // dark colors
            // here we use the new color, but the original alpha channel
            $colorB = imagecolorallocatealpha($im, 0x12, 0x2E, 0x31, $c['alpha']);
            imagesetpixel($im, $x, $y, $colorB);
        }
	}
}
imagepng($im,$imgname);
imagedestroy($im);

// === Convert Image to base64
$type = pathinfo($imgname, PATHINFO_EXTENSION);
$data = file_get_contents($imgname);
$imgbase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

// === Show image
//echo "<img src='$imgbase64' style='position:relative;display:block;width:240px;height:240px;margin:160px auto;'>";
}
?>

<body>
</body>
</html>
