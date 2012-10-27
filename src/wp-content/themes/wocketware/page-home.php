<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">

				    <div id="main" class="twelvecol clearfix" role="main">
			
						<h1 id="hero" class="text-center">
							<a href="<?php echo home_url(); ?>" rel="nofollow">
								<img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/library/images/wocketware_large.png" />
							</a>
						</h1>

				    </div> <!-- end #main -->
				    
				</div> <!-- end 	#inner-content -->
    
			</div> <!-- end #content -->

		</div> <!-- end #container -->

		<!-- NOTE Footer is outside the container in this case so that it can be sticky
			to the bottom of the document for content shorter than browsers window.
			http://www.cssstickyfooter.com/ --> 
		<footer class="footer" role="contentinfo">
		
			<div id="inner-footer" class="wrap-narrow clearfix">
				
				<div>

					<div class="fourcol first">
						<h3>About</h3>
					</div>

					<div class="fourcol">
						
						<?php if( $_POST['w-contact-name'] ) { ?>

							<h3><?php echo wocket_send_contact_email( $_POST['w-contact-name'], $_POST['w-contact-email'], $_POST['w-contact-message'] ); ?></h3>

						<?php } else { ?>
						
							<h3>Contact</h3>
							<form id="w-contact-form" name="w-contact" method="post" action="#">
						   		<label for="w-contact-name-input">
									<div class="acc-label">Name</div>
									<input id="w-contact-name-input" name="w-contact-name" placeholder="Your Name" required="required" />
						   		</label>
							   		
						   		<label for="w-contact-email-input">
									<div class="acc-label">E-Mail</div>
									<input id="w-contact-email-input" name="w-contact-email" type="email" placeholder="Your Email" required="required" />
						   		</label>

						   		<label for="w-contact-message-textarea">
									<div class="acc-label">Message</div>
									<textarea id="w-contact-message-textarea" name="w-contact-message" rows="3" placeholder="A Message for Us" required="required"></textarea>
						   		</label>

						   		<label for="w-contact-submit-button">
						   			<div class="acc-label">Send</div>
						   			<button type="submit">Send</button>
						   		</label>
							</form>

						<?php } ?>

					</div>

				</div>
                
                <div class="eightcol first">
                	<p class="attribution">COPYRIGHT &copy; <?php echo date('Y'); ?> WOCKETWARE LLC. ALL RIGHTS RESERVED.</p>
                </div>
			
			</div> <!-- end #inner-footer -->
			
		</footer> <!-- end footer -->

		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html> <!-- end page. what a ride! -->