<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<script src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/czarodziejekodu/js/old/jquery.min.js"></script>
	<script src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/czarodziejekodu/js/old/jquery.scrollex.min.js"></script>
	<script src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/czarodziejekodu/js/old/jquery.scrolly.min.js"></script>
	<script src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/czarodziejekodu/js/old/skel.min.js"></script>
	<script src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/czarodziejekodu/js/old/util.js"></script>
	<!--[if lte IE 8]><script src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/czarodziejekodu/js/old/ie/respond.min.js"></script><![endif]-->
	<script src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/czarodziejekodu/js/old/main.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .layout-wrap -->

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						if ( !is_front_page() ) {
							twentynineteen_post_thumbnail();
						}
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
