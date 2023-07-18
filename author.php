<?php
/**
 * The template for displaying the author pages
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="author-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<header class="page-header author-header">

					<?php
					$curauth = (get_query_var('author_name')) ? get_user_by('slug', 
					get_query_var('author_name')) :
					get_userdata(get_query_var('author'));
					
					
					?>
					
					<h1 class="entry-title"><?php echo get_the_author(); ?></h1>

					<div class="wp-block-columns" style="place-content: center;"> 
						<?php echo get_avatar( get_the_author_meta('ID'), '100' ); ?>

					
					<dl style="width: 100%;">
						<dt><?php esc_html_e( 'Website', 'understrap' ); ?></dt>
						<dd>
							<p>
								
							<a href="<?php echo esc_url( $curauth->user_url ); ?>">
								<?php echo esc_html( $curauth->user_url ); ?></a>
							</p>
						</dd>
						<dt><?php esc_html_e( 'Profile', 'understrap' ); ?></dt>
						<dd><?php echo the_author_meta('description'); ?></dd>
					</dl>
					</div>


					<h2 class="entry-title"><?php echo esc_html( 'Posts & Pages', 'understrap' ); ?>:</h2>

				</header><!-- .page-header -->

				
				<?php
					$args = array(
						'posts_per_page' => 10,
						'paged' => get_query_var( 'paged' ),
						'post_type' => array('post', 'page'),
						'author_name' => get_the_author_meta('user_nicename'),
						'orderby' => 'post_date',
					);
					
					$loop = new WP_Query( $args );
				?>
				
				

				
				
				<?php
				while ( $loop->have_posts() ) : $loop->the_post(); 
				?>	
				
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<!-- 	ENTRY HEADER -->
					<header class="entry-header">
						<?php
						the_title(
							sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', 
									esc_url( get_permalink() ) ),
							'</a></h2>'
						);
						?>
					</header>
					<!-- .entry-header -->
					
					<div class="entry-content">
						<div class="d-flex flex-row"> 
							
							<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
							<div class="excerpt flex-grow-1">
								<?php the_excerpt(); ?>
							</div>
							<?php
							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
									'after'  => '</div>',
								)
							);
							?>
						</div>
					</div>
					
					<footer class="entry-footer">
						<?php
						if ( 'post' === get_post_type() ) {
							$categories_list = get_the_category_list( esc_html__( ', ', 'understrap' ) );
							if ( $categories_list && understrap_categorized_blog() ) {
								printf( '<span class="cat-links">' . 
									   esc_html__( 'Posted in %s', 'understrap' ) . 
									   '</span>', $categories_list );
							}
						}
						$tags_list = get_the_tag_list( '', esc_html__( ', ', 'understrap' ) );
						if ( $tags_list ) {
							printf( '<span class="tags-links">' . 
								   esc_html__( 'Tagged %s', 'understrap' ) . 
								   '</span>', $tags_list );
						}
						?>
					</footer>
					<p>Posted on <?php echo get_the_date(); ?></p>
				</article>
				
				<?php endwhile; wp_reset_query();?>
				
				

				
				
			</main><!-- #main -->
			

			<!-- The pagination component -->
<!-- 			altered to count pages and posts -->
			<?php understrap_pagination([
						'total' => $loop->max_num_pages,
					]); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- .row -->

	</div><!-- #content -->

</div><!-- #author-wrapper -->

<?php get_footer(); ?>

