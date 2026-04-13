<?php
  $fstyle=$_POST['t1'];
  $fsize=$_POST['t2'];
  $fcolor=$_POST['t3'];
  $bgcolor=$_POST['t4'];

  setcookie("fstyle",$fstyle);
  setcookie("fsize",$fsize);
  setcookie("fcolor",$fcolor);
  setcookie("bgcolor",$bgcolor);
?>

<html>
    <body>
        <a href="Que3-3.php">Click to See Changes</a>
    </body>
</html>