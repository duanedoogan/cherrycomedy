<?php 

/*Template Name: Comedians: Featured */
get_header(); ?>

<!-- Event Line-Up -->
<section class="comedian-list">
	<div class="container">
		<div class="row no-gutters justify-content-center comic-list" id="comedian-list">
			<?php $headliners = get_field( 'headliner', $post->ID ); ?>
			<?php $performers = get_field( 'performers', $post->ID ); ?>
			<?php $mcs = get_field( 'mc', $post->ID ); ?>

			<?php
				$args = array(
					'post_type' => 'comedian',
					'numberposts' => '-1',
					'post_status' => 'publish',
				    'orderby'        => 'title',
				    'order'          => 'ASC',
				    'meta_query' => array(
				        'relation' => 'AND', //**** Use AND or OR as per your required Where Clause
				        array(
				            'key'     => 'show__hide',
				            'value'   => 'show',
				        ),
				        array(
				            'key'     => 'no_profile',
				            'value'   => '1',
				            'compare' => '!='
				        ),
				    ),
			);
			$postslist = get_posts($args);
			foreach ($postslist as $post) :
			setup_postdata($post);
			?>

			<?php if ( get_field( 'no_profile', $post->ID ) == 1 ) : ?>
				<div class="col-lg-3 col-md-3 col-sm-4 col-4 cherry-color-box single-comic no-profile">
					<div class="hover-img">
						<?php $picture = get_field( 'picture', $post->ID ); ?>
						<?php $size = 'full'; ?>
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
				<div class="col-lg-3 col-md-3 col-sm-4 col-4 cherry-color-box single-comic">
					<a href="<?php the_permalink(); ?>">
						<div class="hover-img">
							<div class="overlay-hover"></div>
							<?php $picture = get_field( 'picture', $post->ID ); ?>
							<?php $size = 'full'; ?>
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

			<?php endforeach; wp_reset_postdata(); ?>

			<div class="single-comic not-single-comic">
				<a href="/comedians/all">
					<button type="button" class="btn btn-1 btn-3d">View All Comedians</button>
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>