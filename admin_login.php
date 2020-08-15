<!DOCTYPE html>
<html>
<head>
	<title>main page</title>
	<link rel="stylesheet" type="text/css" href="adminlogin_style.css" media="screen"/>

</head>
<body>
	<section>
	<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN LOGIN</h1>

<center>
	<form action="" method="post">
		USERNAME: <input type="text" name="user" required><br><br>
		PASSWORD: <input type="text" name="pass" required><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="submit"  name="submit">
	</form>
</section>
	 <?php
	 session_start();
	 
	 $connection = mysqli_connect('localhost','root','');
	 if($connection){
	 	echo "connection successfull";
	 }
	 else
	 {
	 	echo "no connection";
	 }

	 $db=mysqli_select_db($connection,'student');
	 if(isset($_POST['submit'])){
	
	 $username=$_POST['user'];
	 $password=$_POST['pass'];
	 $query= " SELECT *FROM tiwariadmin WHERE user='$username' and pass='$password'";
	 $query_run= mysqli_query($connection,$query);
	 $row=mysqli_num_rows($query_run);
	 {
	    if($row == 1){
	 	echo "login successfull";
	 	$_SESSION['user'] = $username;
	 	header('location:admin_dashboard.php');
	 }
	 else
	 {
	 	echo "login failed";
	 	header('location:admin_login.php');
	 }
	}

}

	







   ?>
	
</center>
</body>
</html>