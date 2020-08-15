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
  border: solid 1px black;
  width: 82%;
  height: 85%;
  margin-bottom: 25%;
  position: fixed;
  color: #f1f1f1  ;
  left: 17%;
  top: 30%;
  bottom: 10%;
  text-align: center;
  margin-bottom: 50px;
  margin: -1%;
  background-size :cover;
	background-repeat: no-repeat;
background-color: #B0DFE5;

}
#sidebar {
  height: 80%; /* Full-height: remove this if you want "auto" height */
  width: 15%; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
   /* Stay on top */
  top: 28%; /* Stay at the top */
  left: 0%;

  background-color:#120a8f;
  background-repeat: no-repeat;
  background-size:cover;
text-align: center;
 
  padding-top: 20px;
  text-align: center;
  border-left: 2px;
}

#sidebar input[type=submit]{
text-align: center;
  width: 90%;
  padding: 20px 20px;
  margin: 10px 10px;
  box-sizing: border-box;
  font-size: 15px;

}

#main input[type=submit]{
text-align: center;
  width: 30%;
  padding: 7px 7px;
  margin: 7px 7px;
  box-sizing: border-box;
  font-size: 15px;
}

input[type=text]{
text-align: center;
  width: 90%;
  padding: 5px 5px;
  margin: 7px 7px;
  box-sizing: border-box;
  font-size: 15px;
  font-color: red;

}


b{
	text-align: center;
	font-size: 18px;
	color: blue;
}

a{
	background-color:#B0DFE5;

}

marquee{
	font-size: 20px;
}

p,input[type="text"]{
	width: 80%;
	text-align: center;
  
  padding: 5px 5px;
  margin: 7px 7px;
  box-sizing: border-box;
  font-size: 15px;
  font-color: red;

}



</style>

	<?php
	 
	 
	 $connection = mysqli_connect('localhost','root','');
	 
	 $db=mysqli_select_db($connection,'student');
	 ?>
</head>
<body>
	<header>
		<br>
		
		
	<h1>ADMIN DASHBOARD</h1>
	
	
	<section>
	EMAIL:admin@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">LOGOUT</a>
</section>
	
	

	<br>
	
	


	
    </header>
   
    
    <marquee>NOTE:This is a admin dashboard .</marquee>
<div id="sidebar">
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" name="search_student" value="search student">
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="edit_student" value="edit student">
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="add_student" value="add student">
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="delete_student" value="delete student">
					</td>
				</tr>

			</table>
		</form>
	</div>

	<div id="main">
		
			<?php
			if(isset($_POST['search_student'])){
				?>
				<form action="" method="post">
					<br>
					<br>
					<br>
					<br>
					<br>
		        <p><b>ROLL NO</b>: <input type="text" name="roll_no" ><p>
		        <br>
		        <br>
		        <br>
		        <br>
		        <br>
		        
		        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="search_stuent_for_student" value="SEARCH STUDENT">
	            </form>
            <?php

			}

			if(isset($_POST['search_stuent_for_student'])){
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

	<?php
			if(isset($_POST['edit_student'])){
				?>
				<form action="" method="post">
					<br>
					<br>
					<br>
		      <p>  <b>ROLL NO</b>: <input type="text" name="roll_no" ></p>
		        <br>
		        <br>
		        <br>
		        <br>
		        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="search_student_for_edit" value="SEARCH STUDENT">
	            </form>
            <?php

			}

			if(isset($_POST['search_student_for_edit'])){
				$rollno=$_POST['roll_no'];
	 $query= " SELECT * FROM tiwaristudent WHERE roll_no='$rollno'";
	 $query_run= mysqli_query($connection,$query);
	 while($row=mysqli_fetch_assoc($query_run))
	 {

	    
	    	?>
	    	<form action="admin_dashboard_edit.php" method="post">
	    	<table>
	    		<tr>
	    			<td>
	    				<b>NAME:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['name'];?>" >
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>FATHER'S NAME:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['father'];?>">
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>ROLL NO:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['roll_no'];?>" >
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>DEPT:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['dept'];?>">
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>EMAIL ID:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['mail_id'];?>">
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>PHONE NO:</b>
	    			</td>
	    				<td>
	    					<input type ="text" value="<?php echo $row['mobile_no'];?>">
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
<form action="" method="post">
	    	<input type="submit"  name="edit"  value="save">
</form>
	    	<?php
	    }
	}
	?>

	<?php
			if(isset($_POST['add_student'])){
				?>
				<form action="add_student.php" method="post">
<?php

			
	    
	    	?>
	    	<table>
	    		<tr>
	    			<td>
	    				<b>USERNAME:</b>
	    			</td>
	    			<td>
	    					<input type ="text" name="user"  required >
	    			</td>
	    		</tr>


	    		<tr>
	    			<td>
	    				<b>PASSWORD:</b>
	    			</td>
	    				<td>
	    					<input type ="text" name="pass"   required >
	    				</td>
	    		</tr>

	    		
	    		<tr>
	    			<td>
	    				<b>NAME:</b>
	    			</td>
	    				<td>
	    					<input type ="text" name="name"  required>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>ROLL NO:</b>
	    			</td>
	    				<td>
	    					<input type ="text" name="roll_no"  required>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>MAIL ID:</b>
	    			</td>
	    				<td>
	    					<input type ="text" name="mail_id"  required>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>DEPARTMENT:</b>
	    			</td>
	    				<td>
	    					<input type ="text" name="dept"  required>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>FATHER'S NAME:</b>
	    			</td>
	    				<td>
	    					<input type ="text" name="father"  required>
	    				</td>
	    		</tr>

	    		<tr>
	    			<td>
	    				<b>MOBILE NO:</b>
	    			</td>
	    				<td>
	    					<input type ="text" name="mobile_no"  required>
	    				</td>
	    		</tr>

	    		

	    		
	    	</table>
<form action="" method="post">
	    	<input type="submit"  name="add_student"  value="add student">
</form>
</form>
	    	<?php
	    }
	
	?>

	<?php
			if(isset($_POST['delete_student'])){
				?>
				<form action="delete_student.php" method="post"></form>
					<br>
					<br>
					<br>
					<br>
   <p>   <b>ROLL NO:</b> <input type="text" name="roll_no"> </p>
    <br>
    <br>
    <br>
    <br>
		 &nbsp;	<input type="submit" name="delete_student" value="delete student">
<?php
}
?>

		




	    	
    </div>


</body>
</html>