<!-- <h2><?= $title ?></h2> -->
<html>
	<head>
		<title>PC Repair Utah</title>
		<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
		<link rel="manifest" href="assets/favicons/manifest.json">
		<link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="assets/favicons/favicon.ico">
		<meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="4fvtTTFBpgDqvDVVEBOOJcWko2F8dyCn0MWUfgSdmOU" />
        <meta http-equiv="content-language" content="en" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="http://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
	</head>
	<body style="margin-bottom:50px">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="<?php echo base_url(); ?>"><img src="assets/images/logo.png" style="height:70px"></a>
				<a href="<?php echo base_url(); ?>"><img src="assets/images/text.png" hspace="10" style="height:40px"></a>
			</div>
			<div id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a style="font-size:24px" href="<?php echo base_url(); ?>">Home</a></li>
					<li><a style="font-size:24px" href="<?php echo base_url(); ?>repair">Repair</a></li>
					<li><a style="font-size:24px" href="<?php echo base_url(); ?>upgrades">Upgrades</a></li>
					<li><a style="font-size:24px" href="<?php echo base_url(); ?>newpc">Computers</a></li>
					<!-- <li><a href="<?php echo base_url(); ?>about">About</a></li> -->
					<li><a style="font-size:24px" href="<?php echo base_url(); ?>posts">Blog</a></li>
					<!-- <li><a href="<?php echo base_url(); ?>categories">Categories</a></li> -->
				</ul>
				<ul class="nav navbar-nav">
					<?php if($this->session->userdata('logged_in')) : ?>
						<li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
						<li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
						<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
						<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
					<?php endif; ?>
					<?php if(!$this->session->userdata('logged_in')) : ?>
						<!-- <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
						<li><a href="<?php echo base_url(); ?>users/login">Login</a></li> -->
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<!-- Flash message -->
		<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_updated')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('category_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('login_failed')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedin')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedout')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>


<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/images/perf_boost.PNG" alt="Performance Boost" style="width:100%;">
      </div>

      <div class="item">
        <img src="assets/images/back_to_school.PNG" alt="Back to School" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<h2>Welcome to PC Repair Utah!</h2>
<p>I build, fix, and upgrade personal computers and laptops.</p>
<p>Got a computer that needs fixing? Looking for a new computer? Email me!</p>
<p>pcrepairutah@gmail.com</p>
