	<section id="secondary-navigation">
		<div class="big-container full-width">
			<div class="container">
				<ul class="clearfix">
					<?php 	
					if (is_page('news') || tribe_is_event() || (tribe_is_month() && !is_tax()) || ( tribe_is_past() || tribe_is_upcoming() && !is_tax() ) || ( tribe_is_day() && !is_tax() ) || tribe_is_event_category() || tribe_is_in_main_loop() || tribe_is_view() || 'tribe_events' == get_post_type() || is_singular( 'tribe_events' )): 
					?>
						<li class="page_item page-item-37">
							<a></a>
						</li>					
					<?php  
					else: 
					?>
						
					    <?php wp_list_pages( array('title_li'=>'','include'=>get_post_top_ancestor_id()) ); ?>
					    <?php wp_list_pages( array('title_li'=>'','depth'=>1,'child_of'=>get_post_top_ancestor_id()) ); ?>
						
					<?php 
					endif;  
					?>
				</ul>
			</div>
		</div>
	</section>
