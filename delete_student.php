<?php
session_start();
	 
	 $connection = mysqli_connect('localhost','root','');
	 
	 $db=mysqli_select_db($connection,'student');

$query= "delete from tiwaristudent where roll_no='$_POST[roll_no]'"; 
	 $query_run= mysqli_query($connection,$query);

?>

<script type="text/javascript">
	alert("details deleted successfully");
	window.location.href="admin_dashboard.php";
</script>
