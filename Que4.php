<!--4. Write a PHP script to accept username and password. If in the first three chances,
username and password entered is correct then display second form with “Welcome
message” otherwise display error message. [Use Session]
-->

<html>
    <body>
        <form method="post" >
            Enter Username:<input type="text" name="user"><br>
            Enter Password:<input type="Password" name="pass"><br>
            <input type ="Submit" name="Login">
        </form>
    </body>
</html>

<?php
  session_start();
  if(!isset($_SESSION['cnt']))
    {
       $_SESSION['cnt']=0;
    }   
        if(isset($_POST['Login']))
         {
             $user=$_POST['user'];
             $pass=$_POST['pass'];

            if($user=="Krushna" && $pass=="Pass@123" && $_SESSION['cnt']<=3)
              {
                $_SESSION['user']=$user;
                header("Location:welcome.php");
                  exit();
              }
            else 
             {
                $_SESSION['cnt']++;
                $left = 3 - $_SESSION['cnt'];

                if ($left > 0) 
                {
                    echo "Wrong Credentials, Chances left: " . $left;
                }   
                else 
                {
                    echo "Access Denied. You have used all 3 chances.";
                }
          }  
         }   
?>
if (!isset($_SESSION['attempt'])) {
    $_SESSION['attempt'] = 0;
}

// 2. Only run validation if the form was actually submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST')
 {
    // The ?? operator provides a default empty string if the POST keys are missing
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if ($_SESSION['attempt'] >= 3)
     {
        echo "Reached maximum attempts!!";
     } 
     else 
        {
        if ($user === "admin" && $pass === "admin123")
         {
            $_SESSION['attempt'] = 0; // Reset counter on successful login
            header("Location: welcome.php");
            exit;
         } 
         else 
         {
            $_SESSION['attempt']++;
            echo "Error occurred! Attempt " . $_SESSION['attempt'] . " of 3.";
        }
    }
}
?>