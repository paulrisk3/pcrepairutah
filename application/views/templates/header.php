<html>
	<head>
		<title>PC Repair Utah</title>
		<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.css">
		<link rel="stylesheet" media='screen and (min-width: 800px)' href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" media='screen and (max-width: 799px)' href="<?php echo base_url(); ?>assets/css/style_small.css">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
		<link rel="manifest" href="assets/favicons/manifest.json">
		<link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="assets/favicons/favicon.ico">
		<meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
	</head>
	<body style="margin-bottom:50px">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="<?php echo base_url(); ?>"><img id="logo" src="assets/images/logo.png" id="logo"></a>

				<a href="<?php echo base_url(); ?>"><img id="logo_text" src="assets/images/text.png" id="logo_text" hspace="10"></a>
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