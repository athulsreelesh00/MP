<?php
$name=$_POST['uname'];
$pass=md5($_POST['psw'])  ;
include 'connect.php';
	
								
	if(!$conn)
	{
		echo("Error in Connection");
		echo mysqli_error($con);
	}
	
	$upd="UPDATE `usign` SET `password`='".$pass."'WHERE `uname`='".$name."'";
	$result=mysqli_query($con,$upd);
	
	if($result)
		{
			
			echo"<script>alert('Data Updated');
                window.location.href='login.php';
                </script>";
		}
	else
		{
			
			echo"<script>alert('Data Not Updated!!');
                window.location.href='forgot.php';
                </script>";
		}

	

?>
