<?php get_header(); ?>

	<!-- News Page
	================================================== -->
	
	<?php
		// Load hero section
		get_template_part('includes/layout', 'hero');
	?>

	<?php
		// Load subnav section
		get_template_part('includes/layout', 'subnav');
	?>

	<section class="dynamic-section first-section">
		<div class="big-container" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/bg_shadow.png); background-position:center top; background-repeat: repeat-x;">
			<div class="container fullwidth news">

				<?php
				
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						
						?>
						<div class="row">
							<h1><?php the_title();?></h1>							
							<?php the_content();?>
						</div>
						<?php
						
					endwhile;
				else :
					// no posts found
				endif;
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				
			</div>
		</div>
	</section>	
						
	<!-- End News Template -->

<?php get_footer(); ?>

