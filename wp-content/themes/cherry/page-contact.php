<?php 
/* Template Name: Contact */
get_header(); ?>

    <style type="text/css">
        .woocommerce-input-wrapper {
            width: 100% !important;
        }
    </style>
    
    <section class="">

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-5">

                    <div class="contact-box">
                        <h2>Follow Us!</h2>
                        <span class="social-block">
                            <a href="<?php the_field( 'facebook_link', 'option' ); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php the_field( 'instagram_link', 'option' ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="<?php the_field( 'twitter_link', 'option' ); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="<?php the_field( 'youtube_link', 'option' ); ?>" target="_blank"><i class="fab fa-youtube"></i></i></a>
                        </span>
                    </div>

                    <a href="https://api.whatsapp.com/send?phone=+353%2085%20262%206062" target="_blank">
                        <div class="contact-box">
                            <img src="/wp-content/themes/cherry/assets/images/icon-whatsapp.svg">
                            <h2>WhatsApp Us!</h2>
                            <p>+353 85 262 6062</p>
                        </div>
                    </a>

                    <a href="https://m.me/CherryComedyDublin" target="_blank">
                        <div class="contact-box">
                            <img src="/wp-content/themes/cherry/assets/images/icon-messenger.svg">
                            <h2>Messenger Us!</h2>
                            <p>@CherryComedyDublin</p>
                        </div>
                    </a>

                    <div class="">
                        <div id="map"></div>
                    </div>

                </div>

                <div class="offset-lg-1 col-lg-6 contact-form">
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>

<!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly&channel=1" async></script>
<script type="text/javascript">
    let map;

    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(53.336583, -6.265631),
        zoom: 17,
      });

      const iconBase =
        "https://cherrycomedy.local/wp-content/themes/cherry/assets/images/";
      const icons = {
        parking: {
          icon: iconBase + "pin-logo.svg",
        },
      };
      const features = [
        {
          position: new google.maps.LatLng(53.336631,-6.2657096),
          type: "parking",
        },
      ];

      // Create markers.
      for (let i = 0; i < features.length; i++) {
        const marker = new google.maps.Marker({
          position: features[i].position,
          icon: icons[features[i].type].icon,
          map: map,
        });
      }
    }                    
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script-->