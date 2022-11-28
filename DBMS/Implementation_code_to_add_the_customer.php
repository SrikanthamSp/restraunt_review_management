<html>

<head>

</head><style>

body

{

              background-image: url("http://localhost/miniproject/pics/adcus.jpg");

              background-repeat:no-repeat;

              background-size: 100%;

}

.p{

                             color: black;

}

</style>

<body>

<h2> Insert new customer </h2>

<form action="<?php $_PHP_SELF ?>" method="POST">

<p class="p">Customer Name:<br><input type="text" name="t_name"> <br><br>
  
  <!--Customer Name-->

Customer ID:<p class="p"><input type="text" name="t_id" > <br><br>
  
  <!--Customer ID-->

Gender:<p class="p"><input type="radio" name="t_type" value="male">Male

  &nbsp;&nbsp;&nbsp;<input type="radio" name="t_type" value="female">Female<br><br>

Phone<p class="p"><input type="text" name="t_phone"> <br><br>
  
  <!--Phone-->

User ID:<p class="p"><input type="text"placeholder="Enter your Email-Id" name="t_userid"> <br><br>
  
  <!--User ID-->

<label><p class="p">Password must contain maximum 8 characters</label><br><br>

Password:<p class="p"><input type="Password" name="t_password"> <br><br>
  
  <!--Password-->

Date of Registration:<p class="p"><input type="Date" name="t_regdate"> <br><br>
  
  <!--Date of Registration-->

<input type="submit" name="b_submit" value="Register"><br><br>

<label><p class="p">After Registration click here</label><br><br>

<input type="submit" name="b_home" value="Proceed">

</form>

</body>

</html>

<?php

if(isset($_POST['b_home'])){

header("Location:userhomepage.php");

}

$dbhost = 'localhost';

$dbuser = 'root';

$dbpass = '';

$db='miniproject';

$conn = mysql_connect($dbhost, $dbuser, $dbpass, $db);

mysql_select_db('miniproject');

if(! $conn ) {

die('Could not connect: ' . mysql_error());

}

$cn='';

$cid='';

$g='';

$phno='';

$u='';

$p='';

$d='';

if(isset($_POST['t_id'])){

$cn=$_POST['t_name'];

$cid=$_POST['t_id'];

$phno=$_POST['t_phone'];

$u=$_POST['t_userid'];

$p=$_POST['t_password'];

$d=$_POST['t_regdate'];

$sql= "insert into customer(c_id,c_name,gender,phone,user_id,psswd,d_reg) values($cid,'$cn','$g',$phno,'$u','$p','$d')";

$res = mysql_query($sql,$conn);

if(!$res)

{

die('could not get data:'. mysql_error());

}

echo "<br>";

echo "Registration successfully";

}

mysql_close($conn);

?>

