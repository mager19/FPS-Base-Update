<?php
/**
 * The template for displaying 404 pages (not found).
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package FPSBase
 */
get_header(); ?>

<div class="container">
    <section class="error-404">
       <div class="info">
            <h2>404</h2>
            <p>This isn't good. Seems like..</p>
            <h1 class="page-title"><?php esc_html_e( 'You got lost'); ?></h1>
            <a class="btn primary" href="<?php echo esc_url(home_url()); ?>">Back to Home</a>
        </div><!-- .error-404 -->
    </section>
</div>

<?php get_footer();
