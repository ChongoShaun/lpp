	<section id="page-hero">
		<?php 
		if( is_front_page() ):
			$hero_class = "big-hero";
			
			
			
		else:
			$hero_class = "small-hero";				
		endif;
		?>
		<div class="big-container full-width <?php echo $hero_class;?>">
			<?php
			if( is_front_page() ):
				?>
				<div id="hero-message">
					HERO MESSAGE!
				</div>
				<?php
			endif;
			?>
		</div>
	</section>