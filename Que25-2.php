<?php
  $tname=$_GET['tname'];
  $con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres");
  $q="Select * from teacher1 where tname='$tname'";

  $result=pg_query($con,$q);
  while($row=pg_fetch_row($result))
    {
        echo("Teacher no:$row[0]<br> Teacher name:$row[1]<br> Qualification:$row[2]<br> Salary:$row[3]<br>");
    }
?>