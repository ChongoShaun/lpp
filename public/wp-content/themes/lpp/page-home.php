<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<!-- Home
	================================================== -->
	<?php
		// Load hero section
		get_template_part('includes/layout', 'hero');
	?>
	
	<?php 
		// Load Dynamic Content
		get_template_part('includes/dynamic-layout');
	?>
			
	<!-- End Home Template -->

<?php get_footer(); ?>

