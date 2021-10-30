<?php 
    $today_date = date('d', strtotime('+1 hour'));
    $today_month = date('m', strtotime('+1 hour'));
    $on_this_days = get_posts(
        array(
        'post_type' => 'event',
        'numberposts' => '-1',
        'post_status' => 'publish',
        'order' => 'ASC',
        'orderby' => 'date',
        'meta_query' => array(
            'relation' => 'OR',
                array(
                    'key' => 'date',
                    'value' => '2014'.$today_month.$today_date,
                    'compare' => '=',
                ),
                array(
                    'key' => 'date',
                    'value' => '2015'.$today_month.$today_date,
                    'compare' => '=',
                ),
                array(
                    'key' => 'date',
                    'value' => '2016'.$today_month.$today_date,
                    'compare' => '=',
                ),
                array(
                    'key' => 'date',
                    'value' => '2017'.$today_month.$today_date,
                    'compare' => '=',
                ),
                array(
                    'key' => 'date',
                    'value' => '2018'.$today_month.$today_date,
                    'compare' => '=',
                ),
                array(
                    'key' => 'date',
                    'value' => '2019'.$today_month.$today_date,
                    'compare' => '=',
                ),
                array(
                    'key' => 'date',
                    'value' => '2020'.$today_month.$today_date,
                    'compare' => '=',
                ),
            ),
        )   
    );
?>

<?php if( $on_this_days ): ?>
    
    <section class="on-this-day">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 otd-title">
                    <h2>On This Day</h2>
                    <div class="otd-gradient"></div>
                    <p class="otd-bg-text">On This Day</p>
                </div>

                <?php foreach( $on_this_days as $on_this_day ): ?>

                    <?php $date = get_field('date', $on_this_day->ID);
                        $dateW = date("D", strtotime($date));
                        $dateD = date("j", strtotime($date));
                        $dateM = date("M", strtotime($date));
                        $dateMl = date("m", strtotime($date));
                        $dateY = date("Y", strtotime($date)); 
                        $dateYl = date("y", strtotime($date));
                        $link = get_the_permalink($on_this_day->ID);
                    ?>

                    <div class="on-this-day-event col-lg-3 col-lg-3 col-md-6 col-sm-6 col-8">
                        <div class="row text-center">
                            <div class="col-12">                
                                <div class="otd-year"><?php echo $dateY; ?></div>
                            </div>

                           <div class="col-12 cherry-color-box no-profile">
                                <a href="<?php echo $link; ?>">
                                    <div class="hover-img">
                                        <div class="overlay-hover"></div>
                                        <?php $picture = get_field( 'poster', $on_this_day->ID ); ?>
                                        <?php $size = 'full'; ?>
                                        <?php if ( $picture ) : ?>
                                        <?php echo wp_get_attachment_image( $picture, $size ); ?>
                                        <?php else : ?>
                                            <img src="/wp-content/uploads/2021/10/Poster.jpg">
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>

<?php endif; ?>