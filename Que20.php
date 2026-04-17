<!--20. Write a Javascript program to accept name of student, change font color to red, font
size to 18 if student name is present otherwise on clicking on empty text box display
image which changes its size (Use onblur, onload, onmousehover, onmouseclick,
onmouseup
-->
<html>
<body onload="pageLoaded()">

   Student Name:
    <input type="text" id="Name" onblur="handleInput()">
    <br><br>

    <!-- Image is hidden by default and changes size on mouse events -->
    <img id="Img" 
         src="myimage.jpeg" 
         style="display: none; width: 200px; transition: 0.1s;"
         onmouseover="enlargeImage()" 
         onclick="clickResize()" 
         onmouseup="releaseResize()">

<script>
       
        function handleInput() 
        {
            var name = document.getElementById("Name");
            var img = document.getElementById("Img");

            if (name.value !== "") 
            {
                // If name is present, change font color and size
                name.style.color = "red";
                name.style.fontSize = "18px";
                img.style.display = "none";
            } 
            else 
            {
                // If name is empty, display the image
                img.style.display = "block";
            }
        }

        // Image resizing functions based on mouse events
        function enlargeImage()
         {
            document.getElementById("Img").style.width = "300px";
        }

        function clickResize()
         {
            document.getElementById("Img").style.width = "400px";
        }

        function releaseResize() 
        {
            document.getElementById("Img").style.width = "200px";
        }
    </script>
</body>
</html>
