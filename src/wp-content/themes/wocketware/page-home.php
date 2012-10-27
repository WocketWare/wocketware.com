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
				    
				</div> <!-- end #inner-content -->
    
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
						<h3>Contact</h3>
					</div>

					<div class="twocol last">&nbsp;</div>
				</div>
                
                <div class="twelvecol first">
                	<p class="attribution">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
                </div>
			
			</div> <!-- end #inner-footer -->
			
		</footer> <!-- end footer -->

		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html> <!-- end page. what a ride! -->