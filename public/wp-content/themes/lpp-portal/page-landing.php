<?php
/*
Template Name: Landing Page
*/
?>

<?php get_header(); ?>

	<!-- Landing Page
	================================================== -->
	
	<?php
		// Load hero section
		get_template_part('includes/layout', 'hero');
	?>

	<section class="dynamic-section first-section-portal">
		<div class="big-container">

			<div class="container">
				
				<?php 
			    global $post;
			    $post_type = $post->post_name;
				

					?>
					<div class="six columns main-content">
						<?php
						if($post_type == 'announcements'):
							$title = "Webster Announcements";
							$secondary_title = "Webster Calendar";				
							$args = array(
								'post_type' => 'announcement'
							);
						elseif ($post_type == 'downloads'):
							$title = "Downloads";
							$secondary_title = "Webster Calendar";
							$args = array(
								'post_type' => 'downloads'
							);
						elseif ($post_type == 'newsletters'):
							$title = "Newsletter";
							$secondary_title = "Webster Calendar";
							$args = array(
								'post_type' => 'newsletters'
							);
						endif;

						$mainquery = new WP_Query( $args );
						?>
						<h1 class="page-title"><?php echo $title;?></h1>
						<?php
						
						if ( $mainquery->have_posts() ) :
							while ( $mainquery->have_posts() ) : $mainquery->the_post();
								?>
								<div class="post">
									<h2><?php echo get_the_title();?></h2>
									<div class="content">
										<?php the_content();?>
									</div>
								</div>
								<?php
							endwhile;
						else:
							// no posts found
						endif;

						wp_reset_postdata();
							
						?>
						
					</div>
					<div class="three columns secondary-content">
						<h2><?php echo $secondary_title;?></h2>
						<?php 
						$args = array(
						  'post_status'=>'publish',
						  'post_type'=>array(TribeEvents::POSTTYPE),
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
							<div class="row calendar-list">
								<a href="<?php the_permalink(); ?>" class="calendar-date-portal">
									<h5><?php the_title(); ?></h5>
									<strong><?php echo tribe_get_start_date($pageID, false, 'l, F j, Y'); ?></strong><br />
									<?php echo tribe_get_start_date($pageID, false, 'g:ia'); ?> - <?php echo tribe_get_end_date($pageID, false, 'g:ia'); ?>
								</a>
								<?php the_content();?>
							</div>
						<?php
						endwhile; endif;
						?>
						<a href="<?php echo get_the_permalink(7);?>" class="full-calendar-portal">See Full Calendar</a>
						<?php
						wp_reset_query();
						?>
					</div>
					<div class="three columns tertiary">
						<div class="three columns tertiary-content alpha">
						<?php
							
							if($post_type == 'announcements'):
								$tertargs = array(
									'post_type' => 'downloads',
									'posts_per_page' => 1
								);
								$tertiaryquery = new WP_Query( $tertargs );
								?>
								<?php
								
								if ( $tertiaryquery->have_posts() ) :
									while ( $tertiaryquery->have_posts() ) : $tertiaryquery->the_post();
										?>
										<div class="sidebar-post">
											<h2><?php echo get_the_title();?></h2>
											<div class="sidebar-content">
												<?php the_content();?>
											</div>
										</div>
										<?php
									endwhile;
								else:
									// no posts found
								endif;
		
								wp_reset_postdata();
		

								$tertargs2 = array(
									'post_type' => 'newsletters',
								);
								$tertiaryquery2 = new WP_Query( $tertargs2 );
								$newsletter_date = get_the_date('F', $tertiaryquery2->post);
								?>
								<div class="sidebar-post">
									<?php

									echo "<h2>" . $newsletter_date . " Newsletter</h2>";
									
									if ( $tertiaryquery2->have_posts() ) :
										while ( $tertiaryquery2->have_posts() ) : $tertiaryquery2->the_post();
											?>
											<div class="sidebar-content-secondary">
												<a href="<?php the_permalink();?>"><?php echo get_the_title();?></a>
											</div>
											<?php
										endwhile;
									else:
								?>
								</div>
								<?php
									// no posts found
								endif;
		
								wp_reset_postdata();
	
							
							elseif($post_type == 'downloads'):
							
								$tertargs = array(
									'post_type' => 'announcement',
									'posts_per_page' => 6
								);
								$tertiaryquery = new WP_Query( $tertargs );
								?>
								<?php
								
								if ( $tertiaryquery->have_posts() ) :
									$i=0;
									while ( $tertiaryquery->have_posts() ) : $tertiaryquery->the_post();
										?>
										<div class="sidebar-post">
											<?php 
												if ($i == 0) :
													?>
													<h2>Webster Announcements</h2>
													<?php	
												endif;
											?>
											<div class="sidebar-content">
												<a href="<?php the_permalink();?>"><?php echo get_the_title();?></a>
											</div>
										</div>
										<?php
									endwhile;
								else:
									// no posts found
								endif;
		
								wp_reset_postdata();
		

								$tertargs2 = array(
									'post_type' => 'newsletters',
								);
								$tertiaryquery2 = new WP_Query( $tertargs2 );
								$newsletter_date = get_the_date('F', $tertiaryquery2->post);
								?>
								<div class="sidebar-post">
									<?php

									echo "<h2>" . $newsletter_date . " Newsletter</h2>";
									
									if ( $tertiaryquery2->have_posts() ) :
									
										while ( $tertiaryquery2->have_posts() ) : $tertiaryquery2->the_post();
											?>
											<div class="sidebar-content-secondary">
												<a href="<?php the_permalink();?>"><?php echo get_the_title();?></a>
											</div>
											<?php
										endwhile;
									else:
								?>
								</div>
								<?php
									// no posts found
								endif;
		
								wp_reset_postdata();

							elseif($post_type == 'newsletters'):
							
								// Get Downloads
								$tertargs = array(
									'post_type' => 'downloads',
									'posts_per_page' => 1
								);
								$tertiaryquery = new WP_Query( $tertargs );
								?>
								<?php
								
								if ( $tertiaryquery->have_posts() ) :
									while ( $tertiaryquery->have_posts() ) : $tertiaryquery->the_post();
										?>
										<div class="sidebar-post">
											<h2><?php echo get_the_title();?></h2>
											<div class="sidebar-content">
												<?php the_content();?>
											</div>
										</div>
										<?php
									endwhile;
								else:
									// no posts found
								endif;
		
								wp_reset_postdata();
								
								// Get Announcements
								$tertargs = array(
									'post_type' => 'announcement',
									'posts_per_page' => 6
								);
								$tertiaryquery = new WP_Query( $tertargs );
								?>
								<?php
								
								if ( $tertiaryquery->have_posts() ) :
									$i=0;
									while ( $tertiaryquery->have_posts() ) : $tertiaryquery->the_post();
										?>
										<div class="sidebar-post">
											<?php 
												if ($i == 0) :
													?>
													<h2>Webster Announcements</h2>
													<?php	
												endif;
											?>
											<div class="sidebar-content">
												<a href="<?php the_permalink();?>"><?php echo get_the_title();?></a>
											</div>
										</div>
										<?php
									endwhile;
								else:
									// no posts found
								endif;
		
								wp_reset_postdata();
							
							endif;
						?>
						</div>
						<div class="three columns dynamic-sidebar alpha">
							<?php get_sidebar();?>
							<p>
								Please check your SPAM folder for a confirmation email from <a href="mailto:webster@lppschools.com">webster@lppschools.com</a> - You must click the included link to begin receiving announcements via email.
							</p>													
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>	
						
	<!-- End Landing Template -->

<?php get_footer(); ?>

