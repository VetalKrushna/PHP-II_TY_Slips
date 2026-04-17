<!--14. Write a PHP script to read “Movie.xml” file and print all MovieTitle and ActorName of file using
DOMDocument Parser.
“Movie.xml” file should contain following information with at least 5 records with values. -->

<?php
  $dom=new DOMDocument();
  $dom->load("Movie.xml");
  $movies=$dom->getElementsByTagName("Movie");

  foreach($movies as $m)
    {

        $title=$m->getElementsByTagName("MovieTitle")->item(0)->nodeValue;
        $actor=$m->getElementsByTagName("MovieActor")->item(0)->nodeValue;

   
            echo("<br>Movie Title:".$title);
            echo("<br>Movie Actor:$actor<br>");
    }
?>