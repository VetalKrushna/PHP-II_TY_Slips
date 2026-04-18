<html>
    <body>
    <h3>Fibonacci Series Generator</h3>
    <p>Enter the number of terms:</p>
    <input type="number" id="n" placeholder="e.g. 10">
         <!-- onclick event triggers the function -->
    <button onclick="generate()">Generate</button>
    </body>
    <script>
        function generate()
        {
            var n=document.getElementById("n").value;
             var f=0,s=1,t=0;
             document.write(f+","+s+",");
             for(i=3;i<=n;i++)
             {
                t=f+s;
                document.write(t+",")
                f=s;
                s=t;
             }
        }
     </script>   
</html>