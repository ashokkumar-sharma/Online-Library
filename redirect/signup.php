<?php
    error_reporting(E_ALL ^ E_NOTICE);
    
?>
<!DOCTYPE html>
<head>
    <title>SignUp - Books4U</title>
<!--    <link rel="stylesheet" type="text/css" href="css/style1.css">-->
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <style>
        .error{
            color: red;
            font-size: 20px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#signform").validate({
			rules: {
				no: {
					required: true,
					minlength: 2
				},
				pass: {
					required: true,
					minlength: 5
				},
				pass1: {
					required: true,
					minlength: 5,
				},
				email: {
					required: true,
					email: true
				}
				
			},
			messages: {
				no: {
					required: "Please enter a username",
					minlength: "Please enter at least 2 characters"
				},
				pass: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				email: "Please enter a valid email address"
			}
		});
        });
    
    
    </script>
</head>
<body data-type="background" data-speed="10">
    <div class="logo-header">
	<nav class="nav">
		<table>
			<tr>
				<td><h1 class="logo"><a href="index.html">Books4U</a></h1></td>
				<td><a href="index.html" class="list1">Home</a></td>
				<td><a href="index.html" class="list1">Categories</a></td>
				<td><a href="index.html" class="list1">Contact</a></td>
				<td><a href="index.html" class="list1">About</a></td>
                <td><a href="team.html" class="list1">Team</a></td>
                </td>
			</tr>
		</table>
	</nav>
</div>
<div class="main1">
<div class="bg" align="center">
    <h1 data-scroll-speed="-2">sign up with us and get 1 month of <strong style="color: #ff5a09; font-weight: 300;">premium!</strong></h1>
    </div></div>
<div class="parallax" data-type="background" data-speed="10">
    <?php   
//     if($_POST['subbtn']){
//        $getemail = $_POST['email'];
//         $getuser = $_POST['no'];
//         $getpass = $_POST['pass1'];
//        
//         require("./connect.php");
//         
//         $query = mysql_query("SELECT * FROM users WHERE username='$getuser'");
//         $numrows = mysql_num_rows($query);
//         if($numrows == 0){
//            $query = mysql_query("SELECT * FROM users WHERE email='$getemail'");
//            $numrows = mysql_num_rows($query);
//             if($numrows == 0){
//                 $password = md5(md5("340NU98".$getpass."67RQYT6"));
//                 $code = md5(rand());
//                 mysql_query("INSERT INTO users VALUES ('', '$getuser', '$getemail', '$password')");
//                 
//                 $query = mysql_query("SELECT * FROM users WHERE username='$getuser'");
//                 $numrows = mysql_num_rows($query);
//                 if($numrows >= 0){
////                     $webmaster = "shiv4m_ <shivshukla1997@gmail.com>";
////                     $headers = "From: $webmaster";
////                     $subject = "Thankyou for signing up";
////                     $message = "You're a valuable customer to us./n";
////                     $message .= "Thanks for registering on Books4u./n";
////                     $message .= "Enjoy free pdfs and books and get 1 month of premium."; 
////                         
////                    mail($getemail, $subject, $message, $headers);
//                     echo "You've been registered.";
//                     $getuser = "";
//                     $getemail = "";
//                 }
//                 else
//                     echo "Error creating account please try again.";
//             }
//             else
//                 echo "This email is already registered.";
//         }
//         else
//             echo "Choose a different username.";
//         mysql_close();
//    }
    require('connect1.php');
    if (isset($_POST['no']) && isset($_POST['pass1'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['pass1'];
 
        $query = "INSERT INTO `users` (id, username, email, password) VALUES ('', $username', '$email', '$password')";
        $result = mysqli_query($connection, $query);
        if($result){
            echo "User Created Successfully.";
        }else{
            echo "User Registration Failed";
        }
    }
        
    $form = '<form align="center" id="signform" action="signup.php" method="POST">
        <label>Email</label>
        <input type="email" name="email" id="setEmail"><br><br>
        <label>Password</label>
        <input type="password" name="pass" id="setPassword"><br><br>
        <label>Confirm</label>
        <input type="password" name="pass1" id="confirmPassword"
               onChange="checkpass();"><div id="passwordEdit"></div><br>
        <label>Username</label>
        <input type="text" name="no" id="mob-no"><br><br><br><br>
        <input type="submit" class="sub-btns" align="center" name="subbtn">
     </form>';
    
   echo "$form";
    ?>
</div>
<script>
     var $window = $(window);
        $('div[data-type="background"]').each(function () {
            var $bgobj = $(this);
            $(window).scroll(function () {
                var yPos = -($window.scrollTop() / $bgobj.data('speed'));
                var coords = '80% ' + yPos + 'px';
                $bgobj.css({
                    backgroundPosition: coords
                });
            });
        });
//    $(document).ready(function(){
//        $('.bg h1').typed({
//            strings: ['Sign Up with Us.','Get a more bunch of features.','Get free books every month.','Get 1 month of Premium.'],
//            loop: true,
//            backSpeed: 0,
//            typeSpeed: 1,
//        });
//        
//    });
    
    function checkpass(){
        var password = $('#setPassword').val();
        var confirmPass = $('#confirmPassword').val();
        
        if(password != confirmPass){
            $('#passwordEdit').html('Passwords do not match').css('color', 'red');
        }
        else{
            $('#passwordEdit').html('Password matches').css('color', 'green');
        }
    }
    
    $(document).ready(function(){
        $('#setPassword, #confirmPassword').keyup(checkpass);
    });
</script>
<script>
      $.validate({
    lang: 'es'
  });
</script>

<script src="js/team.js"></script>
</body>
</html>