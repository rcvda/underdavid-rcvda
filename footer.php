<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
require_once('config.php');
global $api_key2;
global $api_key3;
global $api_key4;
global $api_key5;
global $api_key6;
global $api_key7;
global $api_key10;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

				<footer class="site-footer" id="colophon">
					
<!-- 	Preload Font Awsome -->
					<script defer src="/wp-content/themes/underdavid-rcvda/fonts/fontawesome-free-6.7.2-web/js/all.js">						</script>
					
					<!-- Global site tag (gtag.js) - Google Analytics -->
					<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $api_key2; ?>"></script>
					<script>
					  window.dataLayer = window.dataLayer || [];
					  function gtag(){dataLayer.push(arguments);}
						gtag('js', new Date());
						gtag('config', '<?php echo $api_key2; ?>');
						gtag('config', '<?php echo $api_key3; ?>');
						gtag('config', '<?php echo $api_key4; ?>');
					</script>
					
					<!-- Google Tag Manager -->
					<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
					j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
					'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
					})(window,document,'script','dataLayer','<?php echo $api_key5; ?>');</script>
					<!-- End Google Tag Manager -->

					<!-- Event snippet for Page view conversion page -->
					<script>
					  gtag('event', 'conversion', {'send_to': '<?php echo $api_key6; ?>'});
					</script>
					
					<!-- Attempt to clear Mailchimp Session (only works when navigating between posts/pages) -->
					<script>
// 						function cleanup() {
						var cookies = document.cookie.split("; ");
							// Loop through all cookies
							for (var i = 0; i < cookies.length; i++) {
								var cookie = cookies[i];

								// Split the cookie name and value
								var eqPos = cookie.indexOf("=");
								var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;

								// Check if cookie name matches the mcforms-*sessionId pattern
								if (/^mcforms-\d+-sessionId$/.test(name)) {
									// Remove the cookie by setting it to expire in the past
									document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
								}
									document.cookie = "_mcid=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
									document.cookie = "_abck=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
									document.cookie = "bm_sv=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
							}
// 						}
					</script>
					
					
<!-- 					Mailchimp -->
					<script async id="mcjs1">
						function showPopup() { 
							!function(c,h,i,m,p){
								m=c.createElement(h),
									p=c.getElementsByTagName(h)[0],
									m.async=1,
									m.src=i,
									p.parentNode.insertBefore(m,p)
								}(
									document,
									"script",
									"https://chimpstatic.com/mcjs-connected/js/users/<?php echo $api_key7; ?>.js"
								);
						}

						document.getElementById("show-popup").onclick = function() {showPopup(); }

						function showPopup2() { 
							!function(c,h,i,m,p){
								m=c.createElement(h),
									p=c.getElementsByTagName(h)[0],
									m.async=1,
									m.src=i,
									p.parentNode.insertBefore(m,p)
								}(
									document,
									"script",
									"https://chimpstatic.com/mcjs-connected/js/users/<?php echo $api_key10; ?>.js"
								);
						}

						document.getElementById("show-popup2").onclick = function() {showPopup2();}
					</script>
<!-- 				End Mailchimp -->
					
					<?php
					/**
					 * Adds the "logo-strip" widget area!!!
					 */
					if ( !function_exists( 'dynamic_sidebar' ) 
						|| !dynamic_sidebar('logo-strip') )
					?>
					
					<div class="site-info">
						
						<?php understrap_site_info(); ?>
						
					</div><!-- .site-info -->

				</footer><!-- #colophon -->
			


		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

