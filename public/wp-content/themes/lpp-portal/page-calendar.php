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
		$page_id = "7"; //example

		if (has_post_thumbnail($page_id) ):
			$image = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'full' );
		endif;
		$image_URI = $image[0];
   			?>
   		<section id="page-hero">
			<div class="big-container full-width small-hero">
				<div class="small-slide" style="background-image: url(<?php echo $image_URI;?>);">&nbsp;</div>
			</div>
		</section>
	

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

<!-- End Calendar Template -->

<?php get_footer(); ?>

