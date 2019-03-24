<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="site-branding">
	<?php if ( is_front_page() ): ?>
		<header id="header">
	<?php else: ?>
		<header id="header" class="alt">
	<?php endif; ?>
			<h1>
				<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="czarodzieje kodu logo" src="/wp-content/themes/czarodziejekodu/images/d4k-splash_btn.png"></a>
				<a id="title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
				<nav id="nav" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
					<ul>
						<li class="special">
							<a href="#menu" class="menuToggle"><span>Menu</span></a>
							<div id="menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_class'     => 'main-menu',
										'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									)
								);
								?>
							</div>
						</li>
					</ul>
				</nav><!-- .site-navigation -->
			<?php endif; ?>
		</header>
</div><!-- .site-branding -->
