<!-- Hero -->
<section class="inner-page hero">
    <?php if (is_singular('post')) : ?>
        <div class="row h-100">
            <div class="col-12 my-auto w-100 hero-content text-center">
                <?php if ( 'comedian' == get_post_type() ) : ?>
                <?php else : ?>
                    <?php if(get_field('overwrite_page_title')) : ?>
                        <?php the_field('overwrite_page_title'); ?> 
                    <?php else : ?>
                        <h1><?php the_title(); ?></h1>
                    <?php endif ;?>
                <?php endif ;?>
            </div>
        </div>
    <?php else : ?>
        <div class="row h-100 inner-page-content justify-content-center">
            <div class="col-lg-6 col-12 my-auto text-center" style="position:relative;z-index:9;">
                <h1><?php the_title(); ?></h1>
                <div class="category"><a href="/news">News</a> • <?php echo meks_time_ago(); ?></div>
            </div>
        </div>
    <?php endif; ?>
    <div class="hero-overlay"></div>
</section>

<?php if ( get_field( 'header_photo' ) ) : ?>
    <style type="text/css">.inner-page.hero:before {background-image: url('<?php the_field( 'header_photo' ); ?>');}</style>
<?php else : ?>
    <style type="text/css">.hero:before {background-image: url(/wp-content/themes/cherry/assets/images/background/header-bg-<?php echo(rand(1,10)); ?>.jpg);}</style>
<?php endif ?>