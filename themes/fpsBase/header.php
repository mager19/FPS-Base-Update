<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package FPSBase
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<!--Google Tag Manager-->
	<?php the_field('google_tag_header','option'); ?>
	<!--/Google Tag Manager-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <!--Favicon-->
	<link rel="icon" href="<?php the_field('favicon', 'option');?>">
  <!--/Favicon-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--Google Tag Manager-->
<?php the_field('google_tag','option'); ?>
<!--/Google Tag Manager-->

<div id="page" class="site">

    <!--Header-->
    <header id="masthead" class="site-header">
		<div class="container">
			<section>
        <div class="sitelogo">
	          <div class="sitelogo">
	              <?php $GETlogo = get_field('logo_site','option'); ?>
	              <a href="<?php echo esc_url(get_bloginfo('url'));?>"><img src="<?php echo $GETlogo['url']; ?>" height="<?php echo $GETlogo['height'] / 2;?>" width="<?php echo $GETlogo['width'] / 2;?>"/></a>
	          </div>
        </div>

				<div class="mobile-nav">
				    <div id="mobile">
                <a class="mobile-nav-trigger" href="#mobile-nav"><i class="fa fa-bars"></i></a>
            </div>
				</div>
			</section>
		</div>
	</header>
    <!--/Header-->

    <!--Menu-->
	<nav class="site-nav">
	    <div class="container">
	        <section>
	            <div class="main-nav">
                    <?php
                        if(has_nav_menu('menu-1')){
                            wp_nav_menu( array( 'theme_location' => 'menu-1') );
                        }
                    ?>
                </div>
	        </section>
	    </div>
	</nav>
    <!--/Menu-->

    <!--Breadcrumbs-->
    <?php get_template_part( 'inc/content', 'breadcrumbs' ); ?>
    <!--/Breadcrumbs-->


	<div id="content" class="site-content">
