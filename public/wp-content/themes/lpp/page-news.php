<?php
/*
Template Name: News Page
*/
?>

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
				
				$args = array(
					'post_type' => 'post',
				);

				$query = new WP_Query( $args );
				
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post();
						
						?>
						<div class="row">
							<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>							
							<?php the_content('<p><span class="button">MORE</span></p>');?>
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

