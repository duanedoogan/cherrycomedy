<?php include_once('blocks/footer-gallery.php'); ?>
    <?php $style_num = (rand(1,4)); ?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left-footer">
                    <div class="footer-logo">
                        <img src="/wp-content/themes/cherry/assets/images/logo-footer-<?php echo $style_num; ?>.svg">
                    </div>

                    <div class="footer-text">
                        <h5>Contact</h5>
                        <p>Email: <a href="mailto:info@cherrycomedy.ie" target="_blank">info@cherrycomedy.ie</a> <br />
                            WhatsApp: <a href="https://api.whatsapp.com/send?phone=<?php the_field( 'whatsapp_number', 'option' ); ?>" target="_blank"><?php the_field( 'whatsapp_number', 'option' ); ?></a></p>

                        <!--p class="footer-links">
                            <a href="">Code of Conduct</a> • <a href="">FAQs</a> • <a href="">Link 3</a>
                        </p-->
                    </div>
                </div>

                <div class="col-lg-6 right-footer">
                    <div class="footer-text">
                        <h5>Cherry Comedy at Whelan's</h5>
                        <p>Mondays • Doors 8pm • Show 9pm<br />
                            Upstairs, Whelan's, 25 Wexford St, D02 H527</p>
                    </div>

                    <div class="footer-text">
                        <h5>Cherry Comedy at The Parlour</h5>
                        <p>Returning to Whelan's in 2022<br />
                            The Parlour Bar, Whelan's, 25 Wexford St, D02 H527</p>
                    </div>

                    <div class="footer-ws">
                        <img src="/wp-content/themes/cherry/assets/images/wexford-street.svg">
                    </div>

                    <div class="footer-socials social-block">
                        <a href="<?php the_field( 'facebook_link', 'option' ); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=<?php the_field( 'whatsapp_number', 'option' ); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="<?php the_field( 'instagram_link', 'option' ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="<?php the_field( 'twitter_link', 'option' ); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <!--a href="<?php the_field( 'youtube_link', 'option' ); ?>" target="_blank"><i class="fab fa-youtube"></i></i></a-->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <script src="/wp-content/themes/cherry/assets/js/scripts.js"></script>
    </body>
</html>