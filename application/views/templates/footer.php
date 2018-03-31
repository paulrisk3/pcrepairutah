		</div>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
	</body>
	<div class="footer navbar-fixed-bottom">
		<footer style="background-color:lightgrey; position:relative; right:0; left:0; bottom:0; padding:1px; text-align:center">
		    
		     <block>
		        <h5>Art and logos by Samantha Gustufson | <a href="mailto:samanthagus24@gmail.com">samanthagus24@gmail.com</a> | <?php if(!$this->session->userdata('logged_in')) : ?>
				<a href="<?php echo base_url(); ?>users/login">login</a>
			<?php endif; ?></h5>
			</block>
			
            </div>
		</footer>
	</div>
</html>