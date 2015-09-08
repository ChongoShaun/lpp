<?php

if( have_rows('layouts') ):
	$i = 1;
	$counters = array();
    while ( have_rows('layouts') ) : the_row();

		$layout = get_row_layout();
	
		if( !isset( $counters[ $layout ] ) ):
			// initialize counter
			$counters[ $layout ] = 1;
		else:
			// increase existing counter
			$counters[ $layout ]++;
		endif;

        ?>
        
        <?php

		if( $i == 1):
			include(locate_template('includes/layout-section-break-before.php'));
		endif;

        if( get_row_layout() == 'section_break' ):
			include(locate_template('includes/layout-section-break-before.php'));
		elseif( get_row_layout() == 'call_to_action' ): 
			include(locate_template('includes/layout-call-to-action.php'));     
	    elseif( get_row_layout() == 'full_width' ): 
			include(locate_template('includes/layout-full-width.php'));
	    elseif( get_row_layout() == 'two_columns' ): 
			include(locate_template('includes/layout-two-columns.php'));     
	    elseif( get_row_layout() == 'three_columns' ): 
			include(locate_template('includes/layout-three-columns.php'));     
		elseif( get_row_layout() == 'four_columns' ): 
			include(locate_template('includes/layout-four-columns.php'));     
		elseif( get_row_layout() == 'horizontal_rule' ): 
			include(locate_template('includes/layout-rule.php'));     			
		elseif( get_row_layout() == 'gallery' ): 
			include(locate_template('includes/layout-gallery.php'));     
		elseif( get_row_layout() == 'show_hide_two_column' ): 
			include(locate_template('includes/layout-show-hide-two-columns.php'));     
		endif;



	$i++;
    endwhile;
	include(locate_template('includes/layout-section-break-after.php'));

else :

    // no layouts found

endif;

?>