<!--21.Remove div section elements after clicking
on button using jQuery. [Hint : Use #id
selector]
-->
<html>
    <head>
        <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    </head>
    <body>
      <div id="div" style="background-color:darkgoldenrod;height:60;width:500">
        <p>Hi Hello Good Morning</p>
     </div>
     <br>
      <button id="rem">Remove Div</button>
    </body>
    <script>
        $("#rem").click(function()
        {
            $("#div").remove();
        });
       
    </script>
</html>