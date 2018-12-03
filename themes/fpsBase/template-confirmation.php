<?php
/**
 * TEMPLATE NAME:  Confirmation template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FPSBase
 */

get_header(); ?>
	<div class="content-area full-page">
		<div class="container">
            <section>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="info">
                        <div class="confirmation-page">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </section>
		</div><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
