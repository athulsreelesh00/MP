<?php
session_start();


include 'connect.php';
$name=$_SESSION["n"]=$_POST['uname'];
$pass=$_POST['psw'];

	

if(!$con)
	{
		echo("Error in Connection");
		echo mysqli_error($con);
	}
$sql="SELECT * FROM ausign where uname='".$name."'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
			{
				$password=$row['password'];     /*from db to a variable in php file*/
			}
	}
else
	{
		
		echo"<script>alert('Incorrect Username or Password');
		window.location.href='admin.php';
		</script>";
	}
	if ($password==$pass)
		{
			$_SESSION["id"]=session_id();
			echo"<script>
			window.location.href='admin/adindex.php';
			</script>";
		}
	else
		{
			
			echo"<script>alert('Incorrect Username or Password');
			window.location.href='admin.php';
			</script>";
				
		}
?>