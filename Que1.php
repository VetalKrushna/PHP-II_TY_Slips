<!--
1. Write a PHP script to keep track of number of times the web page has been access.
[Use session]
-->

<?php
session_start();

if(!isset($_SESSION['count']))
    {
        $_SESSION['count']=1;
    }
else
{
 $_SESSION['count']++;
}    

echo($_SESSION['count']." Time Page visited..");

?>