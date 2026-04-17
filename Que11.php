<!--10. Write a PHP script to generate an XML file in the following format in PHP.

<?php 
error_reporting(E_ALL);

  $doc=new DOMDocument("1.0","UTF-8");
  $doc->formatOutput=true;

  $Bookinfo=$doc->createElement("BookInfo");
  $doc->appendChild($Bookinfo);

  $Book=$doc->createElement("Book");
      $bno=$doc->createElement("bookno",1);           $Book->appendChild($bno);
      $bname=$doc->createElement("bookname","JAVA");  $Book->appendChild($bname);
      $aname=$doc->createElement("authorname","Balguru Swami");   $Book->appendChild($aname);
      $price=$doc->createElement("price",250);        $Book->appendChild($price);
      $year=$doc->createElement("year",2006);         $Book->appendChild($year); 
  $Bookinfo->appendChild($Book);

  $Book=$doc->createElement("Book");
      $bno=$doc->createElement("bookno",2);           $Book->appendChild($bno);
      $bname=$doc->createElement("bookname","C");  $Book->appendChild($bname);
      $aname=$doc->createElement("authorname","Denis Ritchie");   $Book->appendChild($aname);
      $price=$doc->createElement("price",500);        $Book->appendChild($price);
      $year=$doc->createElement("year",1971);         $Book->appendChild($year); 
  $Bookinfo->appendChild($Book);

  $doc->save("Book.xml");
  echo "File Book.xml created successfully!";
?>