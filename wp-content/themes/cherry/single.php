<?php get_header(); ?>

<section class="news-content">
    <div class="container">
        <div class="row justify-content-center">
        	<div class="col-lg-8">
                <div class="category"><a href="/news">News</a> • <?php echo meks_time_ago(); ?></div>
				<h1><?php the_field( 'short_title' ); ?></h1>
				<p class="tagline"><?php the_field( 'tagline' ); ?></p>
				<?php $featured_image = get_field( 'featured_image' ); ?>
				<?php $size = 'blog-heading'; ?>
				<?php if ( $featured_image ) : ?>
					<?php echo wp_get_attachment_image( $featured_image, $size ); ?>
				<?php endif; ?>

				<?php if ( get_field( '10_questions_tf' ) == 1 ) : ?>
					<div class="news-content"><?php the_field( 'content' ); ?></div>
				<?php else : ?>
					<?php the_field( 'content' ); ?>
				<?php endif; ?>
				<?php if ( get_field( '10_questions_tf' ) == 1 ) : ?>
					<?php if ( have_rows( '10_questions' ) ) : ?>
						<div class="questions_10">
							<?php while ( have_rows( '10_questions' ) ) : the_row(); ?>
								<p class="question"><strong><span>1.</span> One liner?</strong></p>
								<p class="answer"><?php the_sub_field( '1_one_liner' ); ?></p>
			
								<p class="question"><strong><span>2.</span> Guilty Pleasure?</strong></p>
								<p class="answer"><?php the_sub_field( '2_guilty_pleasure' ); ?></p>

								<p class="question"><strong><span>3.</span> A comedian you enjoy watching?</strong></p>
								<p class="answer"><?php the_sub_field( '3_a_comedian_you_enjoy_watching' ); ?></p>

								<p class="question"><strong><span>4.</span> Tell us something about your hometown?</strong></p>
								<p class="answer"><?php the_sub_field( '4_tell_us_something_about_your_hometown' ); ?></p>

								<p class="question"><strong><span>5.</span> Who would play you in a film?</strong></p>
								<p class="answer"><?php the_sub_field( '5_who_would_play_you_in_a_film' ); ?></p>

								<p class="question"><strong><span>6.</span> Favourite biscuit?</strong></p>
								<p class="answer"><?php the_sub_field( '6_favourite_biscuit' ); ?></p>

								<p class="question"><strong><span>7.</span> Karaoke song?</strong></p>
								<p class="answer"><?php the_sub_field( '7_karaoke_song' ); ?></p>

								<p class="question"><strong><span>8.</span> Spirit animal?</strong></p>
								<p class="answer"><?php the_sub_field( '8_spirit_animal' ); ?></p>

								<?php if ( get_sub_field( 'alt_q' ) == 1 ) : ?>
									<p class="question"><strong><span>9.</span> Last meal?</strong></p>
									<p class="answer"><?php the_sub_field( '9_last_meal' ); ?></p>
								<?php else : ?>
									<p class="question"><strong><span>9.</span> Hangover cure?</strong></p>
									<p class="answer"><?php the_sub_field( '9_hangover_cure' ); ?></p>
								<?php endif; ?>

								<p class="question"><strong><span>10.</span> You have to change your name, what do you change it to?</strong></p>
								<p class="answer"><?php the_sub_field( '10_you_have_to_change_your_name_what_do_you_change_it_to' ); ?></p>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
	        </div>
	    </div>
    </div>
</section>

<section class="">
	<div class="container">
		<div class="row justify-content-center">
			<?php $in_this_article = get_field( 'in_this_article' ); ?>
			<?php if ( $in_this_article ) : ?>
				<div class="col-lg-6 col-12 h-100">
					<?php $in_this_article = get_field( 'in_this_article' ); ?>
					<?php if ( $in_this_article ) : ?>
						<?php foreach ( $in_this_article as $ita_comic ) : ?>

							<?php $link = get_the_permalink($ita_comic); ?>
							<?php $picture = get_field( 'picture', $ita_comic ); ?>
							<?php $size = 'comic-article'; ?>

							<a href="<?php echo $link; ?>">
								<div class="in-this-article ita-event">
									<div class="no-gutters row justify-content-center h-100">
										<div class="col-auto">
											<img src="<?php if ( $picture ) : ?><?php echo wp_get_attachment_image_url( $picture, $size ); ?><?php endif; ?>" class="ita-poster ita-profile">
										</div>
										<div class="ita-title">In This Article</div>
										<div class="col my-auto text-center" style="position:relative;">
											<h3 class="event-title"><?php echo get_the_title( $ita_comic ); ?></h3>
											<button type="button" class="btn btn-3d">View Profile</button>
										</div>
									</div>
								</div>
							</a>

						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		
			<div class="col-lg-6 col-12">				
				<?php $ita_events = get_field( 'event' ); ?>
				<?php if ( $ita_events ) : ?>
					<?php foreach ( $ita_events as $ita_event ) : ?>

						<?php $link = get_the_permalink($ita_event); ?>
						<?php $picture = get_field( 'poster', $ita_event ); ?>
						<?php $size = 'in-this-article'; ?>
	                    <?php $date_show = get_field('date', $ita_event);
	                        $dateW = date("D", strtotime($date_show));
	                        $dateD = date("j", strtotime($date_show));
	                        $dateM = date("M", strtotime($date_show));
	                        $dateY = date("Y", strtotime($date_show)); 
	                    ?>

						<?php
							$now = time(); // or your date as well
							$show_date = strtotime($date_show);
							$datediff = $show_date - $now;
							$difference_as_days = round($datediff / (60 * 60 * 24));
						?>

						<a href="<?php echo $link; ?>">
							<div class="in-this-article ita-event">
								<div class="no-gutters row justify-content-center h-100">
									<div class="col-auto">
										<img src="<?php if ( $picture ) : ?><?php echo wp_get_attachment_image_url( $picture, $size ); ?><?php endif; ?>" class="ita-poster">
									</div>
									<div class="ita-title">In This Article</div>
									<div class="col my-auto text-center" style="position:relative;">
										<p class="days-away">
											<?php if ($difference_as_days == '-1') : ?>
												it's tonight
											<?php elseif ($difference_as_days == '0') : ?>
												it's tomorrow
											<?php elseif ($difference_as_days > '0' && $difference_as_days < '30') : ?>
												<?php echo $difference_as_days + '1'; ?> days away
											<?php elseif ($difference_as_days > '29' && $difference_as_days < '60') : ?>
												1 month away
											<?php elseif ($difference_as_days > '60' && $difference_as_days < '365') : ?>
												<?php $months_duration = $difference_as_days / '30'; echo floor($months_duration); ?> months away
											<?php elseif ($difference_as_days > '365') : ?>
												over a year away
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
										</p>
										<h3 class="event-title"><?php echo $dateD; ?><span><?php echo $dateM; ?></span><?php echo $dateY; ?></h3>
										<button type="button" class="btn btn-3d">View Event</button>
									</div>
								</div>
							</div>
						</a>

					<?php endforeach; ?>
				<?php endif; ?>

			</div>
		</div>
</section>

<?php include_once('blocks/latest-news.php'); ?>

<?php get_footer(); ?>