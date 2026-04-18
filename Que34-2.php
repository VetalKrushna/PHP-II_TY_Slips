<?php
 $ename = $_GET['ename'];
 $con = pg_connect("host=localhost port=5432 dbname=postgres user=postgres");
 if(!$con)
 {
  echo "Database connection failed";
 }
 $q = "select * from employee where ename='$ename'";
 $res = pg_query($con, $q);
 while($row = pg_fetch_row($res))
 {
  echo "Empno: $row[0] <br>";
  echo "Name: $row[1] <br>";
  echo "Dept: $row[2] <br>";
  echo "Salary: $row[3] <br>";
  
 }
 ?>