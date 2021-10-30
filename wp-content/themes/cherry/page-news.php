<?php
/* Template Name: News */
get_header(); ?>

<!-- Latest News -->
<section class="latest-news">
    <div class="container">
        <div id="news-posts">
            <div class="row">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'numberposts' => '-1',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                );
                $postslist = get_posts($args);
                foreach ($postslist as $post) :
                setup_postdata($post);
                ?>

                <div class="latest-news-single col-lg-4 col-12">
                    <a href="<?php the_permalink(); ?>" class="single-news-post">
                        <?php $featured_image = get_field( 'featured_image' ); ?>
                        <?php $size = 'blog-listing-new'; ?>
                        <?php if ( $featured_image ) : ?>
                            <div class="latest-news-img">
                                <?php echo wp_get_attachment_image( $featured_image, $size ); ?>
                            </div>
                        <?php else : ?>
                            <div class="latest-news-img">
                                <img src="/wp-content/themes/cherry/assets/images/blog-listing-placeholder.jpg">
                            </div>
                        <?php endif; ?>
                        <div class="latest-news-meta">
                            <h5><?php the_title(); ?></h5>
                            <div class="latest-news-time">
                                <i class="far fa-clock"></i> <?php echo meks_time_ago(); ?>

                            </div>
                        </div>
                    </a>
                </div>

                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>