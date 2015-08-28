<?php
/*
Template Name: Landing Page
*/
?>

<?php get_header(); ?>

	<!-- Landing Page
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
						
	<!-- End Home Template -->

<?php get_footer(); ?>

