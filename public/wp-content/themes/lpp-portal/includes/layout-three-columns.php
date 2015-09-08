<?php 
	// Three Width Layout
	$column_1 = get_sub_field('column_1');	
	$column_2 = get_sub_field('column_2');	
	$column_3 = get_sub_field('column_3');	
	?>
	<!-- Three Column Dynamic Layout-->
	<div class="container three-columns">
		<div class="row">
			<div class="four columns">
				<?php echo $column_1;?>			
			</div>
			<div class="four columns">
				<?php echo $column_2;?>			
			</div>
			<div class="four columns">
				<?php echo $column_3;?>			
			</div>
		</div>
	</div>
	<!-- END Three Column Dynamic Layout-->
