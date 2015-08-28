<?php

if( have_rows('layouts') ):
	$i = 1;
    while ( have_rows('layouts') ) : the_row();
		if( $i == 1):
			get_template_part('includes/layout','section-break-before');

		endif;

        if( get_row_layout() == 'section_break' ):
			get_template_part('includes/layout','section-break-before');
		elseif( get_row_layout() == 'call_to_action' ): 
			get_template_part('includes/layout','call-to-action');     
	    elseif( get_row_layout() == 'full_width' ): 
			get_template_part('includes/layout','full-width');
	    elseif( get_row_layout() == 'two_columns' ): 
			get_template_part('includes/layout','two-columns');     
	    elseif( get_row_layout() == 'three_columns' ): 
			get_template_part('includes/layout','three-columns');     
		elseif( get_row_layout() == 'four_columns' ): 
			get_template_part('includes/layout','four-columns');     
		elseif( get_row_layout() == 'horizontal_rule' ): 
			// HR
		elseif( get_row_layout() == 'gallery' ): 
			get_template_part('includes/layout','gallery');     
		endif;



	$i++;
    endwhile;
	get_template_part('includes/layout','section-break-after.php');

else :

    // no layouts found

endif;

?>