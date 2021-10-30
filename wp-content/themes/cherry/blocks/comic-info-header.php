<!-- Next Show -->
<section class="next-show event-page comic-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 poster-box">
                <?php $picture = get_field( 'picture' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $picture ) : ?>
                    <?php echo wp_get_attachment_image( $picture, $size, "", ["class" => "show-poster"] ); ?>
                <?php else : ?>
                    <img src="/wp-content/uploads/2021/09/no-profile.jpg">
                <?php endif; ?>

                <div class="social-profile row justify-content-center no-gutters">
                    <?php if( get_field('facebook') ): ?>
                        <div class="col text-center">
                            <a href="https://facebook.com/<?php the_field('facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('instagram') ): ?>
                        <div class="col text-center">
                            <a href="https://instagram.com/<?php the_field('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('twitter') ): ?>
                        <div class="col text-center">
                            <a href="https://twitter.com/<?php the_field('twitter'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('youtube') ): ?>
                        <div class="col text-center">
                            <a href="<?php the_field('youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('tiktok') ): ?>
                        <div class="col text-center">
                            <a href="https://tiktok.com/@<?php the_field('tiktok'); ?>" target="_blank"><i class="fab fa-tiktok"></i></a>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('website') ): ?>
                        <div class="col text-center">
                            <a href="<?php the_field('website'); ?>" target="_blank"><i class="fas fa-desktop"></i></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-7">
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('bio');?></p>
                <?php if ( have_rows( 'comic_quotes' ) ) : ?>
                    <div class="col-lg-auto col-12 comic-quotes">
                        <span class="quotes"></span>
                        <?php while ( have_rows( 'comic_quotes' ) ) : the_row(); ?>
                            <p>"<?php the_sub_field( 'quote' ); ?>" <strong><?php the_sub_field( 'author' ); ?></strong></p>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
