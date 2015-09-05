<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<!-- Home
	================================================== -->
	<?php
		// Load hero section
		get_template_part('includes/layout', 'hero');
	?>
	
	<?php 
		// Load Dynamic Content
		get_template_part('includes/dynamic-layout');
	?>
	
	<section class="dynamic-section news-calendar">
		<div class="big-container" style="background-image:url(<?php bloginfo('template_directory');?>/assets/images/bg_calendar_home.png); background-position:center top; background-size:cover; background-repeat:repeat-x">
			<div class="container">
				<div class="three columns news">
					<h2>News</h2>
					<?php
					
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 3
					);
	
					$query = new WP_Query( $args );
					
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post();
							
							?>
							<div class="row">
								<h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>							
								<p><?php echo wp_trim_words( wpautop(get_the_content()), 20, '... <a href="'. get_the_permalink() .'">Read More</a>' );?></p>
							</div>
							<?php
							
						endwhile;
					else :
						// no posts found
					endif;
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
					<a href="#">See Full News Archive</a>

				</div>
				<div class="seven columns offset-by-one calendar">
					<h2>School Calendar</h2>
					
					<?php 
					$args = array(
					  'post_status'=>'publish',
					  'post_type'=>array(TribeEvents::POSTTYPE),
					  'posts_per_page'=>5,
					  //order by startdate from newest to oldest
					  'meta_key'=>'_EventStartDate',
					  'orderby'=>'_EventStartDate',
					  'order'=>'ASC',
					  //required in 3.x
					  'eventDisplay'=>'custom'
					  //query events by category
					);
					$get_posts = null;
					$get_posts = new WP_Query();
					$get_posts->query($args);
					if($get_posts->have_posts()) : while($get_posts->have_posts()) : $get_posts->the_post(); ?>
					
					<div class="row">
						<div class="two columns alpha">

						    <a href="<?php the_permalink(); ?>" class="calendar-date">
							    <?php echo tribe_get_start_date($pageID, false, 'F'); ?>
								<span><?php echo tribe_get_start_date($pageID, false, 'j'); ?></span>
						    </a>
						    

						
						</div>
						<div class="five columns omega calendar-content">

						  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						  <?php the_content(); ?>
						</div>
					</div>
					
					
					<?php
					  endwhile;
					?>
					<?php
					  endif;
					  ?>
					  <a href="<?php echo get_the_permalink(111);?>" class="full-calendar">See Full Calendar</a>
					  <?php
					  wp_reset_query();
					?>

				</div>
			</div>
		</div>
	</section>
			
	<!-- End Home Template -->

<?php get_footer(); ?>

