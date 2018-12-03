<?php
/**
 * TEMPLATE NAME:  TML
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
wp_head(); ?>

<body <?php body_class(); ?>>
<div class="container">
    <div class="row">
        <!--/ Form Login -->
        <div class="form-login">
            <div class="logo">
                <?php
                    $GETlogo = get_field('logo_site','option');
                    $logo =  $GETlogo['ID'];
                    $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                ?>
                <a href="<?php echo esc_url(get_bloginfo('url'));?>">
                    <?php echo wp_get_attachment_image( $logo, $size ); ?>
                </a>
            </div>

            <?php
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            ?>
        </div>
        <!--/ Form Login -->
    </div>
</div>
