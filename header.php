<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
require_once('config.php');
global $api_key9;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	
	
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '<?php echo $api_key9; ?>');
	  fbq('track', 'PageView');
	</script>
	<noscript>
	  <img height="1" width="1" style="display:none" 
		   src="https://www.facebook.com/tr?id=<?php echo $api_key9; ?>&ev=PageView&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Google Analytics Consent Defaults -->
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		
		gtag('consent', 'default', {
			'ad_storage': 'granted',
			'analytics_storage': 'granted',
			'ad_user_data': 'denied',
			'ad_personalization': 'denied'
		});
		
		gtag('consent', 'default', {
			'ad_user_data': 'granted',
			'ad_personalization': 'granted',
			'region': ['GB']
		});
	</script>
	<!-- End Google Analytics Consent Defaults -->
	<!--  Preload Logo Image -->
	<link rel="preload" as="image" href="/wp-content/uploads/2023/07/RCVDA-Logo-without-Text-White-Outline-768x157-1.webp" async>
	
	<!--  Preload Fonts -->
	<link rel="preload" href="/wp-content/themes/underdavid-rcvda/fonts/Raleway-SemiBold.ttf" as="font" type="font/ttf"
		  crossorigin="anonymous" async>
	<link rel="preload" href="/wp-content/themes/underdavid-rcvda/fonts/FiraSans-ExtraBold.ttf" as="font" type="font/ttf"
		  crossorigin="anonymous" async>
	<link rel="preload" href="/wp-content/themes/underdavid-rcvda/fonts/Raleway-Bold.ttf" as="font" type="font/ttf"
		  crossorigin="anonymous" async>
	<link rel="preload" href="/wp-content/themes/underdavid-rcvda/fonts/Market-Regular.ttf" as="font" type="font/ttf"
		  crossorigin="anonymous" async>
	
<!-- 	Preload Font Awsome -->
	<link async rel="preload" href="/wp-content/themes/underdavid-rcvda/fonts/fontawesome-free-6.7.2-web/js/all.js" as="script" />
	
<!-- 	Preload Favicon? -->
	<link rel="preload" as="image" media=”all” href="/wp-content/uploads/2023/07/cropped-RCVDA-Favicon-White-Border-32x32.webp" async>
	
	<?php if (is_front_page()) { ?>
	<!-- 		Preload Top Image -->
		<link rel="preload" as="image" href="/wp-content/uploads/2023/08/our-press-replacement.webp" async>
<!-- 	Preload Top 3 Images On Home (check what is visible on mobile) -->
<!-- 		<link rel="preload" as="image" href="/wp-content/uploads/X" async> -->
<!-- 		<link rel="preload" as="image" href="/wp-content/uploads/X" media="(min-width: 600px)" async> -->
<!-- 		<link rel="preload" as="image" href="/wp-content/uploads/X" media="(min-width: 782px)" async> -->

	<?php } ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	
	
<div class="site" id="page">
	
<!-- 	Meta Pixel PageView Tracking Attempt -->
<!-- 	<script type='text/javascript'>
		fbq('track', 'PageView', []);
	</script> -->
<!-- 	Meta Pixel PageView Tracking Attempt End -->
	
<!-- banner -->
<?php
  if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('banner') )
?>
	<!-- ******************* The Navbar Area ******************* -->
	
		
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
			<nav class="navbar navbar-collapse navbar-dark bg-primary" style="flex-flow: column;">

				<div class="container">
					<div class="col-lg-2">
				
						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>
						<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="navbar-brand lg-0">
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" 
						   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
						   itemprop="url">
						
							<?php bloginfo( 'name' ); ?>
						
						</a></h1>
						<?php else : ?>
						<a class="navbar-brand" rel="home" 
						   href="<?php echo esc_url( home_url( '/' ) ); ?>" 
						   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
						   itemprop="url">
																											
							<?php bloginfo( 'name' ); ?>
						
						</a>
						<?php endif; ?>
						<?php } 
					else {
						the_custom_logo();
					} ?>
					<!-- end custom logo -->
				</div>


				<div class="col-lg-10">
					<div id="buttonz" style="display: flex; justify-content: right;">
					<button class="menu1"
							id="tglBtn1"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#navbarNavDropdown1"
							aria-controls="navbarNavDropdown"
							aria-expanded="false"
							onclick="choice1()"
							aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
							style="border-bottom-color: #1A223E;
								   border-bottom-width: thick;
								   border-bottom-style: solid;">
							About
					</button>
					
					<button class="menu2"
							id="tglBtn2"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#navbarNavDropdown2"
							aria-controls="navbarNavDropdown"
							aria-expanded="false"
							onclick="choice1()"
							aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
							style="border-bottom-color: #154284;
								   border-bottom-width: thick;
								   border-bottom-style: solid;">
							Our Work
					</button>
					
					<button class="menu3"
							id="tglBtn3"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#navbarNavDropdown3"
							aria-controls="navbarNavDropdown"
							aria-expanded="false"
							onclick="choice1()"
							aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
							style="border-bottom-color: #DA1E19;
								   border-bottom-width: thick;
								   border-bottom-style: solid;">
							Contact
					</button>
					</div>
					
					<script type="text/javascript">
						function choice1(page)
						{
							if(document.getElementById('navbarNavDropdown1')
							   .classList.contains("show")) {
								document.getElementById('tglBtn1').click();
							}
							if(document.getElementById('navbarNavDropdown2')
							   .classList.contains("show")) {
								document.getElementById('tglBtn2').click();
							}
							if(document.getElementById('navbarNavDropdown3')
							   .classList.contains("show")) {
								document.getElementById('tglBtn3').click();
							}
						}
					</script>
				</div>
			</div>
				
				<div id="menuContainer1" class="container" style="background-color:#1A223E; background-clip: content-box;">
					<ul id="buttonbox" style="padding-left:0px; margin-bottom: 0px;">
						
						<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'navbarNavDropdown1',
									'menu_class'      => 'navbar-nav ms-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 3,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
						
					</ul>
				</div>
				<div id="menuContainer2" class="container" style="background-color:#154284; background-clip: content-box;">
					<ul id="buttonbox" style="padding-left:0px; margin-bottom: 0px;">
						
						<?php wp_nav_menu(
								array(
									'theme_location'  => 'secondary',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'navbarNavDropdown2',
									'menu_class'      => 'navbar-nav ms-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 3,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
						
					</ul>
				</div>
				<div id="menuContainer3" class="container" style="background-color:#DA1E19; background-clip: content-box;">
					<ul id="buttonbox" style="padding-left:0px; margin-bottom: 0px;">
						
						<?php wp_nav_menu(
								array(
									'theme_location'  => 'tertiary',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'navbarNavDropdown3',
									'menu_class'      => 'navbar-nav ms-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 3,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
						
					</ul>
				</div>
					
		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->
