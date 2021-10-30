<!-- Next Show -->
<section class="next-show event-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 poster-box">
				<?php $poster = get_field( 'poster' ); ?>
				<?php $size = 'event-poster'; ?>
				<?php if ( $poster ) : ?>
					<?php echo wp_get_attachment_image( $poster, $size, "", ["class" => "show-poster"]); ?>
                <?php else : ?>
                    <img src="/wp-content/uploads/2021/10/Poster.jpg" class="show-poster">
				<?php endif; ?>
			</div>
			<div class="col-lg-7">			
				<?php
					$date = get_field('date');
					$start_time = get_field('start_time');
					$time = date("H", strtotime($start_time));
					$end_time = date("H:i", strtotime("+3 hours", strtotime($start_time)));
                    $dateY = date("Y", strtotime($date));
                    $datem = date("m", strtotime($date));
                    $dated = date("d", strtotime($date));
                    $event_date_Ymd = $dateY . "-" . $datem . "-" . $dated;
					$end_show = $event_date_Ymd . ' ' . $end_time;
                    $todays_date = date('Y-m-d H:i', strtotime('+1 hours'));
                    $date_today = date("Y-m-d");
                    $date_show = date("Y-m-d", strtotime($date));
				if ($todays_date > $end_show) : ?>
					<h2 class="tag">This Show Has Ended</h2>
				<?php else : ?>
					<h2 class="tag">
						<?php
							$now = time(); // or your date as well
							$show_date = strtotime($date_show);
							$datediff = $show_date - $now;
							$difference_as_days = round($datediff / (60 * 60 * 24));
						?>
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
					</h2>
				<?php endif; ?>

                <?php
                    $dateD = date("D", strtotime($date));
                    $dateM = date("M", strtotime($date));
                    $datejS = date("jS", strtotime($date));
                    $dateY = date("Y", strtotime($date)); 
					$venue = get_field( 'venue' );
                ?>

				<h2><?php echo $dateD;?> <?php echo $dateM;?> <?php echo $datejS;?>, <?php echo $dateY;?></h2>
				<h2 class="tag-lower"><?php the_field( 'venue_location', $venue ); ?></h2>
				<div>
					<a href="#line-up">
						<button type="button" class="btn line-up-tag"><i class="fas fa-arrow-down"></i> Line-Up</button>
					</a>
				</div>

				<div class="row show-info">
					<?php if ($todays_date > $end_show) : ?>
						<?php $event_type = get_field('event_type');
							if ($event_type == 'breakout_20' or $event_type == 'breakout_19') : ?>
								<?php if ( get_field( 'breakout_act_round' ) == 1 ) : ?>
									<div class="col-lg-12">
										<p class="breakout winner"><strong>Winner:</strong> <?php the_field( 'finals_winner' ); ?></p>
										<p class="breakout runner_1"><strong>1st Runner-Up:</strong> <?php the_field( 'runnerup_1' ); ?></p>
										<p class="breakout runner_2"><strong>2nd Runner Up:</strong> <?php the_field( 'runnerup_2' ); ?></p>
									</div>
								<?php else : ?>
									<div class="col-lg-12">
										<p class="breakout"><strong>Judges Vote Winner:</strong> <?php the_field( 'judges_vote_winner' ); ?></p>
										<p class="breakout"><strong>Audience Vote Winner:</strong> <?php the_field( 'audience_vote_winner' ); ?></p>
									</div>
								<?php endif; ?>
							<?php endif; ?>
					<?php else : ?>
						<?php if ( have_rows( 'event_icons_left', $venue ) ) : ?>
							<div class="col-lg-auto">
								<?php while ( have_rows( 'event_icons_left', $venue ) ) : the_row(); ?>
									<div class="single-icon"><?php the_sub_field( 'icon', $venue ); ?> <?php the_sub_field( 'label', $venue ); ?></div>
								<?php endwhile; ?>
							</div>
							<?php endif; ?>
						<?php if ( have_rows( 'event_icons_right', $venue ) ) : ?>
							<div class="col-lg-auto">
								<?php while ( have_rows( 'event_icons_right', $venue ) ) : the_row(); ?>
									<div class="single-icon"><?php the_sub_field( 'icon', $venue ); ?> <?php the_sub_field( 'label', $venue ); ?></div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<?php if ($todays_date > $end_show) : ?>
				<?php else : ?>
					<div class="ticket-block" id="tickets">
	                    <?php echo do_shortcode('[tribe_tickets]'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
