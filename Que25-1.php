<!--25. Create TEACHER table as follows TEACHER(tno, tname,
qualification, salary). Write Ajax program to select a teachers name
and print the selected teachers details.
-->

<!--
   create table teacher1(tno int primary key,tname text,Qualification text,Salary int);
    insert into teacher1 values(1,'Alice','BA',16600);
    insert into teacher1 values(2,'Bob','PG',17600);
    insert into teacher1 values(3,'ABC','Bsc',15600);
    insert into teacher1 values(4,'PQR','MA',19600);
    select * from teacher1;
-->
<html>
    <body>
        <h3>Select Teacher:</h3>
        <select id="tname" onchange="display(this.value)">
            <option value="Alice">Alice</option>
            <option value="Bob">Bob</option>
            <option value="ABC">ABC</option>
            <option value="PQR">PQR</option>
        </select>
        <div id="show"></div>
    </body>
    <script>
        function display()
        {
            var tname=document.getElementById("tname").value;
            var x=new XMLHttpRequest();
            x.open("GET","Que25-2.php?tname="+tname,true);
            x.send();
            x.onreadystatechange=function()
            {
                if(x.readyState==4 && x.status==200)
                {
                    document.getElementById("show").innerHTML=x.responseText;
                }
            };
        }
     </script>    
</html>