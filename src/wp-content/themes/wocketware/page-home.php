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
								<img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/library/images/wocketware.png" />
							</a>
						</h1>

				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>