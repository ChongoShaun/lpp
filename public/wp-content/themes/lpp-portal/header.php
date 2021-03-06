<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<!-- Mobile
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<!--
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	-->
	
	<!-- Core Header
	================================================== -->
	<?php wp_head(); ?>
	
	<script type="text/javascript">
		jQuery( document ).ready(function() {
			jQuery("[id^=collapse]").click(function(){
			     jQuery(this).text(function(i, text){
			          return text === "MORE" ? "CLOSE" : "MORE";
			      })

			    jQuery(this).parent().parent().parent().find('.hidden').slideToggle("slow", function() {
					// Animation complete.
					
				});
			});		


		});
	</script>

</head>
<body <?php body_class(); ?>>

	<!-- Header / Nav / Global Etc
	================================================== -->
	<section id="navigation">
		<div class="big-container full-width nav">
			<div class="container">
				<div class="four columns">
					<div class="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo_lpp.gif" class="scale-with-grid" /></a>
					</div>
				</div>
				<div class="eight columns">
					<div class="row">
						<nav>
							<?php wp_nav_menu( array( 'theme_location' => 'main-menu-portal' ) ); ?>
						</nav>
					</div>
				</div>
			</div>			
		</div>
	</section>

	<!-- End Header -->
