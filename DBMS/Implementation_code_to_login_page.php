<?php
if(isset($_POST['btn_admin']))
{
 header('Location:adminloginpage.php');
}
elseif(isset($_POST['btn_user']))
{
 header('Location:userloginpage.php');
}
?>
<html>
<head>
<style>
body
{
	background-image: url("http://localhost/miniproject/pics/loginpag.jpg");
	background-repeat:no-repeat;
	background-size: 100%;
}
.p{
		color: white;
}
</style>
<body>
<h3><div id="LOGIN">
<fieldset=style="width:30%"> 
<legend><p class="p"> Select Admin/User</p></legend><br>
<label><p class="p">If you want to Add New Restaurant Log-In Here</p></label><br><br>
<input id="button" type="submit" name="submit" value="Admin" onClick="document.location.href='http://localhost/miniproject/adminloginpage.php'"/ color=white ><br><br>
<label><p class="p">If you want to view Restaurants Log-In Here</p></label><br><br>
<input id="button" type="submit" name="submit" value="User" onClick="document.location.href='http://localhost/miniproject/userloginpage.php'"/><br><br></fieldset=style="width:30%"></h2></div></h3>
</fieldset>
</div>
</body>
<html>
