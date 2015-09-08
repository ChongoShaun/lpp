	<section id="page-hero">
		<?php 
			$hero_class = "small-hero";				
		//	data-cycle-fx="scrollHorz" 
		?>
		<div class="big-container full-width <?php echo $hero_class;?>">
			<?php
			$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
			?>
			<div class="small-slide" style="background-image: url(<?php echo $image;?>);">&nbsp;</div>
			<?php
			?>
		</div>
	</section>