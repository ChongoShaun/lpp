<?php
/*
Template Name: Secondary Page
*/
?>

<?php get_header(); ?>

	<!-- Secondary Page
	================================================== -->
	
	<?php
		// Load hero section
		get_template_part('includes/layout', 'hero');
	?>

	<?php
		// Load subnav section
		get_template_part('includes/layout', 'subnav');
	?>
	
	<?php 
		// Load Dynamic Content
		get_template_part('includes/dynamic-layout');
	?>

<section class="dynamic-section call-to-action">
	<div class="big-container cover" style="background-color:#dfd8c6;background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/bg_shadow.png); background-position:center top; background-repeat:repeat-x;">
		<!-- Call To Action Dynamic Layout-->
		<div class="container">
			<div class="row">
				<div class="twelve columns">
					<p>Interested in learning more about us? <a href="<?php echo get_the_permalink(49);?>">Inquire Today</a>!</p>
				
				</div>
			</div>
		</div>
		<!-- END Call To Action Dynamic Layout-->
	</div>
</section>

						
	<!-- End Secondary Template -->

<?php get_footer(); ?>

