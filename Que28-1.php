<!--28. Write Ajax program to get book details from XML file when user
select a book name. Create XML file for storing details of book(title,
author, year, price).
-->

<html>
    <body>
        <h3>Select Book Name:</h3>
        <select id="bname" onchange="display(this.value)">
            <option value="JAVA">java</option>
            <option value="Python">Python</option>
        </select>
        <div id="show"></div>
    </body>
    <script>
        function display()
        {
            var bname=document.getElementById("bname").value;
            var x=new XMLHttpRequest();
            x.open("GET","Que28-2.php?bname="+bname,true);
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