<!DOCTYPE html>
<html>
<head>
	<title>main page</title>

<link rel="stylesheet" type="text/css" href="stylelogin.css" media="screen"/>

</head>
<body>
<section>
	<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIT MESRA LOGIN&nbsp;&nbsp;</h1>
<center><br><br>
	<div class="s">
	<form action="" method="post">
		<input type="submit" name="admin_login" value="ADMIN LOGIN">
		<input type="submit" name="student_login" value="STUDENT LOGIN">
	</form>
</div>
	<?php
	if(isset($_POST['admin_login'])){
      header("Location:admin_login.php");
	}

	if(isset($_POST['student_login'])){
		header("Location:student_login.php");
	}
	?>
</center>
</section>

</body>
</html>