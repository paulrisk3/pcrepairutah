<html>
	<head>
		<title>PC Repair Utah</title>
		<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.css">
		<link rel="stylesheet" media='screen and (min-width: 800px)' href="assets/css/style.css">
		<link rel="stylesheet" media='screen and (max-width: 799px)' href="assets/css/style_small.css">
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
        <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
					<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
					<li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
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

	<div class="container-fluid">
	  <div id="myCarousel" class="carousel slide row" data-ride="carousel" data-interval="6500">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <a href="<?php echo base_url(); ?>boost"><img src="assets/images/perf_boost.png" alt="Performance Boost" style="width:100%;"></a>
	      </div>

	      <div class="item">
	        <a href="<?php echo base_url(); ?>repair"><img src="assets/images/back_to_school.png" alt="Back to School" style="width:100%;"></a>
	      </div>

	    <div class="item">
	        <a href="<?php echo base_url(); ?>newpc"><img src="assets/images/refurbs.png" alt="Back to School" style="width:100%;"></a>
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
	
	<!-- <h2>Welcome to PC Repair Utah!</h2>
	<h3>Looking for laptop or desktop repair? Need a new PC?</h3>
	<h3>You've come to the right place.</h3>
	<h3>Send me an email at <a href="mailto:pcrepairutah@gmail.com">pcrepairutah@gmail.com</a> to get started!</h3> -->


	</br>

	<div style="text-align:center; padding-top:10px; padding-bottom:20px; background-color: #032b3a">
		<h2 style="color:white; padding-bottom:10px">Welcome to PC Repair Utah!</h2>
	    <a href="<?php echo base_url(); ?>newpc"><button class="msgBtn">Looking for a new PC or laptop?</button></a>
	    <a href="<?php echo base_url(); ?>repair"><button class="msgBtn">Need a repair or a tune-up?</button></a>
	    <a href="<?php echo base_url(); ?>upgrades"><button class="msgBtn">Want a hardware upgrade?</button></a>
	</div>

	</br>

	<div style="padding:10px">
		<h2>Email me</h2>
		<form name="emailForm" action="Pages/send_email" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Subject</label>
				<input type="text" name="subject" class="form-control" maxlength="75">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea type="text" name="message" class="form-control" rows=4></textarea>
			</div>
			<button class="btn btn-secondary" type="submit">Submit</button>
		</form>
	</div>

	<!-- <div style="text-align:center; padding:20px; background-color: #032b3a">
	  <h2 style="color:white; padding-bottom:10px">Need something else?</h2>
	  <form action="/action_page.php">
	  	<div class="form-group">
	      <label for="name">Name:</label>
	      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
	    </div>
	    <div class="form-group">
	      <label for="email">Email:</label>
	      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	    </div>
	    <div class="form-group">
	      <label for="message">Message:</label>
	      <textarea type="text" class="form-control" id="name" placeholder="Type message here" name="message" rows=5></textarea>
	    </div>
	    <button type="submit" class="btn btn-secondary">Submit</button>
	  </form>
	</div> -->

<!-- </br>

<div style="border-style:solid">
	<h2 style="text-align:center">Have a question?</h2>
	<form class="form-horizontal" role="form" method="post" action="index.php">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Message</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="4" name="message"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<! Will be used to display an alert to the user>
			</div>
		</div>
	</form>
</div> -->
