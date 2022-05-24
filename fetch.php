<?php
session_start();


$name=$_SESSION["n"]=$_POST['uname'];

$pass=md5($_POST['psw']);
include 'connect.php';




if(!$con)
	{
		echo("Error in Connection");
		echo mysqli_error($con);
	}
$sql="SELECT * FROM usign where uname='".$name."'";

$result=mysqli_query($con,$sql);

		if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
					{
						$st=$row['status'];
						if($st=='0')
						{
							echo"<script>alert('Restricted User!!');
							window.location.href='login.php';
							</script>";
						}
						$st=$row['status'];
						$password=$row['password'];     /*from db to a variable in php file*/
						$idd=$_SESSION['idd']=$row['id'];
						
					}
			}
		else
			{
				
				echo"<script>alert('Incorrect Username or Password');
				window.location.href='login.php';
				</script>";
			}

	if ($password==$pass)
		{
			if($st=='2')
			{
				$_SESSION["id"]=session_id();
				echo"<script>alert('Admin Logged In');
				window.location.href='admin/adindex.php';
				</script>";
			}
			elseif($st=='1')
			{
				$_SESSION["id"]=session_id();
				echo"<script>
				window.location.href='Home.php';
				</script>";
			}
		}
	
	else
		{
			
			echo"<script>alert('Incorrect Username or Password');
			window.location.href='login.php';
			</script>";
				
		}

		
		
		
?>