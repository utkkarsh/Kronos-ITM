<html>
    <head>
        <title>About Us</title>
        <link rel="shortcut icon" href="assests/images/title_logo.png">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/slider.css">
        <link rel="stylesheet" type="text/css" href="events/css/normalize.css" />
	    <link rel="stylesheet" type="text/css" href="events/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
	    <link rel="stylesheet" type="text/css" href="events/css/demo.css" />
	    <link rel="stylesheet" type="text/css" href="events/css/card.css" />
	    <link rel="stylesheet" type="text/css" href="events/css/pattern.css" />
        <style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #6ebb7c;
}
table#t01 tr:nth-child(odd) {
   background-color:#57d491;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
    </head>
    <body class="demo-1">
        <script>
            function changeClass(){
               $('#addClass').toggleClass('is-active');
                $('#mySidenav').toggleClass('open');
            }
        </script>
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
                <div class="banner">
            <div class="header-section-about" data-ix="slide-up-section" id="Tickets">
                <div class="content-wrapper w-container">
                    <div class="header-box">
                        <div class="mini-title"></div>
                        <h2>Schedule</h2>
                        <div class="crimson underline"></div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <table width="100% " id="t01">
            <tr>
                <th>Day</th>
                <th>Time</th>
                <th>Event</th>
            </tr>
            <tr>
    <td>Day 1</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Day 2</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>Day 3</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
        </table>

    </body>
</html>