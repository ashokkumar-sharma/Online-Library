<?php
error_reporting(E_ALL ^ E_NOTICE);
    session_start();
   $userid = $_SESSION['userid'];
$username = $_SESSION['username']; 
$status = $_SESSION['status'];
?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Books4U - eBooks, Videos, Magazines</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/slider.css" />
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <style>
    .modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    border-radius: 8px;
    border: 2px solid green;
    }
        .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
    </style>
</head>

<body>
    <!-- <div id="fakeLoader"></div> -->
    <div id="loader-wrapper" class="loader-wrap">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div id="content">
        <!--NAVIGATION BAR-->
        <div class="logo-header">
            <nav class="nav">
                <a onclick="toTop(); return false;" href="#" id="top"><img src="assets/back-to-top.png" width="50" height="50"></a>
                <table>
                    <tr>
                        <td>
                            <h1 class="logo"><a href="index.php">Books4U</a></h1></td>
                        <td><a onclick="initscroll('quote-box', 10); return false();" href="#" class="list1">Home</a></td>
                        <td><a onclick="initscroll('sec1', 10); return false();" href="#" class="list1">Categories</a></td>
                        <td><a onclick="initscroll('contact', 10); return false();" href="#" class="list1">Contact</a></td>
                        <td><a onclick="initscroll('about-us', 10); return false();" href="#" class="list1">About</a></td>
                        <td><a href="team.html" class="list1">Team</a></td>
                        <td class="portal"><a href="login.php">Log In</a></td>
                        <td class="portal1"><a href="signup.php">&nbsp;&nbsp;Sign Up</a></td>
                    </tr>
                </table>
            </nav>
        </div>
        <!--NAVIGATION BAR ends-->
        <!--parallax starts-->
        <section id="home" data-type="background" data-speed="10">
            <div id="slider">
                <ul class="cb-slideshow" data-type="background" data-speed="10">
                    <li><span>Image 01</span>
                        <div>
                            <h3>Everything you wanted..</h3></div>
                    </li>
                    <li><span>Image 02</span>
                        <div>
                            <h3>Books, Videos, Magazines,..</h3></div>
                    </li>
                    <li><span>Image 03</span>
                        <div>
                            <h3>You're at the right place</h3></div>
                    </li>
                    <li><span>Image 04</span>
                        <div>
                            <h3>Welcome to Books4U</h3></div>
                    </li>
                </ul>
            </div>
        </section>
        <!--parallax ends-->
        <section data-type="background" data-speed="10">
            <div id="about-us" align="center" class="abt">
                <h2>About us</h2>
                <p style="font-size: 24px;">We provide a common platform where you can access, ebooks, journals, magazines and videos of your choice.<br><b style="font-size: 28px;">Books4U.Only4U</b></p>
            </div>
        </section>
        <!--quote starts-->
        <!-- <div class="page-content" <!-- style="background: #fff; width: 100%; height: 100px " -->
        <section id="quote-box" data-type="background" data-speed="10">
            <div class="perspective">
                <div class="myBox" align="center" data--20p-bottom="transform: rotateX(-90deg)" data--50p-bottom="transform: rotateX(0deg)">
                    <div class="myBoxB"> <span>Everything you need</span> </div> In one place! </div>
            </div>
            <div class="quotes" align="center">
                <h1 class="h1">Quote of the day<br><img src="assets/line.png"></h1>
                <p class="p">Preparation can bring you so far, but after that you got to takes few leaps of faith.
                    <br>-<i>Wentworth Miller</i></p>
            </div>
        </section>
        <!--quote ends-->
        <section id="sec1">

               <div class="sec">
                <ul class="no1">
                    <li class="cat-1">
                    <a href="#" onClick="openbox();"><img src="assets/eBook1.png"></a>
                    </li>
                    <li class="cat-2"><a href="#" onClick="openbox();"><img src="assets/magazine.png"></a></li>
                    <li class="cat-3"><a href="#" onClick="openbox();"><img src="assets/Videos.png"></a></li>
                </ul>
                <br>
                <br>
                <ul class="no2">
                    <li class="cat-4"><a href="#" onClick="openbox();"><img src="assets/article.png"></a></li>
                    <li class="cat-5"><a href="#" onClick="openbox();"><img src="assets/regional.png"></a></li>
                    <li class="cat-6"><a href="#" onClick="openbox();"><img src="assets/editor.png"></a></li>
                </ul>
                   <div id="myModal" class="modal">
                       <div class="modal-content">
                        <span class="close">×</span>
                        <p>You are not logged in! Please Log in to view. You will be redirected to login page in 3 seconds...</p>
                       </div>
            </div>
            </div>
        </section>
        <!--contact form starts-->
        <section id="contact" data-type="background" data-speed="10">
            <div id="contact-form" align="center" data-type="background" data-speed="8" accept-charset='UTF-8'>
                <form  id="contact-us" method="post">
                    <h1><span class="contact">Subscribe</span> US</h1>
                    <label>Name</label>
                    <input class="name-input" type="text" name="name" placeholder="&nbsp;&nbsp;Enter your Name">
                    <br>
                    <br>
                    <label>E-mail</label>
                    <input class="email-input" type="email" name="eid" placeholder="&nbsp;&nbsp;Enter your email id">
                    <br>
                    <br>
                    <label class="msg">Message</label>
                    <textarea class="msg-input" type="text" name="msg" placeholder="&nbsp;&nbsp;Message..."></textarea>
                    <br>
                    <br>
                    <br>
                    <div class="sub-btn"><a href="#">Submit</a></div>
                    <br> </form>
            </div>
        </section>
        <!--contact form ends-->
        <!--footer starts-->
        <section id="footer-cont" data-type="background" data-speed="10">
            <div class="footer">
                <div class="social" align="center">
                    <h1>CONNECT <span class="soc">SOCIALLY</span> WITH US</h1>
                    <br>
                    <ul>
                        <li>
                            <a href="#"><img src="assets/facebook.png" width="60px" height="60px"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/twitter.png" width="60px" height="60px"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/instagram.png" width="60px" height="60px"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/linkedin.png" width="60px" height="60px"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/google-plus.png" width="60px" height="60px"></a>
                        </li>
                    </ul>
                </div>
                <div class="list" align="center">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolios</a></li>
                    </ul>
                    <br>
                    <h3 class="copyr">&copy;Books4U</h3> </div>
            </div>
        </section>
        <!--footer starts-->
    </div>
    <script>
