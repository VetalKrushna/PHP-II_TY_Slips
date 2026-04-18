<?php
 $name=$_GET['name'];

 $a=array("Virat","Rohit","Dhoni");

 if($name=="")
    {
        echo("Stranger,Tell me your name..");
    }
 elseif(in_array($name,$a))   
    {
        echo("Hello Master:$name");
    }
  else
    {
        echo("($name) I dont know you..");
    }  

?>