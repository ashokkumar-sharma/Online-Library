<?php
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>
<html>
<head>
    <title>Please Log In</title>
</head>
<body>
    <?php
        if($userid && $username){
            
        }
        else
            echo "Please Log in to view. <a href='login.php'>Click here to log In</a>;
    ?>
</body>
</html>