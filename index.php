
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Lane Chasteen's portfolio site.">
    <meta name="author" content="Lane Chasteen">
	<title>Lane Chasteen's Portfolio</title>
    <link rel="icon" href="../../favicon.ico">	
	<meta name="keywords" content="programmer, java programmer, javascript programmer, html, developer, java, prgrammer, JSP, software, c programmer, software developer, software engineer, programmer portfolio" />			
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
    	
<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/jumbotron/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include ("pages/nav.php"); ?>
	
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
	  <div class="col-md-2"><img src="./images/cappuccino-cup-canvas-steam-alpha.png" height="150" width="150" /></div>
		<div class="col-md-6"><h2>Left Handed Coding & Cappuccinos</h2></div>    
      </div>
    </div>

    <div class="container">

		<?php 
			
			$page = $_GET["page"];
			
			switch($page){
				case "home":					
					include ("pages/home.php");					
				break;
				case "resume":
					include ("pages/resume.php");					
				break;
				case "portfolio":
					include ("pages/portfolio.php");
				break;
				case "contact":
					include ("pages/contact.php");					
				break;
				case "login":
					include ("pages/login.php");
				break;
			}
			include ("pages/footer.php");
		?>
		

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
	<script src="assets/js/page-modify.js"></script>
  </body>
</html>