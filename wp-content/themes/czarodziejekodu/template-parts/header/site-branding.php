<div class="site-branding">
	<?php if ( is_front_page() ): ?>
		<header id="header" class="alt">
			<?php
			$image = wp_get_attachment_image_src(get_post_thumbnail_id( null ), 'full');
			if ( is_string($image[0]) ): ?>
				<style type="text/css">
					#banner {
						background-attachment: fixed;
						background-position: center center;
						background-repeat: no-repeat;
						background-size: cover;
						padding-top: 0;
						background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $image[0]; ?>);
						background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $image[0]; ?>);
						background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $image[0]; ?>);
						background-image: linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $image[0]; ?>);
					}
				</style>
			<?php endif; ?>
	<?php else: ?>
		<header id="header">
	<?php endif; ?>
			<h1>
				<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="czarodzieje kodu logo" src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/czarodziejekodu/images/logo-czapka.png"></a>
				<a id="title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<?php if ( has_nav_menu( 'menu-1' ) && false ) : ?>
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
		<section id="banner">
			<div class="inner">
				<?php echo the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				<p><?php echo get_bloginfo( 'description', 'display' ); ?></p>
			</div>
			<a href="#primary" class="more scrolly">Dowiedz się więcej</a>
		</section>
</div><!-- .site-branding -->
