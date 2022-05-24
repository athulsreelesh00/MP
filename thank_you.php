

<h1></h1>
<h1></h1>
<h1></h1>

<a href="Home.php" class="btn btn-primary" id="print-btn">Back to Home</a>

<?php
session_start();
include "connect.php";
$name=$_SESSION["n"];
$idd=$_SESSION["idd"];
$tot=$_SESSION['total'];
$p=$_SESSION['p'];
$kmt=$_SESSION['kmt'];
$qty=$_SESSION['qty'];
$idb=$_SESSION['idb'];
$amt=$_SESSION['amt'];

$name2=$_SESSION['n2'];
$district=$_SESSION['dist'];
$state=$_SESSION['st'];
// $query1 = "UPDATE tbl_ads SET status = 4 WHERE username = '$email' and status = 5";
// $res1 = mysqli_query($conn,$query1);
// if($res1)
// {
    // echo('
    // <script>
    // window.location.href="Home.php";
    // </script>');
// }
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
   
      <!-- <table class="table table-bordered print">
        <thead>
          <tr>
       
            <th>User</th>
            <th>Amount</th>
            <th>Fuel</th>
            <th>Qty</th>
          </tr>
        </thead>
        <tbody>
         
          <tr>
         
            <td><?php echo $name; ?></td>
            <td><?php echo $tot; ?></td>
            <td><?php echo $p; ?></td>
            <td><?php echo $qty; ?></td>
          </tr>
        
        </tbody>
      </table> -->

      <style>
table,
td {
  border: solid 2px black;
  text-align: center;
  border-collapse: collapse;
}



td {
  padding: 0.5em;
}

[colspan="4"][rowspan="2"] {
  height: 4em;
}
</style>


<table class="table table-bordered print">

    <tr>
    <td colspan="4" width="25%"rowspan="2"><h1>BILL</h1></td>
    <tr>     
        </tr>
        </tr>
    <tr>
    <td colspan="4" width="25%"rowspan="2"><h2><?php echo $name,' Petroleum ,', $district,' District ,', $state; ?></h2></td>
    </tr>
        <tr>     
        </tr>
      
    <tr>
    <td>Name: </td>
    <td><?php echo $name2; ?></td>
    </tr>

    <tr>
    <td>Fuel:</td>
    <td><?php echo $p; ?></td>
    </tr>

    <tr>
    <td>Quantity:</td>
    <td><?php echo $qty; ?> litre's</td>
    </tr>

    <tr>
    <td>Rate Per Litre:</td>
    <td><?php echo $amt; ?> ₹</td>
    </tr>

    <tr>
    <td>Payable:</td>
    <td><?php echo $tot; ?> ₹</td>
    </tr>

</table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>