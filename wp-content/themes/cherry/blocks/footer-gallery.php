<?php 
    $images = get_field('gallery', 9550); 
    $size = 'thumbnail';
    if( $images ):
        shuffle($images); // randomizes the image array
        $max = 12; // set the max here;
        $count = 0; // current count
?>
    <section class="pic-grid pb-0">
        <div class="row no-gutters">
            <?php 
                foreach( $images as $image ):
                    $count++;
                    if ($count > $max) {
                        break;
                    }
             ?>
                <div class="col-lg-2 col-4">
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>