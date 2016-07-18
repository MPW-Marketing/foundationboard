<div class="site-info">
    <div class="pure-g">
	<?php if ( is_active_sidebar( 'footer_copyright_left' ) ) : ?>
<div id="footer_copyright_left_widgets" class="pure-u-1-2">
<?php dynamic_sidebar( 'footer_copyright_left' ); ?>
</div>
<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer_copyright_right' ) ) : ?>
<div id="footer_copyright_right_widgets" class="pure-u-1-2">
<?php dynamic_sidebar( 'footer_copyright_right' ); ?>
</div>
<?php endif; ?>
        </div><!--.pure-g-->

</div><!-- .site-info -->