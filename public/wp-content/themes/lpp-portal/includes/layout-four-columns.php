<?php 
	// Four Column Layout
	$column_1 = get_sub_field('column_1');	
	$column_2 = get_sub_field('column_2');	
	$column_3 = get_sub_field('column_3');	
	$column_4 = get_sub_field('column_4');	
	?>
	<!-- Three Column Dynamic Layout-->
	
	<div class="container four-columns">
		<div class="row">
			<div class="three columns">
				<?php echo $column_1;?>			
			</div>
			<div class="three columns">
				<?php echo $column_2;?>			
			</div>
			<div class="three columns">
				<?php echo $column_3;?>			
			</div>
			<div class="three columns">
				<?php echo $column_4;?>			
			</div>
		</div>
	</div>
	<!-- END Four Column Dynamic Layout-->
