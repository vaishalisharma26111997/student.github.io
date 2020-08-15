<?php
session_start();
	 
	 $connection = mysqli_connect('localhost','root','');
	 
	 $db=mysqli_select_db($connection,'student');

	


	 $query= "update tiwaristudent set (name='$_POST[name]', roll_no='$_POST[roll_no]' , dept='$_POST[dept]', mail_id='$_POST[mail_id]' , father='$_POST[father]' , mobile='$_POST[mobile_no]' where roll_no='$_POST[roll_no]')";
	 $query_run= mysqli_query($connection,$query);

?>

<script type="text/javascript">
	alert("details edited successfully");
	window.location.href="admin_dashboard.php";
</script>