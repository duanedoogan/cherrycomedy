<?php
	$args = array(
		'post_type' => 'quote',
		'numberposts' => '1',
		'post_status' => 'publish',
		'orderby' => 'rand',
);
$postslist = get_posts($args);
foreach ($postslist as $post) :
setup_postdata($post);
?>

<section class="event-reviews">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-auto col-12 single-quote">
				<span class="quotes"></span>
				<div class="review"><?php the_field('quote'); ?></div>
				<div class="reviewer"><?php the_field('quote_author'); ?></div>
			</div>
		</div>
	</div>
</section>

<?php endforeach; wp_reset_postdata(); ?>

<?php if ($todays_date > $end_show) : ?>
<?php else : ?>
	<?php $venue = get_field( 'venue' ); ?>
	<?php if ( $venue ) : ?>
		<!-- Get To Whelan's -->
		<section class="get-to-whelans">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<h3 class="block-title">Getting <span>To</span> <?php the_field( 'venue_title', $venue ); ?></h3>
					</div>
					<?php if( get_field('bus_routes_title', $venue) ): ?>
						<div class="col-lg-6 col-12 single-transport text-center">
							<i class="fas fa-bus-alt"></i>
							<h4><?php the_field( 'bus_routes_title', $venue ); ?></h4>
							<p><?php the_field( 'bus_routes_times', $venue ); ?></p>
						</div>
					<?php endif; ?>

					<?php if( get_field('train_routes_title', $venue) ): ?>
						<div class="col-lg-6 col-12 single-transport text-center">
							<i class="fas fa-bus-alt"></i>
							<h4><?php the_field( 'train_routes_title', $venue ); ?></h4>
							<p><?php the_field( 'train_routes_times', $venue ); ?></p>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>