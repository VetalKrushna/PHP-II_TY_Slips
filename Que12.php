<!--10. Write a PHP script to generate an XML file in the following format in PHP.
<?php 
  // 1. Initialize the root
  $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><BookInfo></BookInfo>');

  // 2. Add the first book
  $book1 = $xml->addChild('book'); // Use addChild
    $book1->addChild('bookno', 1);
    $book1->addChild('bookname', 'JAVA');
    $book1->addChild('authorname', 'Balguru Swami');
    $book1->addChild('price', 250);
    $book1->addChild('year', 2006);

  // 3. Add the second book
  $book2 = $xml->addChild('book');
    $book2->addChild('bookno', 2);
    $book2->addChild('bookname', 'C');
    $book2->addChild('authorname', 'Denis Ritchie');
    $book2->addChild('price', 500);
    $book2->addChild('year', 1971);

  // 4. Save to file
  $xml->asXML("Book1.xml");
  
  echo "File Book1.xml created successfully!";
?>
