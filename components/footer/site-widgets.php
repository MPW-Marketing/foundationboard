<div class="pure-g">
    <div class="pure-u-1-24 spacer"></div>
    <div class="pure-u-5-24">
        <?php if ( is_active_sidebar( 'footer_widget_1' ) ) : ?>
        <div id="footer-1-widgets">
            <?php dynamic_sidebar( 'footer_widget_1' ); ?>
        </div>
        <?php endif; ?>
    </div><!--footer1-->
    
    <div class="pure-u-4-24">
        
        <?php if ( is_active_sidebar( 'footer_widget_2' ) ) : ?>
        <div id="footer-2-widgets">
            <?php dynamic_sidebar( 'footer_widget_2' ); ?>
        </div>
        <?php endif; ?>
    </div><!--footer2-->
    
    <div class="pure-u-4-24">
        
        <?php if ( is_active_sidebar( 'footer_widget_3' ) ) : ?>
        <div id="footer-3-widgets">
            <?php dynamic_sidebar( 'footer_widget_3' ); ?>
        </div>
        <?php endif; ?>
    </div><!--footer3-->
    
    <div class="pure-u-3-24">
        
        <?php if ( is_active_sidebar( 'footer_widget_4' ) ) : ?>
        <div id="footer-4-widgets">
            <?php dynamic_sidebar( 'footer_widget_4' ); ?>
        </div>
        <?php endif; ?>
    </div><!--footer4-->
    
    <div class="pure-u-6-24">
        
        <?php if ( is_active_sidebar( 'footer_right_widget' ) ) : ?>
        <div id="footer-right-widgets">
            <?php dynamic_sidebar( 'footer_right_widget' ); ?>
        </div>
        <?php endif; ?>
    </div><!--right side-->  
    <div class="pure-u-1-24 spacer"></div>   
</div><!--.pure-g-->