<?php
/*
Template Name: Subscribe Page
*/
?>

<?php get_header(); ?>

	<!-- Landing Page
	================================================== -->
	
	<?php
		// Load hero section
		get_template_part('includes/layout', 'hero');
	?>

	<section class="dynamic-section first-section-portal">
		<div class="big-container">

			<div class="container">
				<div class="twelve columns main-content">
					<?php 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
						?>
							<div class="post">
							<h1 class="page-title"><?php the_title();?></h1>
								<div class="content">
									<?php the_content();?>
								</div>
							</div>
							<?php
						endwhile;
					else:
						// no posts found
					endif;

					wp_reset_postdata();
						
					?>
					
				</div>
			</div>
		</div>
	</section>	
						
	<!-- End Landing Template -->

<?php get_footer(); ?>

