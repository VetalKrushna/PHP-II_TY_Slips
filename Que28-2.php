<?php
  $selected_bookname=$_REQUEST['bname'];
  $xml=simplexml_load_file("Book.xml");

  foreach($xml->book as $b)
    {
        if((string)$b->bookname == $selected_bookname)
            {
                echo("Book Detail.<br>");
                echo("Book no$b->bookno<br>");
                echo("Book Title:$b->bookname<br>");
                echo("Book Author:$b->authorname<br>");
                echo("Book Price:$b->price<br>");
                echo("Release Year:$b->year<br>");
            }
    }
?>