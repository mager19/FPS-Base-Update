<?php
/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package FPSBase
 */

get_header(); ?>

	<div class="content-area">
		<div class="container">
            <section>
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="info">
                        <?php the_title('<h1 class="entrey-title text-center">' , '</h1>'); ?>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>

                        <div class="entry-author">
                            <div class="img-author">
                                <?php
                                    $author_id = get_the_author_meta('ID');
                                    if(get_field('author_image' , 'user_'. $author_id)){
                                        $url = get_field('author_image' , 'user_'. $author_id);
                                    }else{
                                        $url = get_template_directory_uri().'/img/avatar.png';
                                    }
                                ?>
                                <a href="<?php echo get_author_posts_url( $author_id); ?>">
                                    <img src="<?php echo $url; ?>" alt="author">
                                </a>
                            </div>

                            <div class="info-author">
                                <h2>
                                    <span>ABOUT AUTHOR</span>
                                    <?php the_author_meta('first_name'); ?>
                                    <?php the_author_meta('last_name'); ?>
                                </h2>
                                <p><?php  the_author_meta('description'); ?></p>
                                <a href="<?php echo get_author_posts_url( $author_id); ?>">
                                    Read more
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div><!-- .entry-content -->

                    </div>

                <?php endwhile; ?>
            </section>

		</div><!-- #main -->
	</div><!-- #primary -->

	<div class="last-post">
	    <div class="container">
	        <section>
                 <div class="full-content">
                     <h2>You might also like</h2>
                 </div>

	            <?php
                    $loop = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => 3 , 'post__not_in' => array( $post->ID ) ) );
                        while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="item-recent">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('featured-post'); ?>>
                        <div class="info-post">
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <?php the_excerpt(); ?>

                            <a href="<?php the_permalink(); ?>" class="link">
                                Continue Reading
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
                <?php endwhile; ?>
	        </section>
	    </div>
	</div>

<?php
get_footer();
