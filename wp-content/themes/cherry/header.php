<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php wp_head(); ?>
    <?php $style_num = (rand(1,4)); ?>
    <link rel="stylesheet" href="/wp-content/themes/cherry/assets/css/css-<?php echo $style_num; ?>.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/cherry/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/cherry/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/cherry/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/themes/cherry/assets/images/favicon/site.webmanifest">
</head>

<body <?php body_class(); ?>>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/wp-content/themes/cherry/assets/images/logo-<?php echo $style_num; ?>.svg" class="logo-nav">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars closed-icon" aria-hidden="true"></i>
                <i class="fas fa-times open-icon" aria-hidden="true"></i>                    
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/shows">Shows</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/comedians">Comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link buy_tickets" href="/tickets">Buy Tickets</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php if( is_singular('post') or is_page(9273) or is_page(9274) or is_page(9282) ) : ?>
<?php else : ?>
<!-- Hero -->
<section class="inner-page hero">
    <div class="container">
        <div class="row h-100">
            <div class="col-12 my-auto w-100 hero-content text-center">
                <?php if ( 'comedian' == get_post_type() or 'event' == get_post_type() or is_page(12052) ) : ?>
                <?php else : ?>
                    <?php if(get_field('overwrite_page_title')) : ?>
                        <h1><?php the_field('overwrite_page_title'); ?></h1> 
                    <?php else : ?>
                        <h1><?php the_title(); ?></h1>
                    <?php endif ;?>
                <?php endif ;?>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>
<?php if ( get_field( 'header_photo' ) ) : ?>
    <style type="text/css">.inner-page.hero:before {background-image: url('<?php the_field( 'header_photo' ); ?>');}</style>
<?php else : ?>
    <style type="text/css">.hero:before {background-image: url(/wp-content/themes/cherry/assets/images/background/header-bg-<?php echo(rand(1,10)); ?>.jpg);}</style>
<?php endif ?>
<?php endif ;?>