<!--18. Write a javascript function to validate username and password for a membership form.-->

<html>
    <body>
     <form onsubmit="return check()">
        Enter Username:<input type="text" id="user"><br>
        Enter Password:<input type="Password" id="pass"><br>
        <input type="Submit" >
     </form>

     <script>
        function check()
        {
            var user=document.getElementById("user").value;
            var pass=document.getElementById("pass").value;

            if(user=="")
            {
                alert("UserName not be empty..");
                return false;
            }
            var pattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;
            if(!pattern.test(pass))
            {
            alert("Password must contain upper case,integer special symbol and 8 character minimun required..");
                return false;
            }

            alert("Form Submited..");
                return true;
                
            
        }
     </script>
   </body>

</html>