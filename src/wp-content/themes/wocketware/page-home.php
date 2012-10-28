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
								<img alt="<?php bloginfo('name'); ?>" 
									 src="<?php echo get_images_dir(); ?>/wocketware_small.png"
									 data-large="<?php echo get_images_dir(); ?>/wocketware_large.png"
									 data-small="<?php echo get_images_dir(); ?>/wocketware_small.png" />
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
						<div id="w-about">
							<p>Wocketware builds tailored software that delights our clients and their customers. We can provide turnkey software projects, or embed with your team and coach. We focus on collaboration and quality to build solid software that solves the right problems.</p> 

						</div>
					</div>


					<div class="fourcol last">
						
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

		<script type="text/javascript">
			var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-35850950-1"]),_gaq.push(["_setDomainName","wocketware.com"]),_gaq.push(["_trackPageview"]),function(){var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)}()
		</script>

	</body>

</html> <!-- end page. what a ride! -->