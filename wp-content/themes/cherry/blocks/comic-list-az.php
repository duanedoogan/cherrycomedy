
<section class="comedian-list">
	<div class="container">
		<div class="row no-gutters justify-content-center comic-list" id="">

			<div class="col-12 az-links">
				<a href="/comedians/a" class="letter-link">A</a>
				<a href="/comedians/b" class="letter-link">B</a>
				<a href="/comedians/c" class="letter-link">C</a>
				<a href="/comedians/d" class="letter-link">D</a>
				<a href="/comedians/e" class="letter-link">E</a>
				<a href="/comedians/f" class="letter-link">F</a>
				<a href="/comedians/g" class="letter-link">G</a>
				<a href="/comedians/h" class="letter-link">H</a>
				<a href="/comedians/i" class="letter-link">I</a>
				<a href="/comedians/j" class="letter-link">J</a>
				<a href="/comedians/k" class="letter-link">K</a>
				<a href="/comedians/l" class="letter-link">L</a>
				<a href="/comedians/m" class="letter-link">M</a>
				<a href="/comedians/n" class="letter-link">N</a>
				<a href="/comedians/o" class="letter-link">O</a>
				<a href="/comedians/p" class="letter-link">P</a>
				<span class="letter-link">Q</span>
				<a href="/comedians/r" class="letter-link">R</a>
				<a href="/comedians/s" class="letter-link">S</a>
				<a href="/comedians/t" class="letter-link">T</a>
				<a href="/comedians/u" class="letter-link">U</a>
				<a href="/comedians/v" class="letter-link">V</a>
				<a href="/comedians/w" class="letter-link">W</a>
				<span class="letter-link">X</span>
				<a href="/comedians/y" class="letter-link">Y</a>
				<span class="letter-link">Z</span>
			</div>

			<?php global $post;$post_slug = $post->post_name;$first_letter = strtoupper($post_slug);?>

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
				            'key'     => 'dont_show',
				            'value'   => '1',
				            'compare' => '!='
				        ),

				    ),
			);
			$postslist = get_posts($args);
			foreach ($postslist as $post) :
			setup_postdata($post);
			?>


			<?php $name = get_field('name'); $firstCharacter = $name[0]; ?>
				<?php if ( $firstCharacter == $first_letter ) : ?>
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
									<?php echo $name; ?>
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
										<?php echo $name; ?>
									</div>
								</div>
							</a>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; wp_reset_postdata(); ?>

			<div class="col-12 az-links">
				<a href="/comedians/a" class="letter-link">A</a>
				<a href="/comedians/b" class="letter-link">B</a>
				<a href="/comedians/c" class="letter-link">C</a>
				<a href="/comedians/d" class="letter-link">D</a>
				<a href="/comedians/e" class="letter-link">E</a>
				<a href="/comedians/f" class="letter-link">F</a>
				<a href="/comedians/g" class="letter-link">G</a>
				<a href="/comedians/h" class="letter-link">H</a>
				<a href="/comedians/i" class="letter-link">I</a>
				<a href="/comedians/j" class="letter-link">J</a>
				<a href="/comedians/k" class="letter-link">K</a>
				<a href="/comedians/l" class="letter-link">L</a>
				<a href="/comedians/m" class="letter-link">M</a>
				<a href="/comedians/n" class="letter-link">N</a>
				<a href="/comedians/o" class="letter-link">O</a>
				<a href="/comedians/p" class="letter-link">P</a>
				<span class="letter-link">Q</span>
				<a href="/comedians/r" class="letter-link">R</a>
				<a href="/comedians/s" class="letter-link">S</a>
				<a href="/comedians/t" class="letter-link">T</a>
				<a href="/comedians/u" class="letter-link">U</a>
				<a href="/comedians/v" class="letter-link">V</a>
				<a href="/comedians/w" class="letter-link">W</a>
				<span class="letter-link">X</span>
				<a href="/comedians/y" class="letter-link">Y</a>
				<span class="letter-link">Z</span>
			</div>

		</div>
	</div>
</section>