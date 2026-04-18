<!--35. Write a PHP script using AJAX concept, to check user name and password are valid or Invalid
(use database to store user name and password)-->
<!-- 
  create table store(username text,password text);
   insert into store values('RBNB','bcs123');
   insert into store values('CDJ','bcs123');
   select * from store;
-->
<html>
 <body>
    Username: <input type="text" id="t1"><br><br>
    Password: <input type="password" id="t2"><br><br>

    <input type="button" value="Login" onclick="checkUser()">
    <h3 id="res"></h3>
 </body>
 <script>
    function checkUser()
    {
        var u = document.getElementById("t1").value;
        var p = document.getElementById("t2").value;
        var x = new XMLHttpRequest();

        x.open("GET", "Que35-2.php?user=" + u + "&pass=" + p, true);
        x.send();
        x.onreadystatechange = function()
        {
           if(x.readyState == 4 && x.status == 200)
             {
              document.getElementById("res").innerHTML = x.responseText;
             }
        }
   }
</script>
</html> 