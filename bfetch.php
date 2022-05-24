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
$sql="SELECT * FROM bunksign where uname='".$name."' and password='".$pass."'";

$result=mysqli_query($con,$sql);

		if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
					{
						$st=$row['status'];
						if($st=='0')
						{
							echo"<script>alert('Restricted User!!');
							window.location.href='bunklogin.php';
							</script>";
						}
						$st=$row['status'];
						$password=$row['password'];     /*from db to a variable in php file*/
						$idd=$_SESSION['idd']=$row['id'];
                        $_SESSION['idd']=$row['id'];
						
					}
			}
		else
			{
				
				echo"<script>alert('Incorrect Username or Password');
				window.location.href='bunklogin.php';
				</script>";
			}

	if ($password==$pass)
		{
			if($st=='1')
			{
				$_SESSION["id"]=session_id();
				echo"<script>
				window.location.href='BHome.php';
				</script>";
			}
		}
	
	else
		{
			
			echo"<script>alert('Incorrect Username or Password');
			window.location.href='bunklogin.php';
			</script>";
				
		}

		
		
		
?>