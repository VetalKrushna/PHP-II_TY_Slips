<!--13. Write PHP script to read above created “book.xml” file into simpleXML object.
Display attributes and elements.(Hint L simple_xml_load_file() function )
-->
<?php
 $xml= simplexml_load_file("book1.xml");
 foreach($xml->book as $b)
 {
  echo"<br>book no:$b->bookno";
  echo"<br>book name:$b->bookname";
  echo"<br>book author name:$b->authorname";
  echo"<br>book Price:$b->price";
  echo"<br>book Year:$b->year";
  
  
 }
?>