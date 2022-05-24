
<?php
session_start();
$var=$_SESSION["n"];
include("Database/Connection.php");
	$sql2="SELECT * from kswatable where username='".$var."' ";
	$result2=mysqli_query($con,$sql2);
	$row2=mysqli_fetch_array($result2);

	$idd=$row2['id'];

if(isset($_SESSION["id"])!=session_id())
{
  		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='emplogin.php';
      	</script>");
  	}
	else
  	{
?>

<?php

 $edit="SELECT * FROM kswatable";
 $result=mysqli_query($con,$edit);
 $row=mysqli_fetch_array($result);
?>


<?php


 
 
 $edit="SELECT * FROM newconnect";
 $result=mysqli_query($con,$edit);
 $row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>



<style>
.styled-table {
    border-collapse: collapse;
    margin: 24px 0;
    font-size: 0.9em;
    font-family: 'Poppins', sans-serif;;

    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #0d3073;
    color: #ffffff;
    text-align: center;
}

.styled-table th,
.styled-table td {
    padding: 4px 15px;
}



    </style>
<br><BR><BR><BR>

     <body>  

     <center> 
         <h2>CONNECTION REQUESTS</h2><br>
        <div class="panel-heading"> </div>
        <div class="panel-body" >
        <div class="row">
              <form method="post" enctype="multipart/form-data">
              
         
            
          
<div class="container">
  
                <table class="styled-table" border="2" style="margin-left:10px;">
                <thead>
                    <tr>
                  
                    <th width="5%">Applicant</th>
                
                   
              
					<th>Submit</th>
				
                    </tr>
                    </thead>
                    <tbody>
                          <?php  
       $d=$row['Section'];
                          $result = mysqli_query($con,"SELECT * FROM `newconnect` where user_id='$idd'");
                          while($row = mysqli_fetch_array($result)){?> 
                          
                          <tr>  
                               
                              <td> <input type="submit" id="compose" style="background:white;color:black;padding:4px 10px" value='<?php echo $row["email"];?>' name="compose"></a></td>
              

                          </tr>  


                                            <?php
                    if(isset($_POST["compose"]))
                    {
                        $digits = 13;
                       $de= rand(pow(10, $digits-1), pow(10, $digits)-1);
                    $id = $_POST["compose"];
                    $subject="New Connection Request Verified"; 
                    $message= "Dear Sir/Madam,   The documents you submitted for the new connection service are verified. We are glad to add you as our consumer.Your consumer number is: ";
                    $se="You can register on our  KSWA site with this 13 digit consumer number";
                    $f="Click here and register on: ";
                    $link=" https://ksebmanagementsystem.000webhostapp.com";
                    echo ("<script LANGUAGE='JavaScript'>
                    window.open('https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=$id&Subject=$subject&body=$message$de.$se.$f$link', '_blank');
                    </script>");

 
}
?>






                          <?php  
                          }  
                          ?>  
                         </tbody>
                     </table>
                     </form>
                        
                         
                </div>  

 
        </div>
        </div>
      
    </div>

                   
</body>
</center>                    
</html>


<?php
      }
?>
