<?php
include 'lib/config.php';
include 'lib/opendb.php';
#session_destroy();

//------------------------------------------------------------//
// how many rows to show per page. Initializes page count
$rowsPerPage = 20;

$pageNum = 1;
if(isset($_GET['page']))
{
 $pageNum = $_GET['page'];
}
$offset = ($pageNum - 1) * $rowsPerPage;
//-- end of page initializaton ---------------------------------

?>
<html>
<body>
<h1>Users Masterlist</h1>
<table align="center" cellpadding="2" cellspacing="1" width="97%">
     <tr>
	<td class="thead">Username</td>
	<td class="thead">Password</td>
	<td class="thead">Level</td>
	<td class="thead">Secret question</td>
	<td class="thead">Answer</td>
	<td width="35" class="thead">**</td>
</tr>

<?php

$result = mysql_query(" SELECT * from users order by username LIMIT $offset, $rowsPerPage "); 

while($row = mysql_fetch_array( $result )) {

$msg=limit_text6( $row['message'],250 );

?>

<tr class="odd">
	<td><?php echo $row['username']; ?></td>
	<td><?php echo $row['password']; ?></td>
	<td><?php echo $row['vlevel']; ?></td>
	<td><?php echo $row['squestion'];?></td>
	<td><?php echo $row['answer']; ?></td>
      <td><?php if($_SESSION['user']=="admin") { ?> 
	<a title="Delete user" href="deleteuser.php?id=<?php echo $row['username']; ?>" onclick="javascript:return confirm('Are you sure you want to delete this user?');"><img src="images/delete.png" border="0"></a></td>
      <?php } ?>
</tr>

<?php
}

function limit_text6( $text, $limit )
{
  if( strlen($text)>$limit )
  {
    $text = substr( $text,0,$limit );
    $text = substr( $text,0,-(strlen(strrchr($text,' '))) );
  }
  return $text;
}
?>
<tr>
	<td class="tfoot" colspan="6">
	</td>
</tr>
</table>

<?php
$result = mysql_query(" SELECT COUNT(username) AS numrows FROM users ") or die('Error, query failed');
$row = mysql_fetch_array($result, MYSQL_ASSOC);
$numrows = $row['numrows'];
$maxPage = ceil($numrows/$rowsPerPage);
$self = $_SERVER['PHP_SELF'];
?>

<table align="center" cellpadding="2" cellspacing="1" width="97%">
  <tr bgcolor="#ffff68">
    <td align="right"><font face="Tahoma" size="1" color="#0000FF">
<?php

if ($pageNum > 1)
{

	$page = $pageNum - 1;
	$prev = " <a href=\"$self?mode=users&zort=all&page=$page\">Prev</a> ";
	
	$first = " <a href=\"$self?mode=users&zort=all&page=1\">First Page</a> ";
} 
else
{

	$prev  = ' Prev ';       // we're on page one, don't enable 'previous' link
	$first = ' First |  '; // nor 'first page' link
}

// print 'next' link only if we're not
// on the last page

if ($pageNum < $maxPage)
{

	$page = $pageNum + 1;
	$next = " <a href=\"$self?mode=users&zort=all&page=$page\">Next</a> ";
	
	$last = " <a href=\"$self?mode=users&zort=all&page=$maxPage\">Last Page</a> ";
} 
else
{

	$next = ' | Next | ';      // we're on the last page, don't enable 'next' link
	$last = ' Last '; // nor 'last page' link
}

// print the page navigation link
echo " Showing: $pageNum of $maxPage pages&nbsp;&nbsp; " .$first . $prev .  $next . $last;

?>

</tr>
</table>
</body>
</html>