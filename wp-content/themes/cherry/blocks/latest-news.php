<!-- Latest News -->
<section class="latest-news">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h4><span>Latest</span> News</h4>
            </div>

            <?php
                $args = array(
                    'post_type' => 'post',
                    'numberposts' => '3',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'post__not_in' => array(get_the_ID()),
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
                                <img src="/wp-content/uploads/2021/10/blog-listing-placeholder.jpeg">
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

            <!--div class="col-lg-12 text-center view-news-btn">
                <a href="/news">
                    <button type="button" class="btn btn-1 btn-3d">View All News</button>
                </a>
            </div-->
        </div>
    </div>
</section>