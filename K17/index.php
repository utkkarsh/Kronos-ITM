<!DOCTYPE HTML>
<html>
    <head>
        <title>Kronos'17-ITM Gwalior</title>
        <link rel="shortcut icon" href="assests/images/title_logo.png">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/slider.css">
        <link rel="stylesheet" type="text/css" href="css/loader.css">        
    </head>
    <body>
        <script>
            function changeClass(){
               $('#addClass').toggleClass('is-active');
                $('#mySidenav').toggleClass('open');
            }
        </script>
        <div id="preloader">
            <div id="status">
                <img src="css/logo.png">
				
				
		
                <div class="container">
                    <div class="shore">
                        <div class="wave-rel-wrap">
                          <div class="wave"></div>
                        </div>
                    </div>
                    <div class="shore delay">
                        <div class="wave-rel-wrap">
                            <div class="wave delay"></div>
                        </div>
                    </div>
					
                  <div class="text text-k">K</div>
                  <div class="text text-r">R</div>
                  <div class="text text-o">O</div>
                  <div class="text text-n">N</div>
                  <div class="text text-op">O</div>
                  <div class="text text-s">S</div>
                </div>
            </div>
        </div>
        <header>
            <div class="brand-logo-wrapper">
                <img src="assests/images/brand_logo_w.png"/>
            </div>
            <nav class="nav-bar-wrap">
                <ul class="nav-bar">
                    <a href="index.php"><li class="nav-item">Home</li></a>
                    <a href="about.php"><li class="nav-item">About</li></a>
                    <a href="events.php"><li class="nav-item">Events</li></a>
                    <a href="team.php"><li class="nav-item">Team</li></a>
                    <a href="contact.php"><li class="nav-item">Contact</li></a>
                    <a href="sponsor.php"><li class="nav-item">Sponsors</li></a>
					<a href="https://goo.gl/X4GXwA"><li class="nav-item">Campus Ambassador</li></a>
                </ul>
            </nav>
            <?php include("header-m.php");?> 
        </header>
        
<!-- Slider-->
        <div class="cont">
            <div class="slider">
                <ul class="nav">
            </div>
        <div data-target='right' class="side-nav side-nav--right">
            <img src="assests/images/slider-right.png">        
        </div>
        <div data-target='left' class="side-nav side-nav--left">
            <img src="assests/images/slider-left.png">        
        </div>
        </div>
            
<!---->    
        <div class="cpright"><center>&copy;&nbsp;Copyright 2017&nbsp;&nbsp;Kronos&nbsp;&nbsp;<a href="dev/Playgue.html">Developed By Team Playgue</a></center></div>    
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <script src="js/slider.js"></script>
             <script type="text/javascript">
                $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
        });
            </script>
    </body>
</html>