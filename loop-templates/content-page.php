<?php
/**
 * Partial template for content in page.php
 * 
 * 
 *                                NOTE TO SELF: THIS IS THE PAGE (David Stockdale)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<!-- 	Feature Page Styling -->
	<?php
	if(is_page_template( 'page-templates/featurepage.php' )) {
		?>
		<div id="container" style="position: relative; width: 100%;">
			<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
			
			<div id="innerdiv1" style="z-index: 2; position: absolute; text-align: left; color: white;">
				<img src="/wp-content/uploads/2023/07/RCVDA-Logo-without-Text-White-Outline-768x157-1.webp" 
					 alt="" style="" class="feature-logo"/>
				
			</div>
			
			
			<div id="innerdiv2" style="z-index: 3; position: absolute; text-align: left; color: white;">
				<header class="entry-header">
					<div class="box1">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>

				</header>
			</div>
		</div>
<!-- 	End Feature Page Styling -->
	
		<?php
	} else {
		 echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
	<?php
	}
?>
	
	

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
<!-- 		<?php understrap_entry_footer(); ?> -->

		
		<?php
			// Hide category for pages.
			if ( 'post' === get_post_type() ) {
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( esc_html__( ', ', 'understrap' ) );
				if ( $categories_list && understrap_categorized_blog() ) {
					/* translators: %s: Categories of current post */
					printf( '<span class="cat-links">' . esc_html__( 'Posted in %s', 'understrap' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				}
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'understrap' ) );
			if ( $tags_list ) {
				/* translators: %s: Tags of current post */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %s', 'understrap' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		
			/**
			 * adds the "authors" widget area!!!
			 */
	 		 if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('authors') )

			  /**
			   * Shows comments if comments are open 
			   * or
			   * lists comments if they exist
			   * 
			   */
				if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
					echo '<span class="comments-link">';
					comments_popup_link( esc_html__( 'Leave a comment', 'understrap' ), esc_html__( '1 Comment', 'understrap' ), esc_html__( '% Comments', 'understrap' ) );
					echo '</span>';
				}
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'understrap' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
		
		?>
		

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
