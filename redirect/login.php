<?php
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Books4U</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/typed.js"></script>
</head>
<body id="body1">
	<div class="logo-header">
	<nav class="nav">
		<table>
			<tr>
				<td><h1 class="logo"><a href="index.html">Books4U</a></h1></td>
				<td><a href="index.php" class="list1">Home</a></td>
				<td><a href="index.php" class="list1">Legacy</a></td>
				<td><a href="index.php" class="list1">Contact</a></td>
				<td><a href="index.php" class="list1">About</a></td>
                <td><a href="team.html" class="list1">Team</a></td>
				<td class="portal1"><a href="signup.php">&nbsp;Sign Up</a></td>
			</tr>
		</table>
	</nav>
</div>


	<div class="login-form" align="center">
        <?php
		$form = '<form action="login.php" method="POST">
		<h1 style="color: white; font-weight: 300; display: inline"></h1><br><br><br>
		<label>Username<span style="color: red;">*</span></label>
        <input id="name-input" type="text" name="Name" placeholder="&nbsp;&nbsp;Enter your Name">
        <br>
        <br>
        <label>E-mail</label>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="email-input" type="email" name="eid" placeholder="&nbsp;&nbsp;Enter your email id"><br><br>
        <label>Password<span style="color: red;">*</span></label>
        <input id="pass-input" type="password" name="pid"
        placeholder="&nbsp;&nbsp;Enter your password"><br><br><br><br>
        <a href="#"><input type="submit" class="log-btn" name="loginbtn"></a>   
            
		</form>';
        
        if($_POST['loginbtn']){
            $user = $_POST['Name'];
            $password = $_POST['pid'];
            
            if($user){
                if($password){
                    require("connect.php");
                    $password = md5(md5("340NU98".$password."67RQYT6"));
//                    echo "$password";
                    
                    //check login info
                    $query = mysql_query("SELECT * from users WHERE username='$user'");
                    $numrows = mysql_num_rows($query);
                    if($numrows == 1){
                        $row = mysql_fetch_assoc($query);
                        $dbid = $row['id'];
                        $dbuser = $row['username'];
                        $dbpass = $row['password'];
                        
                        if($password == $dbpass){
                            $_SESSION['userid'] = $dbid;
                            $_SESSION['username'] = $dbuser;
                            echo "<span style='color: white; font-size: 25px;'>You have been logged in as <b>$dbuser</b>! <a href='index.php' style='color: white; text-decoration: none;'>CLICK HERE</a> to go to Main Page</span>";
                            $status = 1;
                            $_SESSION['status'] = 1;
                        }
                        else{
                            $status = 0;
                            $_SESSION['status'] = 0;
                            echo "<span style='color: #ffffff;'>Invalid Password.</span> $form";
                        }
                    }
                    else
                        echo "Invalid Username. $form";
                    mysql_close();
                }
                else
                    echo "You must enter your password. $form";
            }
            else
                echo "You must enter your username. $form";
         }
        else
            echo $form;
        ?>
	</div>
	
    <script>
        $(document).ready(function(){
            $('input[name=Name]').focus(function(){
                $('body').css({'background-image': 'url(assets/header12.jpg)','transition': 'all 0.3s linear'});
            });
            $('input[name=Name]').focusout(function(){
                $('body').css({'background-image': 'url(assets/header.jpg)','transition': 'all 0.3s linear'});
            });
            
            $('input[name=eid]').focus(function(){
                $('body').css({'background-image': 'url(assets/header12.jpg)','transition': 'all 0.3s linear'});
            });
            $('input[name=eid]').focusout(function(){
                $('body').css({'background-image': 'url(assets/header.jpg)','transition': 'all 0.3s linear'});
            });
            
         });
        $(document).ready(function(){
             $('input[name=pid]').focus(function(){
                $('body').css({'background-image': 'url(assets/header12.jpg)','transition': 'all 0.3s linear'});
            });
            $('input[name=pid]').focusout(function(){
                $('body').css({'background-image': 'url(assets/header.jpg)','transition': 'all 0.3s linear'});
            });
            
         });
        
    $(document).ready(function(){
        $('form h1').typed({
            strings: ['Log In with our website', 'Enjoy bunch of features', 'We\'ll keep you updated.'],
            typeSpeed: 0,
            backSpeed: 0,
            loop: true,
            pause: 10,
        });
    });
    </script>
</body>
</html>