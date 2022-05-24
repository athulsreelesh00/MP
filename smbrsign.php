<?php
if(isset($_POST["submit"]))				/*extra*/
{
$name=$_POST['uname'];
$pass=md5($_POST['psw']);
$ph=$_POST['phone'];
$email=$_POST['email'];
include 'connect.php';

	$query = "SELECT `uname` FROM  usign WHERE uname = '$name' ";		/*extra*/
	$result = mysqli_query($con,$query);										/*extra*/
		if(mysqli_num_rows($result))  
			{
				echo "<script>alert('Registration Failed!!  Username exists');
				window.location.href='signup.php';
				</script>";	
			}
		else
			{
				if(isset($_POST["submit"]))
				{
				
					$add="INSERT INTO usign(uname,password,phone,email) VALUES ('$name','$pass','$ph','$email')";
					
					if(mysqli_query($con,$add))
					{				
						echo "<script>alert('Registration Successfull');
						window.location.href='Home.php';
						</script>";
					}
					else
					{
						echo "<script>alert('Registration Failed');
						window.location.href='signup.php';
						</script>";
					}
				}
			}
	
	
}
?>



