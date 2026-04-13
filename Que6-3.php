<?php
session_start();
  $basic=$_POST['bs'];
  $da=$_POST['da'];
  $hra=$_POST['hra'];

  $eno=$_COOKIE['eno'];
  $name=$_COOKIE['name'];
  $addr=$_COOKIE['addr'];

  $total=$da+$basic+$hra;

  echo("Employee Details<br>");
  echo("Name:$name<br>");
  echo("No:$eno<br>");
  echo("Address:$addr<br>");
  echo("Basic Salary:$basic<br>");
  echo("DA:$da<br>");
  echo("HRA:$hra<br>");
  echo("Total Salary:$total<br>");

?>