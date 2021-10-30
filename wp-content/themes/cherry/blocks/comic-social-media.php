<?php if( get_field('twitter') or get_field('facebook') ): ?>
    <section>
        <div class="container">
            <div class="col-12 text-center">
                <h3 class="block-title">Social Media</h3>
            </div>
            <div class="row justify-content-center">
                <?php if( get_field('twitter') ): ?>
                    <div class="col-lg-4 col-12">
                        <a class="twitter-timeline" data-height="500" href="https://twitter.com/<?php the_field('twitter'); ?>?ref_src=twsrc%5Etfw">Tweets by <?php the_field('twitter'); ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                <?php endif; ?>
                <?php if( get_field('facebook') ): ?>
                    <div class="col-lg-4 col-12">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=750603981787326&autoLogAppEvents=1" nonce="oj2TnYZ7"></script>
                        <div class="fb-page" data-href="https://www.facebook.com/<?php the_field('facebook'); ?>/" data-tabs="timeline" data-width="999" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>