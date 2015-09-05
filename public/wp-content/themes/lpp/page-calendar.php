<?php
/*
Template Name: Calendar Page
*/
?>

<?php get_header(); ?>

	<!-- Calendar Page
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
	// Setup variables for this layout
	if ( get_sub_field('background_color') ):
		$background_color = get_sub_field('background_color');
	else:
		$background_color = "#dfd8c6";	
	endif;
	if ( get_sub_field('background_image') ):
		$background_image = get_sub_field('background_image');
		$background_image = $background_image['url'];
	else:
		$background_image = get_bloginfo('template_directory') . '/assets/images/bg_main_content.jpg';
	endif;
	if ( get_sub_field('image_repeat') ):
		$image_repeat = get_sub_field('image_repeat');
		$output_class = "repeat";
		$bg_class = "repeat";
	else:
		$output_class = "cover";
		$bg_class = "repeat-x";
	endif;
	if ( get_sub_field('more_link') ):
		$more_link = get_sub_field('more_link');
	else:
		
	endif;
?>

<section class="dynamic-section first-section">
	<div class="big-container <?php echo $output_class; ?>" style="background-color:<?php echo $background_color; ?>;background-image:url(<?php bloginfo('template_directory');?>/assets/images/bg_shadow.png), url(<?php echo $background_image; ?>) ; background-position:center top; background-repeat:repeat-x, <?php echo $bg_class;?>;">
		<div class="container">
			<?php the_post(); ?>
			<?php the_content(); ?>			
		</div>
	</div>
</section>

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

<!-- End Calendar Template -->

<?php get_footer(); ?>

