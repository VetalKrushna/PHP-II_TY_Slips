<html>
    <head>
    <!--download the jquery-->
        <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    </head>
    <body>
        <p id="para">Hi Welcome To Our College:</p>
        <br>
        <ol>
            <li>Item 1</li>
            <li>Item 2</li>
        </ol>

   

        <script>
          $("#para").append("RBNB.");
          $("ol").append("<li>Item 3</li>");
        </script>
    </body>
</html>