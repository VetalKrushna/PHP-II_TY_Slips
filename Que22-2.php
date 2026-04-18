<?php
 $aname=$_GET["aname"];
 $con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres");
 $q="Select m.mno,m.mname,m.r_year,a.aname from movie as m,actor as a where a.mno=m.mno and aname='$aname';";

 $result=pg_query($con,$q);
 while($row=pg_fetch_row($result))
    {
 echo("Movie no:$row[0]<br> Movie name:$row[1]<br> Movie Release Year:$row[2]<br> Actor:$row[3]<br>");
    }
?>