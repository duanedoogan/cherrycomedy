<?php
/* Template Name: Tickets */
get_header(); ?>

<!-- Buy Tickets -->
<section class="buy-tickets">
    <div class="container">
        <div class="row">

            <?php $today = date('Ymd', strtotime('+120 minutes')); $upcomings = get_posts( array( 'post_type' => 'event', 'posts_per_page' => '4', 'meta_key' => 'date', 'orderby' => 'meta_value', 'order' => 'ASC', 'meta_query' => array( array( 'key' => 'date', 'compare' => '>=', 'value' => $today, ) ) ) ); ?>
            <?php if( $upcomings ): ?>       
                <?php foreach( $upcomings as $upcoming ): ?>
                    <div class="col-lg-12">
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

                        <div class="row justify-content-center single-ticket-event">
                            <div class="col-lg-6">
                                <h2><?php echo $dateDMjSY; ?></h2>
                            </div>
                            <div class="col-lg-6">
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
                                    <?php endif; ?>
                                </h2>
                            </div>
                            
                            <div class="col-lg-3 poster-box">
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

                            <div class="col-lg-9">
                                <div class="ticket-block">
                                    <?php echo do_shortcode('[tribe_tickets post_id="'. $upcoming->ID.'"]');?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>


        </div>
    </div>
</section>

<?php get_footer(); ?>