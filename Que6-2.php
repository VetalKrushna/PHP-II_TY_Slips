<!--(Basic, DA, HRA)-->
<html>
    <body>
        <form action="Que5-3.php" method="post">
            Enter Basic Salary:<input type="text" name="bs"><br>
            Enter DA:<input type="text" name="da"><br>
            Enter HRA:<input type="text" name="hra"><br>
            <input type="Submit">
        </form>
    </body>
</html>


<?PHP
  $eno=$_POST['eno'];
  $name=$_POST['name'];
  $addr=$_POST['addr'];

  setcookie('eno',$eno);
  setcookie('name',$name);
  setcookie('addr',$addr);
  
?>