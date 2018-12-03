<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package FPSBase
 */
?>

</div><!-- #content -->

	<footer class="site-footer">
		<div class="container">
			<section>
                <!--Footer Menu-->
				<div class="footer-menu">
					<?php if(has_nav_menu('menu-2')){  wp_nav_menu( array( 'theme_location' => 'menu-2') ); } ?>
				</div>
                <!--/Footer Menu-->

                <div class="footer-info">
                    <!--Footer Content-->
                    <?php the_field('footer_info' , 'option'); ?>
                    <!--/Footer Content-->

                    <!--Social Icons-->
                    <div class="social-icons">
                        <?php
                         if( have_rows('social_icons' , 'option') ):
                            while ( have_rows('social_icons' , 'option') ) : the_row();
                            $social = get_sub_field('social_icon');
                        ?>
                            <a href="<?php the_sub_field('social_profile'); ?>" target="_blank" data-linktype="social" data-socialnetwork="<?php echo $social['value']; ?>">
                                <i class="fab fa-<?php echo $social['value']; ?>"></i>
                            </a>
                        <?php endwhile; endif; ?>
                    </div>
                    <!--/Social Icons-->
                </div>
			</section>

			<section>
                <!--/copyright-->
			    <div class="copyright">
			        <?php the_field('copyright' , 'option'); ?>
			    </div>
			    <!--/copyright-->
			</section>

		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<!--Mobile Menu-->
<nav id="mobile-nav">
   <?php if(has_nav_menu('menu-1')){ wp_nav_menu( array( 'theme_location' => 'menu-1')); } ?>
</nav>
<!--/Mobile Menu-->

<?php wp_footer(); ?>

</body>
</html>
