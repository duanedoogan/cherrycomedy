<?php if ( get_field( 'no_profile' ) == 1 ) : ?>
    <?php header("Location: /"); ?>
<?php endif; ?>

<?php get_header(); ?>
<?php include_once('blocks/comic-info-header.php'); ?>
<?php include_once('blocks/comic-video.php'); ?>
<?php include_once('blocks/comic-gallery.php'); ?>
<?php include_once('blocks/comic-shows.php'); ?>
<?php include_once('blocks/comic-social-media.php'); ?>
<?php include_once('blocks/latest-news.php'); ?>
<?php get_footer(); ?>