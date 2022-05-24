<?php
if(isset($_POST["submit"]))				/*extra*/
{
$nname=$_POST['name'];
$name=$_POST['uname'];
$pass=md5($_POST['psw']);
$ph=$_POST['phone'];

$email=$_POST['email'];
$state=$_POST['bstate'];
$dist=$_POST['bdist'];
include 'connect.php';

	$query = "SELECT `uname` FROM  bunksign WHERE uname = '$name' ";		/*extra*/
	$result = mysqli_query($con,$query);										/*extra*/
		if(mysqli_num_rows($result))
			{
				echo "<script>alert('Registration Failed!!  Username exists');
				window.location.href='bunkreg.php';
				</script>";	
			}
		else
			{
				if(isset($_POST["submit"]))
				{
				
					$add="INSERT INTO bunksign(uname,password,phone,email,name,state,district) VALUES ('$name','$pass','$ph','$email','$nname','$state','$dist')";
					
					if(mysqli_query($con,$add))
					{				
						echo "<script>alert('Registration Successfull');
						window.location.href='BHome.php';
						</script>";
					}
					else
					{
						echo "<script>alert('Registration Failed');
						window.location.href='bunkreg.php';
						</script>";
					}
				}
			}
	
	
}
?>



