		</div>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
	</body>
	<div class="footer navbar-fixed-bottom">
		<footer style="background-color:lightgrey; position:relative; right:0; left:0; bottom:0; padding:1rem; text-align:center">
			<p style="display:inline"><a href="mailto:pcrepairutah@gmail.com">pcrepairutah@gmail.com</a> | </p>
	  		<?php if(!$this->session->userdata('logged_in')) : ?>
				<a href="<?php echo base_url(); ?>users/login">login</a>
			<?php endif; ?>
		</footer>
	</div>
</html>