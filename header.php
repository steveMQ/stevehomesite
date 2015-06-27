<!-- created by steveQ -->



<?php

   include_once('functions.php');


   $contactName = $_POST["theName"];
   $contactEmail = $_POST["theEmail"];
   $contactMsg = $_POST["theMessage"];

?>

<!DOCTYPE html>

<html>
<head>

  <?php wp_head(); ?>

	<meta charset="UTF-8">




	<meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0">

	<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/java.js"></script>


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

	<title>steve Q</title>


</head>

<div class="container">

	<body>

		<header class="row">

			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>

			    <a class="navbar-brand q-img" href="#home"></a>

			    <!-- <a class="navbar-brand"  id="next-button"></a> -->


			  </div>

			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			   	<div class="row">

				    <ul class="nav navbar-nav myDropdown">

				      <li class=""><a href="#home" class="nav-active">Home</a></li>
				      <li class=""><a href="#skill-nav">Skills</a></li>
				      <li class=""><a href="#three-cee">Development</a></li>
				      <li class=""><a href="#portfolio-id">Work</a></li>
				      <li class=""><a href="#contact">Contact Me</a></li>



				    </ul>

			   	</div>

			  </div>	<!-- /.navbar-collapse -->
			</nav>

		</header>
