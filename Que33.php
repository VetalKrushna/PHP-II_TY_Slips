<html>
<body>
 <form method="POST" ">
   Enter course:<input type="text" name="t1"><br>
   <input type="submit" name="submit" value="submit">
</body>
</html>

<?php
if (isset($_POST['submit'])) 
{
    $course=$_POST['t1'];
    $xml=simplexml_load_file("student.xml");

    echo"<table border=1>";
    echo"<tr>";
    echo"<th>Roll no</th>";
    echo"<th>Name</th>";
    echo"<th>Address</th>";
    echo"<th>College</th>";
    echo"<th>Course</th>";

 foreach($xml->stud as $s)
 {
    if((string)$s->course==$course)
    {
        echo"<tr>";
        echo"<td>$s->rno</td>";
        echo"<td>$s->name</td>";
        echo"<td>$s->address</td>";
        echo"<td>$s->college</td>";
        echo"<td>$s->course</td>";
        echo"</tr>";
    }
 }
}
?>