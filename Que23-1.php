<!--23. Write AJAX program to read contact.dat file and print the contents of the file in a tabular format
when the user clicks on print button. Contact.dat file should contain srno, name, residence number, mobile number, Address.
[Enter at least 3 record in
contact.dat file] -->

<html>
    <body>
        <h3>Content of Contact.dat file</h3>
        <button onclick="load()">Print</button>
        <div id="show"></div>
    </body>

    <script>
        function load()
        {
            var x=new XMLHttpRequest();
            x.open("GET","Que23-2.php");
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