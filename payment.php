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
?>

<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function pay_now(){
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+600,
               success:function(result){
                   var options = {
                        "key": "rzp_test_0qbXq3FNukHOMh", 
                        "amount": <?php echo $tot; ?>00, 
                        "currency": "INR",
                        "name": "On Site Fuels",
                        "description": "On Site Fuels Payment Gateway",
                        "image": "img/5.png",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>
</head>
<body onload="pay_now()">
</body>