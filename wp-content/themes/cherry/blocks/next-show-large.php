<!-- Next Show -->
<section class="next-show">
    <div class="container">
        <div class="row">
                
            <?php $today = date('Ymd', strtotime('+120 minutes')); $upcomings = get_posts( array( 'post_type' => 'event', 'posts_per_page' => '1', 'meta_key' => 'date', 'orderby' => 'meta_value', 'order' => 'ASC', 'meta_query' => array( array( 'key' => 'date', 'compare' => '>=', 'value' => $today, ) ) ) ); ?>
            <?php if( $upcomings ): ?>       
                <?php foreach( $upcomings as $upcoming ): ?>
                    <div class="col-lg-4 poster-box">
                        <?php $poster = get_field( 'poster', $upcoming->ID ); ?>
                        <?php $size = 'event-poster'; ?>
                        <?php if ( $poster ) : ?>
                            <a href="<?php the_permalink($upcoming->ID); ?>">
                                <?php echo wp_get_attachment_image( $poster, $size, "", ["class" => "show-poster"]); ?>
                            </a>
                        <?php else : ?>
                            <a href="<?php the_permalink($upcoming->ID); ?>">
                                <img src="/wp-content/uploads/2021/10/Poster.jpg" class="show-poster">
                            </a>
                        <?php endif; ?>

                        <div class="row no-gutters">
                            <a href="<?php the_permalink($upcoming->ID); ?>" class="view-event col-12 text-center">
                                View Event
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <?php $date = get_field('date', $upcoming->ID);
                            $datel = date("l", strtotime($date));
                            $dateW = date("D", strtotime($date));
                            $dateD = date("j", strtotime($date));
                            $dateM = date("M", strtotime($date));
                            $dateY = date("Y", strtotime($date));
                            $dateFjSY = date("l F jS, Y", strtotime($date)); 
                            $dateDMjSY = date("D M jS, Y", strtotime($date)); 
                            $link = get_the_permalink($upcoming->ID);
                        ?>

                        <h2 class="tag">Coming Up <?php
                                $now = time(); // or your date as well
                                $show_date = strtotime($date);
                                $datediff = $show_date - $now;
                                $difference_as_days = round($datediff / (60 * 60 * 24));
                            ?>
                            <?php if ($difference_as_days == '-1') : ?>
                                Tonight!
                            <?php elseif ($difference_as_days == '0') : ?>
                                Tomorrow!
                            <?php elseif ($difference_as_days > '0' && $difference_as_days < '30') : ?>
                                in <?php echo $difference_as_days + '1'; ?> days!
                            <?php elseif ($difference_as_days > '29' && $difference_as_days < '60') : ?>
                                in 1 month!
                            <?php elseif ($difference_as_days > '60' && $difference_as_days < '365') : ?>
                                in <?php $months_duration = $difference_as_days / '30'; echo floor($months_duration); ?> months
                            <?php elseif ($difference_as_days > '365') : ?>
                                in over a year
                            <?php elseif ($difference_as_days == '-2') : ?>
                                it was yesterday
                            <?php elseif ($difference_as_days < '0' && $difference_as_days > '-30') : ?>
                                <?php echo abs($difference_as_days + '1'); ?> days ago
                            <?php elseif ($difference_as_days < '-29' && $difference_as_days > '-60') : ?>
                                1 month ago
                            <?php elseif ($difference_as_days < '-59' && $difference_as_days > '-366') : ?>
                                <?php $months_duration = $difference_as_days / '30'; echo abs(floor($months_duration + '1')); ?> months ago
                            <?php elseif ($difference_as_days < '-365' && $difference_as_days > '-732') : ?>
                                over a year ago
                            <?php elseif ($difference_as_days < '-731' && $difference_as_days > '-1097') : ?>
                                two years ago
                            <?php elseif ($difference_as_days < '-1096' && $difference_as_days > '-1463') : ?>
                                three years ago
                            <?php elseif ($difference_as_days < '-1462' && $difference_as_days > '-1826') : ?>
                                four years ago
                            <?php elseif ($difference_as_days < '-1825' && $difference_as_days > '-2192') : ?>
                                five years ago
                            <?php elseif ($difference_as_days < '-2191' && $difference_as_days > '-2557') : ?>
                                six years ago
                            <?php elseif ($difference_as_days < '-2556' && $difference_as_days > '-2922') : ?>
                                seven years ago
                            <?php elseif ($difference_as_days < '-2921' && $difference_as_days > '-3287') : ?>
                                eight years ago
                            <?php elseif ($difference_as_days < '-3286' && $difference_as_days > '-3653') : ?>
                                nine years ago
                            <?php elseif ($difference_as_days < '-3652') : ?>
                                over 10 years ago
                            <?php endif; ?></h2>

                        <h2><?php echo $dateDMjSY; ?></h2>

                        <p class="">
                        <?php if (get_field('doors', $upcoming->ID)) : ?>
                            Doors <?php the_field('doors', $upcoming->ID);?> •
                        <?php endif; ?>
                        
                        <?php if (get_field('show', $upcoming->ID)) : ?>
                            Show <?php the_field('show', $upcoming->ID);?>
                        <?php endif; ?>
                        
                        <?php if (get_field('additional_event_info', $upcoming->ID)) : ?>
                            <?php the_field('additional_event_info', $upcoming->ID);?>
                        <?php endif; ?>
                        </p>

                        <div class="ticket-block">
                            <?php echo do_shortcode('[tribe_tickets post_id="'. $upcoming->ID.'"]');?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- Event Line-Up -->
