<?php
// 1. Start the session to access $_SESSION['user']
session_start();
?>

<html>
<body>
    <h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
    <p>You have successfully logged into the second form.</p>
</body>
</html>