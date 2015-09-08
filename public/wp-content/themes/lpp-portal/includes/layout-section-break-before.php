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
		if(get_row_layout() == 'call_to_action'):
		else:
			$background_image = get_bloginfo('template_directory') . '/assets/images/bg_main_content.jpg';
		endif;
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
	</div>
</section>

<section class="dynamic-section <?php if ($i==1): echo 'first-section'; endif; if(get_row_layout() == 'call_to_action'): echo ' call-to-action'; endif;?>">
	<div class="big-container <?php echo $output_class; ?>" style="background-color:<?php echo $background_color; ?>;background-image:url(<?php bloginfo('template_directory');?>/assets/images/bg_shadow.png), url(<?php echo $background_image; ?>); background-position:center top; background-repeat:repeat-x, <?php echo $bg_class;?>;">
<?php	
?>