<section class="event-line-up home-line-up" id="line-up">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 text-center">
            <?php $headliners = get_field( 'headliner', $upcoming->ID ); ?>
            <?php $performers = get_field( 'performers', $upcoming->ID ); ?>
            <?php $mcs = get_field( 'mc', $upcoming->ID ); ?>
            <?php if ( $headliners or $performers or $mcs): ?>
                <h3 class="block-title">Line <span>Up</span></h3>
            <?php else : ?>
                <h3 class="block-title">Line <span>Up</span> Coming Soon</h3>
            <?php endif; ?>
            </div>

            <div class="line-up-pics row justify-content-center no-gutters">
                <?php if ( $headliners ) : ?>
                    <?php foreach ( $headliners as $post ) : ?>
                        <?php setup_postdata ( $post ); ?>                          
                            <?php if ( get_field( 'no_profile' ) == 1 ) : ?>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 cherry-color-box no-profile">
                                    <div class="hover-img">
                                        <!--div class="overlay-hover"></div-->
                                        <?php $picture = get_field( 'picture' ); ?>
                                        <?php $size = 'home-listing'; ?>
                                        <?php if ( $picture ) : ?>
                                            <?php echo wp_get_attachment_image( $picture, $size ); ?>
                                        <?php else : ?>
                                            <img src="/wp-content/uploads/2021/09/no-profile.jpg">
                                        <?php endif; ?>
                                        <div class="comic-name">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 cherry-color-box">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="hover-img">
                                            <div class="overlay-hover"></div>
                                            <?php $picture = get_field( 'picture' ); ?>
                                            <?php $size = 'home-listing'; ?>
                                            <?php if ( $picture ) : ?>
                                            <?php echo wp_get_attachment_image( $picture, $size ); ?>
                                            <?php else : ?>
                                                <img src="/wp-content/uploads/2021/09/no-profile.jpg">
                                            <?php endif; ?>
                                            <div class="comic-name">
                                                <?php the_title(); ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <?php if ( $performers ) : ?>
                    <?php foreach ( $performers as $post ) : ?>
                        <?php setup_postdata ( $post ); ?>                          
                            <?php if ( get_field( 'no_profile' ) == 1 ) : ?>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 cherry-color-box no-profile">
                                    <div class="hover-img">
                                        <!--div class="overlay-hover"></div-->
                                        <?php $picture = get_field( 'picture' ); ?>
                                        <?php $size = 'home-listing'; ?>
                                        <?php if ( $picture ) : ?>
                                            <?php echo wp_get_attachment_image( $picture, $size ); ?>
                                        <?php else : ?>
                                            <img src="/wp-content/uploads/2021/09/no-profile.jpg">
                                        <?php endif; ?>
                                        <div class="comic-name">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 cherry-color-box">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="hover-img">
                                            <div class="overlay-hover"></div>
                                            <?php $picture = get_field( 'picture' ); ?>
                                            <?php $size = 'home-listing'; ?>
                                            <?php if ( $picture ) : ?>
                                                <?php echo wp_get_attachment_image( $picture, $size ); ?>
                                            <?php else : ?>
                                                <img src="/wp-content/uploads/2021/09/no-profile.jpg">
                                            <?php endif; ?>
                                            <div class="comic-name">
                                                <?php the_title(); ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <?php if ( $mcs ) : ?>
                    <?php foreach ( $mcs as $post ) : ?>
                        <?php setup_postdata ( $post ); ?>                          
                            <?php if ( get_field( 'no_profile' ) == 1 ) : ?>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 cherry-color-box no-profile">
                                    <div class="hover-img">
                                        <!--div class="overlay-hover"></div-->
                                        <?php $picture = get_field( 'picture' ); ?>
                                        <?php $size = 'home-listing'; ?>
                                        <?php if ( $picture ) : ?>
                                            <?php echo wp_get_attachment_image( $picture, $size ); ?>
                                        <?php else : ?>
                                            <img src="/wp-content/uploads/2021/09/no-profile.jpg">
                                        <?php endif; ?>
                                        <div class="comic-name">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 cherry-color-box">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="hover-img">
                                            <div class="overlay-hover"></div>
                                            <?php $picture = get_field( 'picture' ); ?>
                                            <?php $size = 'home-listing'; ?>
                                            <?php if ( $picture ) : ?>
                                                <?php echo wp_get_attachment_image( $picture, $size ); ?>
                                            <?php else : ?>
                                                <img src="/wp-content/uploads/2021/09/no-profile.jpg">
                                            <?php endif; ?>
                                            <div class="comic-name">
                                                <?php the_title(); ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <?php if ( get_field( 'plus_more', $upcoming->ID ) == 1 ) : ?>
                <div class="col-12 text-center">
                    <h4 class="block-title"><span>And</span> More <span>To Be Announced...</span></h4>
                </div>              
            <?php else : ?>
                <?php if ( $headliners or $performers or $mcs): ?>
                    <div class="col-12 line-up-text">
                        <?php $headliners = get_field( 'headliner', $upcoming->ID ); ?>
                        <?php if ( $headliners ) : ?>
                            <p class="performers"><span>Headlined by </span>
                                <?php foreach ( $headliners as $post ) : ?>
                                    <?php setup_postdata ( $headliner ); ?>
                                        <?php if ( get_field( 'no_profile', $upcoming->ID ) == 1 ) : ?>
                                            <span class="pf-com"><?php the_title(); ?></span>
                                        <?php else : ?>
                                            <span class="pf-com"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                        <?php endif; ?>
                                <?php endforeach; ?>
                            </p>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <?php $performers = get_field( 'performers', $upcoming->ID ); ?>
                        <?php if ( $performers ) : ?>
                            <p class="performers">
                                <?php foreach ( $performers as $post ) : ?>
                                    <?php setup_postdata ( $post ); ?>
                                        
                                        <?php if ( get_field( 'no_profile', $upcoming->ID ) == 1 ) : ?>
                                            <span class="pf-com"><?php the_title(); ?></span>
                                        <?php else : ?>
                                            <span class="pf-com"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                        <?php endif; ?>
                                <?php endforeach; ?>
                            </p>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <?php $mcs = get_field( 'mc', $upcoming->ID ); ?>
                        <?php if ( $mcs ) : ?>
                            <p class="performers"><span>and Hosted by </span>
                                <?php foreach ( $mcs as $post ) : ?>
                                    <?php setup_postdata ( $post ); ?>
                                        
                                        <?php if ( get_field( 'no_profile', $upcoming->ID ) == 1 ) : ?>
                                            <span class="pf-com"><?php the_title(); ?></span>
                                        <?php else : ?>
                                            <span class="pf-com"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                        <?php endif; ?>
                                <?php endforeach; ?>
                            </p>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                <?php else : ?>
                <?php endif; ?>
            <?php endif; ?>

        </div>
    </div>
</section>