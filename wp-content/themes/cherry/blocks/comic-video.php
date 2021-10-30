<?php if( get_field('video') ): ?>
    <!-- Video -->
    <section class="comic-video">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h3 class="block-title">Watch <i class="fas fa-play"></i></h3>
                </div>
            </div>
        </div>
        <div class="video-frame">
            <div class="container">
                <div class="row justify-content-center">
                    <?php the_field( 'video' ); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>