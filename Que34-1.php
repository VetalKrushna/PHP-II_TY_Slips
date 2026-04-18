<!--34. Create employee table as follows EMP (eno, ename, designation, salary). Write Ajax program to
select the employees name and print the selected employee’s details.-->
<!-- 
   create table employee(eno int primary key,ename text,designation text,salary int);
     insert into employee values(1,'Alice','Manager',56000);
     insert into employee values(2,'Bob','Developer',36000);
     insert into employee values(3,'ABC','Tester',35000);
-->


<html>
    <body>
        <h3>Select Employee:</h3>
        <select id="ename" onchange="display(this.value)">
            <option value="Alice">Alice</option>
            <option value="Bob">Bob</option>
            <option value="ABC">ABC</option>
        </select>
        <div id="show"></div>
    </body>
    <script>
        function display()
        {
            var ename=document.getElementById("ename").value;
            var x=new XMLHttpRequest();
            x.open("GET","Que34-2.php?ename="+ename,true);
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