<?php
session_start();

// Get Product details from POST
$pname = $_POST['pname'];
$qty = $_POST['qty'];
$rate = $_POST['rate'];
$total = $qty * $rate;


    echo(" <h2>Final Bill</h2>");
    echo(" <h3>Customer Details</h3>");
    echo($_SESSION['cname']."<br>");
    echo($_SESSION['caddr']." <br>");
    echo($_SESSION['mob'] ."<br>");
    
    echo("<h3>Product Details</h3>");
    echo("Product Name: $pname <br>");
    echo("Quantity: $qty <br>");
    echo("Rate: $rate <br>");
    echo("<hr>");
    echo("<strong>Total Amount:$total</strong>");

?>