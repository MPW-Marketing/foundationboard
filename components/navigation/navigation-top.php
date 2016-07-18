<nav id="site-navigation" class="main-navigation pure-u-7-24" role="navigation">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'foundationboard' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_id' => 'top-menu' ) ); ?>
</nav>
