	<section id="page-hero">
		<?php 
		if( is_front_page() ):
			$hero_class = "big-hero";
			
			
			
		else:
			$hero_class = "small-hero";				
		endif;

		//				    data-cycle-fx="scrollHorz" 
		?>
		<div class="big-container full-width <?php echo $hero_class;?>">
			<?php
			if( is_front_page() ):
				?>
				<div class="cycle-slideshow" 
				    data-cycle-slides="> div"
				    data-cycle-timeout="5000"
					data-cycle-pager="#hero-dot"
				    >
									    
									    
					<?php if( have_rows('slider') ): ?>
					
					
						<?php while( have_rows('slider') ): the_row(); 
					
							// vars
							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$text = get_sub_field('text');
					
							?>
					
							<div class="slide" style="background-image: url(<?php echo $image['url'];?>);">
								<div class="hero-message">
									<h1><?php echo $title;?></h1>
									<?php echo $text;?>
								</div>
							</div>
						<?php endwhile; ?>
								
					<?php endif; ?>		
							    
				</div>
				<div id="hero-dot"></div>
				<?php
			endif;
			?>
		</div>
	</section>