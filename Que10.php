<?xml version="1.0" encoding="UTF-8"?>
<?php
 $str=<<<XML

 <bookitem>
 <book>
 <bookno>1</bookno>
 <bookname>JAVA</bookname>
 <authorname>abc</authorname>
 <price>200</price>
 <year>2006</year>
 </book>
 <book>
 <bookno>2</bookno>
 <bookname>python</bookname>
 <authorname>xyz</authorname>
 <price>300</price>
 <year>2009</year>
 </book>
 </bookitem>
 XML;
 $fname="book.xml";
 $f=fopen($fname,"w");
 fwrite($f,$str);
 fclose($f);
echo"success".$fname;
?>