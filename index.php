<!doctype html>
<html ng-app="scotchApp">
  <head>
    <meta charset="utf-8"> 


    <!--base href="/"-->	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Lane Chasteen's portfolio site.">
    <meta name="author" content="Lane Chasteen">
	<title>Lane Chasteen's Portfolio</title>
	<base href="http://localhost/portfolio/"> 
    <link rel="icon" href="../../favicon.ico">	
	<meta name="keywords" content="programmer, java programmer, javascript programmer, html, developer, java, prgrammer, JSP, software, c programmer, software developer, software engineer, programmer portfolio" />			
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
    	
<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/jumbotron/jumbotron.css" rel="stylesheet">
	<style>
		.nav, .pagination, .carousel, .panel-title a { cursor: pointer; } 
	</style>
	
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script src="assets/jquery-2.1.4.min.js"></script>
	<script src="assets/angular.min.js"></script>
	<!--script src="assets/js/bootstrap.min.js"></script-->
	<script src="assets/ui-bootstrap-tpls-0.13.4.min.js"></script>
	<script src="assets/angular-route.js"></script>
	<script src="js/route.js"></script>
  </head>
  <body>   
	<div ng-include="'pages/nav.html'"></div>
	
	  <div class="container">
		<h1>Left Handed Coding & Cappuccinos</h1>
		<img src="./images/cappuccino-cup-canvas-steam-alpha.png" height="150" width="150" />
			  
	  </div>
	
	
    <?php //include ("php-scripts/Database.php"); ?>

		<div class="container"  ng-controller="mainController">		
		<div ng-view></div>
		<div ng-include="'pages/footer.html'"></div>
	
    </div> <!-- /container -->

  
	

  </body>
</html>