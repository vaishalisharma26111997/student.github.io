<!DOCTYPE html>
<html>
<head>
	<title>main page</title>
	<style>
	header{
	color: white;
	background-color: #111E65;
	background-size :cover;
	background-repeat: no-repeat;
   text-align: center;
	background-repeat: no-repeat;
	background-size: cover;
}

#main {

text-align: center; 
  border: solid 4px black;
  width: 100%;
  height: 85%;
  margin-bottom: 25%;
  position: fixed;
  color: #f1f1f1;
  
  top: 35%;
  bottom: 10%;
  text-align: center;
  margin-bottom: 50px;
  margin: -1%;
  background-size :cover;
	background-repeat: no-repeat;
background-color: #B0DFE5;

}

marquee {
	font-size: 20px;

}


input[type=submit]{
text-align: center;
  width: 90%;
  padding: 10px 10px;
  margin: 10px 10px;
  box-sizing: border-box;
  font-size: 19px;

}
#main input[type=submit]{
text-align: center;
  width: 30%;
  padding: 10px 10px;
  margin: 10px 10px;
  box-sizing: border-box;
  font-size: 15px;
}

#main input[type=text]{
text-align: center;
  width: 100%;
  padding: 5px 5px;
  margin: 10px 10px;
  box-sizing: border-box;
  font-size: 15px;
  font-color: red;

}

b{
	text-align: center;
	font-size: 17px;
 	color: blue;
}

a{
	background-color:#B0DFE5;
	text-align: right;
}
</style>


	





	<?php
	 session_start();
	 
	 $connection = mysqli_connect('localhost','root','');
	 
	 $db=mysqli_select_db($connection,'student');
	 ?>
</head>
<body>
	<header>
		<br>
		
	<h1>STUDENT DASHBOARD</h1>
	
	<section>
<a href="logout.php">LOGOUT</a>

</section>

	<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" name="search_student" value="CLICK HERE">
					</td>
				</tr>
	</table>
</form>
	
	
	</header>
	<marquee>NOTE:This is a student dashboard.Enter your roll no. and know the details.</marquee>

	
	<div id="main">


		
			<?php
			if(isset($_POST['search_student'])){
				?>
				<form action="" method="post">
					
					<br>
					<br>
		        <b>ROLL NO</b>: <input type="text" name="roll_no" >
		        <br>
		        <br>
		        <br>
		        
		        
		        <input type="submit" name="search_student_for_student" value="GET DETAILS">
	            </form>
            <?php

			}

			if(isset($_POST['search_student_for_student'])){
				$rollno=$_POST['roll_no'];
	 $query= " SELECT *FROM tiwaristudent WHERE roll_no='$rollno'";
	 $query_run= mysqli_query($connection,$query);
	 while($row=mysqli_fetch_assoc($query_run))
	 {

	    
	    	?>
	    	<table>
	    		<tr>
	    			<td>
	    				<b>NAME:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['name'];?>" disabled>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>FATHER'S NAME:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['father'];?>" disabled>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>ROLL NO:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['roll_no'];?>" disabled>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>DEPT:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['dept'];?>" disabled>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>EMAIL ID:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['mail_id'];?>" disabled>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>PHONE NO:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['mobile_no'];?>" disabled>
	    				</td>
	    		</tr>

<tr>
	    			<td>
	    				<b>USERNAME:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['user'];?>" disabled>
	    				</td>
	    		</tr>



    	    		<tr>
	    			<td>
	    				<b>PASSWORD:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['pass'];?>" disabled>
	    				</td>
	    		</tr>


	    		
	    	</table>

	    	
	    	<?php


			}
		}
	
	?>	

</div>
</body>
</html>