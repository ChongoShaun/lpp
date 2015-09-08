<div class="container gallery">
	<div class="row">
	<?php 
	$images = get_sub_field('images');
	if( $images ): ?>
    <?php foreach( $images as $image ): ?>
            <div class="four columns">
	            <a href="<?php echo $image['url']; ?>">
	                 <img src="<?php echo $image['url']; ?>" class="scale-with-grid" alt="<?php echo $image['alt']; ?>" />
	            </a>
            </div>
    <?php endforeach; ?>
	<?php endif; ?>
	</div>
</div>