		<div class="site-branding pure-g content-width">
            <div class="pure-u-1-2">
            		<?php foundationboard_the_custom_logo(); ?>
            </div>
             <div class="pure-u-1-2">
                 <?php if ( is_active_sidebar( 'header_right_widget' ) ) : ?>
                    <div id="header-right-widgets">
                        <?php dynamic_sidebar( 'header_right_widget' ); ?>
                    </div>
                <?php endif; ?>
            </div><!--right side--> 
		</div><!-- .site-branding -->