<?php
  $f=fopen("contact.dat","r");
 
  echo("<table border='1'>
         <tr> 
            <th>Srno</th>
            <th>Name</th>
            <th>Residense no</th>
            <th>Mobile</th>
            <th>Address</th>
         </tr>");

        while($row=fscanf($f,"%s %s %s %s %s"))
            {
                echo("<tr>");
                 foreach($row as $r)
                    {
                        echo("<td> $r </td>");
                    }
                 echo("</tr>")   ;
            }
     echo("</table>");
?>