<?php
	// Setup variables for this layout
	if ( get_sub_field('background_color') ):
		$background_color = get_sub_field('background_color');
	else:
		$background_color = "";	
	endif;
	if ( get_sub_field('background_image') ):
		$background_image = get_sub_field('background_image');
	else:
		$background_image = "";
	endif;
	if ( get_sub_field('image_repeat') ):
		$image_repeat = get_sub_field('image_repeat');
		$output_class = "repeat";
		$bg_class = "repeat";
	else:
		$output_class = "cover";
		$bg_class = "no-repeat";
	endif;
	if ( get_sub_field('more_link') ):
		$more_link = get_sub_field('more_link');
	else:
		
	endif;
?>
	</div>
</section>

<section class="dynamic-section <?php if ($i==1): echo 'first-section'; endif;?>">
	<div class="big-container <?php echo $output_class; ?>" style="background-color:<?php echo $background_color; ?>;background-image:url(<?php echo $background_image['url'] ?>), url(<?php bloginfo('template_directory');?>/assets/images/bg_shadow.png); background-position:center top; background-repeat:<?php echo $bg_class;?>, repeat-x;">
<?php	
?>