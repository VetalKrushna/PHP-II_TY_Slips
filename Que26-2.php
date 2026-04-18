<?php

$cname = $_GET['cname'];
$con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres");

$q="Select o.ono,o.odate,o.shipping_Address from customer as c,order1 as o where c.cno=o.cno and cname='$cname'";

$result=pg_query($con,$q);
echo("Order detail of Customer:$cname<br>");
while($row=pg_fetch_row($result))
{
    echo("$row[0] $row[1] $row[2] ");
    echo("<br>");
}
pg_close();
?>