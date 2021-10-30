<!-- Event Line-Up -->
<section class="event-line-up" id="line-up">
	<div class="container">
		<div class="row no-gutters justify-content-center">
			<div class="col-12 text-center">
			<?php $headliners = get_field( 'headliner' ); ?>
			<?php $performers = get_field( 'performers' ); ?>
			<?php $mcs = get_field( 'mc' ); ?>
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
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 cherry-color-box no-profile">
									<div class="hover-img">
										<!--div class="overlay-hover"></div-->
										<?php $picture = get_field( 'picture' ); ?>
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
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 cherry-color-box">
									<a href="<?php the_permalink(); ?>">
										<div class="hover-img">
											<div class="overlay-hover"></div>
											<?php $picture = get_field( 'picture' ); ?>
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
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<?php if ( $performers ) : ?>
					<?php foreach ( $performers as $post ) : ?>
						<?php setup_postdata ( $post ); ?>							
							<?php if ( get_field( 'no_profile' ) == 1 ) : ?>
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 cherry-color-box no-profile">
									<div class="hover-img">
										<!--div class="overlay-hover"></div-->
										<?php $picture = get_field( 'picture' ); ?>
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
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 cherry-color-box">
									<a href="<?php the_permalink(); ?>">
										<div class="hover-img">
											<div class="overlay-hover"></div>
											<?php $picture = get_field( 'picture' ); ?>
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
						<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<?php if ( $mcs ) : ?>
					<?php foreach ( $mcs as $post ) : ?>
						<?php setup_postdata ( $post ); ?>							
							<?php if ( get_field( 'no_profile' ) == 1 ) : ?>
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 cherry-color-box no-profile">
									<div class="hover-img">
										<!--div class="overlay-hover"></div-->
										<?php $picture = get_field( 'picture' ); ?>
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
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 cherry-color-box">
									<a href="<?php the_permalink(); ?>">
										<div class="hover-img">
											<div class="overlay-hover"></div>
											<?php $picture = get_field( 'picture' ); ?>
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
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

	            <?php if ( get_field( 'plus_more' ) == 1 ) : ?>
	                <div class="col-12 text-center">
	                    <h4 class="block-title"><span>And</span> More <span>To Be Announced...</span></h4>
	                </div>				
	            <?php else : ?>
					<?php if ( $headliners or $performers or $mcs): ?>
						<div class="col-12 line-up-text">
							<?php $headliners = get_field( 'headliner' ); ?>
							<?php if ( $headliners ) : ?>
								<p class="performers"><span>Headlined by </span>
									<?php foreach ( $headliners as $post ) : ?>
										<?php setup_postdata ( $headliner ); ?>
											<?php if ( get_field( 'no_profile' ) == 1 ) : ?>
												<span class="pf-com"><?php the_title(); ?></span>
											<?php else : ?>
												<span class="pf-com"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
											<?php endif; ?>
									<?php endforeach; ?>
								</p>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>

							<?php $performers = get_field( 'performers' ); ?>
							<?php if ( $performers ) : ?>
								<p class="performers">
									<?php foreach ( $performers as $post ) : ?>
										<?php setup_postdata ( $post ); ?>
											
											<?php if ( get_field( 'no_profile' ) == 1 ) : ?>
												<span class="pf-com"><?php the_title(); ?></span>
											<?php else : ?>
												<span class="pf-com"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
											<?php endif; ?>
									<?php endforeach; ?>
								</p>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>

							<?php $mcs = get_field( 'mc' ); ?>
							<?php if ( $mcs ) : ?>
								<p class="performers"><span>and Hosted by </span>
									<?php foreach ( $mcs as $post ) : ?>
										<?php setup_postdata ( $post ); ?>
											
											<?php if ( get_field( 'no_profile' ) == 1 ) : ?>
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

			<script type="text/javascript">
				var numItems = $('.cherry-color-box').length
				/*alert(numItems);*/
			</script>

			<script type="text/javascript">

				$(document).ready(function() {
					$(".line-up-pics").each(function(index, element) {		
			            if ($(this).children(".cherry-color-box").length == 17) {
							$( "<div class='w-100'></div>" ).insertAfter( ".line-up-pics .cherry-color-box:nth-child(12)" );
							$( "<div class='w-100'></div>" ).insertAfter( ".line-up-pics .cherry-color-box:nth-child(16)" );
						}
			            else if ($(this).children(".cherry-color-box").length == 13) {
							$( "<div class='w-100'></div>" ).insertAfter( ".line-up-pics .cherry-color-box:nth-child(8)" );
							$( "<div class='w-100'></div>" ).insertAfter( ".line-up-pics .cherry-color-box:nth-child(12)" );
						}
			            else if ($(this).children(".cherry-color-box").length == 9) {
							$( "<div class='w-100'></div>" ).insertAfter( ".line-up-pics .cherry-color-box:nth-child(3)" );
							$( "<div class='w-100'></div>" ).insertAfter( ".line-up-pics .cherry-color-box:nth-child(7)" );
						}
			            else if ($(this).children(".cherry-color-box").length == 6) {
							$( "<div class='w-100'></div>" ).insertAfter( ".line-up-pics .cherry-color-box:nth-child(3)" );
						}
			            else if ($(this).children(".cherry-color-box").length == 5) {
							$( "<div class='w-100'></div>" ).insertAfter( ".line-up-pics .cherry-color-box:nth-child(3)" );
						}
			            else  {
							$( "" ).insertAfter( ".line-up-pics .cherry-color-box" );
						}
			        });
			        
			    });
			</script>

		</div>
	</div>
</section>