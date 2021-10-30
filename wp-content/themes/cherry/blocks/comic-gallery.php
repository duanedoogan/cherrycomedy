<?php $comic_gallery_ids = get_field( 'comic_gallery', $user_id_prefixed ); ?>
<?php $thumb_size = 'comic-300'; ?>
<?php $gallery_size = 'img-1400'; ?>
<?php if ( $comic_gallery_ids ) :  ?>
    <div class="comic-gallery container">
        <link rel="stylesheet" type="text/css" href="/wp-content/themes/cherry/assets/css/imageGal.css">
        <script src="/wp-content/themes/cherry/assets/js/imageGal.js"></script>
        <div class="imageGallery1 row no-gutters justify-content-center">
            <?php shuffle($comic_gallery_ids); foreach($comic_gallery_ids as $comic_gallery_id) : ?>
                <div class="col-lg-2 col-3 single-img">
                    <a href="<?php echo wp_get_attachment_image_url( $comic_gallery_id, $gallery_size ); ?>">
                        <?php echo wp_get_attachment_image( $comic_gallery_id, $thumb_size ); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script> new SimpleLightbox({elements: '.imageGallery1 a'}); </script>
<?php endif; ?>