var modal = document.getElementById('myModal');

var span = document.getElementsByClassName("close")[0];

 function openbox() {
    modal.style.display = "block";
     setTimeout(function() {
            window.location='login.php'
        }, 4500);
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    <script>
        //sticky navbar js
        $(window).scroll(function () {
            if ($(this).scrollTop() > (700 - 78)) {
                $('nav').addClass('nav1');
            }
            else {
                $('nav').removeClass('nav1');
            }
        });
        //parallax js
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
        //animates
        var animationName = 'animated wobble';
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(function () {
            $('.sub-btn').hover(function () {
                $('.sub-btn').addClass(animationName).one(animationEnd, function () {
                    $(this).removeClass(animationName);
                });
            });
        });
        var animationQuotes = 'animated rotateInUpLeft';
        var animationSec = 'animated fadeInUp';
        $(window).scroll(function () {
            var wScroll = $(this).scrollTop();
            if (wScroll >= $('.quotes').offset().top - 400) {
                $('.quotes').addClass(animationQuotes).css('-moz-animation-duration', '1.5s');
            }
            // if(wScroll >= $('.quotes p').offset().top - 400){
            //     $('.quotes p').addClass('animated fadeInUp').css('-moz-animation-delay','3s');
            // }
            if (wScroll >= $('.sec').offset().top - 400) {
                $('.sec ul').each(function () {
                    $('.sec ul').addClass(animationSec);
                });
            }
            if (wScroll >= $('.abt').offset().top - 500) {
                $('.abt').addClass('animated fadeIn').css('-moz-animation-duration', '2s');
            }
        });
     
    </script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/skrollr.min.js"></script>
    <script type="text/javascript">
        var s = skrollr.init();
    </script>
</body>

</html>