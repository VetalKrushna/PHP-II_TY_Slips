<?php
   $style=$_COOKIE['fstyle'];
   $size=$_COOKIE['fsize'];
   $fcolor=$_COOKIE['fcolor'];
   $bgcolor=$_COOKIE['bgcolor'];

    echo"<body bgcolor=$bgcolor>
     <font style=$style>Hi</font>
     <font size=$size>Hello</font>
     <font color=$fcolor>Wellcome</font>
    </body>";
?>