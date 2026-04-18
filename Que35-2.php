<?php
 $user = $_GET['user'];
 $pass = $_GET['pass'];
 $con = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=bcs123");
 if(!$con)
  {
   echo "Connection failed";
  }
 $q = "select * from store where username='$user' and password='$pass'";
 $res = pg_query($con, $q);
 if(pg_num_rows($res) > 0)
  {
   echo "Valid User";
  }
  else
  {
   echo "Invalid User";
  }
?>