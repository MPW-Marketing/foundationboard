<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Community_Foundation_Board
 */

?>
</div> <!-- #content-inner -->
	</div> <!--#content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-widgets">
            <div class="content-width">
                <?php get_template_part( 'components/footer/site', 'widgets' ); ?>
            </div>
        </div>
        <div class="footer-copyrights">
            <div class="content-width">
		    <?php get_template_part( 'components/footer/site', 'info' ); ?>
            </div>
        </div>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
