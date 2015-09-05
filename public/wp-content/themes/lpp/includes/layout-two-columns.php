<?php 
	// Two Width Layout
	$column_1 = get_sub_field('column_1');	
	$split_column_1 = get_sub_field('split_column_1');
	$column_1_split = get_sub_Field('column_1_split');
	$column_2 = get_sub_field('column_2');	
	$split_column_2 = get_sub_field('split_column_2');
	$column_2_split = get_sub_Field('column_2_split');
	?>
	<!-- Two Column Dynamic Layout-->
	<div class="container two-column">
		<div class="row">
			<?php if( $split_column_1 == TRUE ): ?>
				<div class="three columns">
					<?php echo $column_1_split; ?>
				</div>
				<div class="three columns">
			<?php else: ?>
				<div class="six columns">
			<?php endif; ?>
					<?php echo $column_1;?>			
				</div>			
			<?php if( $split_column_2 == TRUE ): ?>
				<div class="three columns">
					<?php echo $column_2; ?>
				</div>
				<div class="three columns">
					<?php echo $column_2_split; ?>					
				</div>
			<?php else: ?>
				<div class="six columns">
					<?php echo $column_2;?>			
				</div>
			<?php endif; ?>

		</div>
	</div>
	<!-- END Two Column Dynamic Layout-->
