<html>
<head>
<style>
body
{
	background-image: url("http://localhost/miniproject/pics/del.jpg");
	background-repeat:no-repeat;
	background-size: 100%;
}
.p{
		color: white;
}
</style>
</head>
<body>
<h2> <p class="p">Delete a Restaurant </h2>
	<!--Customer Name-->
<form action="<?php $_PHP_SELF ?>" method="POST">
<p class="p">Enter Restaurant ID:<input type="text" name="t_id" > <br><br>
	<!--Restaurant ID-->
<input type="submit" name="b_submit" value="Delete Restaurant">
<input type="submit" name="btn_home" value="Return to home">
</form>
</body>
</html>
<?php
if(isset($_POST['btn_home']))
{
 header('Location:homepage.php');
}
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db='miniproject';
$conn = mysql_connect($dbhost, $dbuser, $dbpass, $db);
mysql_select_db('miniproject');
if(! $conn ) 
{
die('Could not connect: ' . mysql_error());
}
if(isset($_POST['t_id'])){
$r=$_POST['t_id'];
$sql1= "delete from gio_region where r_id='$r'";
$sql= "delete from restaurant where r_id='$r'";
$res = mysql_query($sql1,$conn);
$res1 = mysql_query($sql,$conn);
if($res && $res1)
{ 
echo "Restaurant details deleted successfully";
}
else
{
echo "</br>";
echo "No such Restaurant";
}
}
mysql_close($conn);
if(isset($_POST['btn_home']))
{
 header('Location:homepage.php');
}
?>
