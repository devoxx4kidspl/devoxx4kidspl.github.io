<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( is_front_page() ): ?>
	<div id="cities" class="wrapper alt style3">
		<?php
		global $post;
		$args = array( 'category_name' => 'Miasta', 'order'=> 'ASC', 'orderby' => 'title' );
		$postslist = get_posts( $args );
		foreach ( $postslist as $post ) :
			setup_postdata( $post );
			$image = wp_get_attachment_image_src(get_post_thumbnail_id( null ), 'full');
		?>
			<section class="spotlight">
				<div class="image"><img src="<?php echo $image[0]; ?>" alt="Poznań - logo" /></div>
				<div class="content">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
			</section>
			<?php
		endforeach;
		wp_reset_postdata();
		?>
	</div>
	<?php endif; ?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
