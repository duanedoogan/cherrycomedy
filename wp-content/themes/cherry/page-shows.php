<?php 
/*Template Name: Show List */
get_header(); ?>

<?php 
    $today = date('Ymd', strtotime('+120 minutes')); 
    $events = get_posts(
        array(
            'post_type' => 'event',
            'posts_per_page' => '4',
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

<!-- Event Line-Up -->
<section class="event-list upcoming" id="line-up2">
	<div class="container">
		<div class="row justify-content-center" id="line-up">
            
            <div class="col-12 text-center">
                <h3 class="block-title"><span>Upcoming</span> Shows</h3>
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

				<div class="col-lg-3 col-md-6 col-sm-12 col-6 cherry-color-box no-profile">
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="otd-year"><span><?php echo $dateM; ?></span><?php echo $dateD; ?></div>
                        </div>
                        <div class="col-12">
        					<a href="<?php echo $link; ?>">
        						<div class="hover-img">
        							<div class="overlay-hover"></div>
        							<?php $picture = get_field( 'poster', $event->ID ); ?>
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

<style type="text/css">
    .otd-year {
        background: #ff4eb6;
        color: #FFF;
        font-weight: bold;
        font-size: 32px;
        width: fit-content;
        max-width: fit-content;
        margin: 0 auto;
        -webkit-transform: skewY(-2deg);
        -moz-transform: skewY(-2deg);
        -ms-transform: skewY(-2deg);
        -o-transform: skewY(-2deg);
        transform: skewY(-2deg);
        z-index: 9;
        position: relative;
        top: 12px;
        padding: 0 20px;
        text-transform: uppercase;      
        font-family: 'Monument Extended';
    }

    .otd-year span {
        font-family: 'Druk Cyr';
    }

</style>

<?php endif; ?>

<?php 
    $today = date('Ymd', strtotime('+120 minutes')); 
    $events = get_posts(
        array(
            'post_type' => 'event',
            'posts_per_page' => '-1',
            'meta_key' => 'date',
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'meta_query' => array(
                array(
                    'key' => 'date',
                    'compare' => '<=',
                    'value' => $today,
                ),
            )
        )
    );
?>

<?php if( $events ): ?>

<!-- Event Line-Up -->
<section class="event-list">
	<div class="container">
		<div class="row justify-content-center" id="previous-shows">
            
            <div class="col-12 text-center">
                <h3 class="block-title"><span>Previous</span> Shows</h3>
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

				<div class="col-lg-3 col-md-6 col-sm-12 col-6 cherry-color-box single-event">
					<a href="<?php echo $link; ?>">
						<div class="hover-img">
							<div class="overlay-hover"></div>
							<?php $picture = get_field( 'poster', $event->ID ); ?>
							<?php $size = 'full'; ?>
							<?php if ( $picture ) : ?>
							<?php echo wp_get_attachment_image( $picture, $size ); ?>
							<?php else : ?>
								<img src="/wp-content/uploads/2021/10/Poster.jpg">
							<?php endif; ?>
						</div>
					</a>
				</div>

            <?php endforeach; ?>

		</div>
	</div>
</section>

<?php endif; ?>

<?php get_footer(); ?>