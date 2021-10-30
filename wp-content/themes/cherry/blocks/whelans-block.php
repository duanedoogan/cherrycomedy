<!-- Whelan's -->
<section class="whelans">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 whelans-pic">
                <img src="/wp-content/themes/cherry/assets/images/whelans-1.png">
            </div>
            <div class="col-lg-7 whelans-info">
                <h4><?php the_field( 'title', 9282 ); ?></h4>
                <p><?php the_field( 'blurb', 9282 ); ?></p>
                 <div class="row">
                    <div class="col-lg-6 col-12">
                        <ul class="address">
                            <a href="<?php the_field( 'google_maps_link', 9282 ); ?>" target="_blank"><li><?php the_field( 'address', 9282 ); ?></li></a>
                            <li><a href="tel:<?php the_field( 'number', 9282 ); ?>"><?php the_field( 'number', 9282 ); ?></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-12 ope-hrs">
                        <ul class="opening-hours">
                            <li>Opening Times:</li>
                            <li><?php the_field( 'opening_times', 9282 ); ?></li>
                        </ul>
                    </div>
                    <div class="col-12 links">
                        <a href="<?php the_field( 'facebook', 9282 ); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="<?php the_field( 'twitter', 9282 ); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="<?php the_field( 'instagram', 9282 ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="<?php the_field( 'website', 9282 ); ?>" target="_blank"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="/wp-content/themes/cherry/assets/images/whelans-home-bg.png" class="whelans-bg">
</section>