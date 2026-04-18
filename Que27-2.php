<?php
$text=$_GET['text'];
$a=["Apple","Cherry","Banana"];

  if($text!="")
    {
          echo("Sugg:");
          foreach($a as $i)
            {
                if(stripos($i,$text)!==false)
                    {
                        echo("$i");
                    }
            }
    }
?>