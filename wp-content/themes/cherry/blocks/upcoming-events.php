<?php 
    $today = date('Ymd', strtotime('+120 minutes')); 
    $events = get_posts(
        array(
            'post_type' => 'event',
            'posts_per_page' => '5',
            'meta_key' => 'date',
            'orderby' => 'meta_value',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'date',
                    'compare' => '>=',
                    'value' => $today,
                ),
            )
        )
    );
?>

<?php if( $events ): ?>

    <!-- More Upcoming Shows -->
    <section class="more-shows show-list">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="block-title"><span>Upcoming</span> Events</h3>
                </div>

                <?php foreach( $events as $event ): ?>

                    <?php $date = get_field('date', $event->ID);
                        $dateW = date("D", strtotime($date));
                        $dateD = date("j", strtotime($date));
                        $dateM = date("M", strtotime($date));
                        $dateMl = date("m", strtotime($date));
                        $dateY = date("Y", strtotime($date)); 
                        $dateYl = date("y", strtotime($date)); 
                        $link = get_the_permalink($event->ID);
                    ?>

                    <a href="<?php echo $link; ?>">
                        <div class="col-12 single-show-list upcoming-singles">
                            <div class="row justify-content-center">
                                <div class="col-lg-2 col-6 show-date my-auto">
                                    <span><?php echo $dateM; ?></span><?php echo $dateD; ?><span>/<?php echo $dateYl; ?></span>
                                </div>
                                <div class="col-lg-3 col-6 show-logo my-auto">
                                    <?php $event_type = get_field('event_type', $event->ID); ?>
                                    <img class="style-svg" src="/wp-content/themes/cherry/assets/images/show-<?php echo $event_type; ?>.svg">
                                </div>
                                <div class="col-lg-4 show-title my-auto text-center">
                                    <?php echo get_field('gig_title', $event->ID); ?>
                                </div>
                                <div class="col-lg-3 show-btn my-auto text-right">
                                    <button type="button" class="btn btn-3d">View Event</button>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>