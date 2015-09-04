<?php

if( have_rows('layouts') ):
	$i == 1;
    while ( have_rows('layouts') ) : the_row();
		if( $i == 1):
			?>
			<section class="dynamic-section">
				<div class="big-container first-section">
			<?php
		endif;

        if( get_row_layout() == 'section_break' ):
			include('layout-section-break-before.php');
	    elseif( get_row_layout() == 'full_width' ): 
			include('layout-full-width.php');
	    elseif( get_row_layout() == 'two_columns' ): 
			include('layout-two-columns.php');     
	    elseif( get_row_layout() == 'three_columns' ): 
			include('layout-three-columns.php');     
		elseif( get_row_layout() == 'four_columns' ): 
			include('layout-four-columns.php');     
		elseif( get_row_layout() == 'call_to_action' ): 
			include('layout-call-to-action.php');     
		elseif( get_row_layout() == 'horizontal_rule' ): 
			// HR
		elseif( get_row_layout() == 'gallery' ): 
			include('layout-gallery.php');     
		endif;



	$i++;
    endwhile;
	include('layout-section-break-after.php');

else :

    // no layouts found

endif;

?>