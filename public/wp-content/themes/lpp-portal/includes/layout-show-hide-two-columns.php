<?php 
	// Two Width Layout
	$title = get_sub_field('title');
	$column_1 = get_sub_field('column_1');	
	$column_2 = get_sub_field('column_2');	
	?>
	<!-- Two Column Dynamic Layout-->
	<div class="container show-hide-two-column">
		<div class="row visible">
			<div class="ten columns">
				<h2><?php echo $title;?></h2>
			</div>
			<div class="two columns toggle">
				<a id="collapse<?php echo $counters[$layout];?>" class="button">MORE</a>
			</div>
		</div>
		<div class="row hidden">
			<div class="six columns">
				<?php echo $column_1; ?>
			</div>

			<div class="six columns">
				<?php echo $column_2; ?>
			</div>
		</div>
	</div>
	<!-- END Two Column Dynamic Layout-->
