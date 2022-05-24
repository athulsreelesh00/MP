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


$district=$_SESSION['dist'];
$state=$_SESSION['st'];

$query1 = "SELECT `uname` FROM `usign` WHERE id =$idd";
$res1 = mysqli_query($con,$query1);
$r = mysqli_fetch_array($res1);
    $name2=$_SESSION['n2']=$r['uname'];
    $payment_status="Completed";
 
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into tbl_payments(user_id,name,amount,fuel,quantity,dist,payment_status,added_on,bunk_id) values('$idd','$name2','$tot','$p','$qty','$kmt','$payment_status','$added_on','$idb')");
?>