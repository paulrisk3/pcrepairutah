<!-- <h2><?= $title ?></h2> -->
<html>
	<head>
		<title>PC Repair Utah</title>
		<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
		<link rel="manifest" href="assets/favicon/manifest.json">
		<link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="assets/favicon/favicon.ico">
		<meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="4fvtTTFBpgDqvDVVEBOOJcWko2F8dyCn0MWUfgSdmOU" />
        <meta http-equiv="content-language" content="en" />
		<script src="http://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
	</head>
	<body style="margin-bottom:50px">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">PC Repair Utah</a>
			</div>
			<div id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="<?php echo base_url(); ?>repair">Repair</a></li>
					<li><a href="<?php echo base_url(); ?>newpc">New PC's</a></li>
					<!-- <li><a href="<?php echo base_url(); ?>about">About</a></li> -->
					<li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
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


<img src="assets\images\PCRepair.PNG" alt="PC Repait Utah flyer" style="width:28%; float:left; padding:5px">

<h3>Welcome to PC Repair Utah!</h3>
<p>I build, fix, and upgrade personal computers and laptops.</p>
<p>Got a computer that needs fixing? Looking for a new computer? Email me!</p>
<p>pcrepairutah@gmail.com</p>
