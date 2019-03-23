<!DOCTYPE html>
<html <?php language_attributes(); ?> id="parallax_scrolling">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css"
          integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">

    <meta name="google-site-verification" content="0cA2YUXDvcEpul2iuPhQ8bGz87WsM9Vl-WWYd69Id6E"/>

    <?php wp_head(); ?>
</head>
<?php
$MagikCreta = new MagikCreta(); ?>
<body <?php body_class(); ?> >
<div id="page" class="page catalog-category-view">

    <nav class="navbar navbar-expand-lg ">
        <?php magikCreta_logo_image(); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01"
                aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
            <?php echo magikCreta_main_menu(); ?>

            <ul class="navbar-nav header-user d-flex align-items-md-center">
                <?php
                if (class_exists('WooCommerce')) :
                    $MagikCreta->magikCreta_mini_cart();
                endif;
                ?>


                <?php if (is_user_logged_in()) {
                    global $current_user; ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                                <span class="user_avatar">
                                    <?php echo get_avatar($current_user->user_email); ?>
                                </span>

                            <span class="user-minffo">
                                    <?php echo '' . esc_attr($current_user->display_name) . ''; ?>
                                        </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-panel" aria-labelledby="dropdown01">
                            <div class="user-box d-md-flex align-items-center">

                                <div class="avatar">
                                    <?php echo get_avatar($current_user->user_email); ?>
                                </div>
                                <div class="user-info">
                                    <strong><?php echo '' . esc_attr($current_user->display_name) . ''; ?></strong><br/>
                                    <?php echo '' . esc_attr($current_user->user_email) . ''; ?>
                                </div>
                            </div>
                            <?php //echo magikCreta_top_navigation(); ?>
                            <a class="dropdown-item"
                               href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>">
                                <i class="fa fa-cog"></i> Setting</a>
                            <a class="dropdown-item"
                               href="<?php echo get_permalink(wc_get_endpoint_url('downloads')); ?>">
                                <i class="fa fa-download"></i> Download</a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-archive"></i> Request Theme</a>
                            <a class="dropdown-item" href="<?php echo wp_logout_url(get_permalink()); ?>">
                                <i class="fa fa-sign-out"></i> Log Out
                            </a>
            
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"
                           class="nav-link"> Sign In</a>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </nav>

    <?php if (class_exists('WooCommerce') && is_woocommerce()) : ?>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php woocommerce_breadcrumb(); ?>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
<?php endif; ?>