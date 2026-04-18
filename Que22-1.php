<!--22. Write AJAX program to print movie details by selecting an Actor’s name. Create
tables Movie and Actor with 1:M cardinality as follows:
Movie (mno,mname, release_year) Actor (ano,aname)
[Use PostgreSQL] Solution 
-->
<!-- 
Database table
create  table movie(mno int primary key,mname text,r_year int);
 insert into movie values(1,'Boothnath',2016);
 insert into movie values(2,'War',2015);
 insert into movie values(3,'Welcome',2014);
 insert into movie values(4,'Dhadkan',2013);

 create table actor(ano int primary key,aname text,mno int references movie(mno));
  insert into actor values(101,'Abitabh Bachan',1);
  insert into actor values(102,'Akshay Kumar',4);
  insert into actor values(103,'Sunil Shetty',4);
  insert into actor values(104,'Hritik',2);
-->

<html>
    <body>
      <form method="GET">
    Select Actor Name:
        <select id="aname" onchange="display(this.value)">
            <option value="Akshay Kumar">Akshay Kumar</option>
            <option value="Abitabh Bachan">Abitabh Bachan</option>
            <option value="Sunil Shetty">Sunil Shetty</option>
            <option value="Hritik">Hritik</option>
        </select>
        <div id="result"></div>
      </form>
    </body>

 <script>
   function display()
   {
    var aname=document.getElementById('aname').value;

    var x=new XMLHttpRequest();
    x.open("GET","Que22-2.php?aname="+aname,true);
    x.send();
    x.onreadystatechange=function()
    {
        if(x.readyState==4 && x.status==200)
        {
            document.getElementById("result").innerHTML=x.responseText;
        }
    };
   }
 </script>
</html>