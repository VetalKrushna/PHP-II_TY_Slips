<!--27. Write Ajax program to fetch suggestions when is user is typing in a
textbox. (eg like google suggestions. Hint create array of suggestions and
matching string will be displayed)
-->

<html>
    <body>
        <form method="GET">
            <h3>Search Here</h3>
            <input type="text" id="t1" onkeyup="display(this.value)">
            <br>
        </form>
        <div id="show"></div>
    </body>

    <script>
        function display()
        {
            var text=document.getElementById("t1").value;
            var x=new XMLHttpRequest();
            x.open("GET","Que27-2.php?text="+text,true);
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