<!--24. Write AJAX program where the user is requested to write his or her
name in a text box, and the server keeps sending back responses while
the user is typing. If the user name is not entered then the message
displayed will be, “Stranger, please tell me your name!”. If the name is
Rohit, Virat, Dhoni, Ashwin or Harbhajan , the server responds with
“Hello, master <user name>!”. If the name is anything else, the message
will be “<user name>, I don’t know you!”.-->

<html>
    <body>
        <form method="GET">
            Enter Name:<input type="text" id="name" onkeyup="check(this.value)">
        </form>
        <div id="show"></div>
    </body>

    <script>
        function check()
        {
            var name=document.getElementById("name").value;
            var x=new XMLHttpRequest();
            x.open("GET","Que24-2.php?name="+name,true);
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