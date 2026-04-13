<!--2. Write a PHP script to keep track of number of times the web page has been access.
[Use cookies]-->
<?PHP
 if(isset($_COOKIE['count']))
    {
        $count=$_COOKIE['count']+1;
    }
    else
        {
            $count=1;
        }
    setcookie('count',$count,time()+60*60+24*7);
    echo("The page has been visited $count time.");

?>