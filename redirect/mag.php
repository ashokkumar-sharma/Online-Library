<?php
error_reporting(E_ALL ^ E_NOTICE);
    session_start();
   $userid = $_SESSION['userid'];
$username = $_SESSION['username']; 
$status = $_SESSION['status'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Magazines - Books4U</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/mag.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <script src="js/team.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body data-speed="10" data-type="background">
	<div class="logo-header">
	<nav class="nav">
		<table>
			<tr>
				<td><h1 class="logo"><a href="index.php">Books4U</a></h1></td>
				<td><a href="index.php" class="list1">Home</a></td>
				<td><a href="index.php" class="list1">Categories</a></td>
				<td><a href="index.php" class="list1">Contact</a></td>
				<td><a href="index.php" class="list1">About</a></td>
                <td><a href="team.html" class="list1">Team</a></td>
				<td class="portal"><a href="#" style="color: #ff5a09; text-decoration: none; padding-left: 590px;"><?php echo "$username" ?></a></td>
                <td class="portal1" style="border: transparent;"><a href="../index.php" style="border: transparent;">Log out</a></td>
			</tr>
		</table>
	</nav>
</div>
    <div id="div1">
        <a href="#" onclick="change_div()" target="_blank"><div id="category-1" data-scroll-speed="2"></div></a>
    <a href="#" onclick="change_div1()" target="_blank"><div id="category-2" data-scroll-speed="1"></div></a>
    <a href="#" onclick="change_div2()" target="_blank"><div id="category-3" data-scroll-speed="2"></div></a>
    <a href="#" onclick="change_div3()" target="_blank"><div id="category-4" data-scroll-speed="3"></div></a>
    <a href="#" onclick="change_div4()" target="_blank"><div id="category-5" data-scroll-speed="3"></div></a>
        </div>
<script src="js/team.js"></script>
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
        
        
        function change_div(){
                $('#div1').load('includes/mag/entertainment.html');        
            }
        function change_div1(){
                $('#div1').load('includes/mag/sports.html');        
            }
        function change_div2(){
                $('#div1').load('includes/mag/lifestyle.html');        
            }
        function change_div3(){
                $('#div1').load('includes/mag/business.html');        
            }
        function change_div4(){
                $('#div1').load('includes/mag/politics.html');        
            }
    </script>
</body>
</html>