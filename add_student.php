<?php
session_start();
	 
	 $connection = mysqli_connect('localhost','root','');
	 
	 $db=mysqli_select_db($connection,'student');

	 
$query= "insert into tiwaristudent values('','$_POST[user]','$_POST[pass]','$_POST[name]', '$_POST[roll_no]','$_POST[mail_id]','$_POST[dept]' ,'$_POST[father]', '$_POST[mobile_no]')";
	 $query_run= mysqli_query($connection,$query);

?>

<script type="text/javascript">
	alert("details added successfully");
	window.location.href="admin_dashboard.php";
</script>