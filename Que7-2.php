

<html>
<body>
    <h2>Product Information</h2>
    <form action="Que7-3.php" method="POST">
        Product Name: <input type="text" name="pname" ><br>
        Quantity: <input type="number" name="qty" ><br>
        Rate: <input type="number" name="rate" ><br>
        <input type="submit" value="Generate Bill">
    </form>
</body>
</html>

<?php
session_start();
    $_SESSION['cname'] = $_POST['name'];
    $_SESSION['caddr'] = $_POST['addr'];
    $_SESSION['mob'] = $_POST['mob'];

?>