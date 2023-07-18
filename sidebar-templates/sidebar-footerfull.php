<?php
/**
 * Sidebar setup for footer full
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full" role="complementary">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row">

				<?php dynamic_sidebar( 'footerfull' ); ?>
				
				

			</div>
			<div class="footer-extra">
			<?php
							/**
							 * adds the "site-info2" widget area!!!
							 */
							 if ( !function_exists( 'dynamic_sidebar' ) 
								 || !dynamic_sidebar('site-info2') )
						?>
			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

	<?php
endif;
