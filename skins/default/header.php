<!DOCTYPE html>
<html <?php language_attributes(); ?> id="parallax_scrolling">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<?php
$MagikCreta = new MagikCreta(); ?>
<body <?php body_class(); ?> >
<div id="page" class="page catalog-category-view">

    <nav class="navbar navbar-expand-lg ">
        <?php magikCreta_logo_image(); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
            <?php echo magikCreta_main_menu(); ?>

            <ul class="navbar-nav header-user d-flex align-items-center">
                <?php
                if (class_exists('WooCommerce')) :
                    $MagikCreta->magikCreta_mini_cart();
                endif;
                ?>

                <?php if (is_user_logged_in()) {
                    global $current_user; ?>
                    <li class="nav-item dropdown show">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                                <span class="user_avatar">
                                    <img alt="<?php echo '' . esc_attr($current_user->display_name) . ''; ?>"
                                         src="<?php echo esc_url(get_avatar_url($user->ID)); ?>"/>
                                </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                            <div class="user-panel d-flex align-items-center">
                                <div>
                                    <div class="avatar">
                                        <img alt="<?php echo '' . esc_attr($current_user->display_name) . ''; ?>"
                                             src="<?php echo esc_url(get_avatar_url($user->ID)); ?>"/>
                                    </div>
                                </div>
                                <div class="user-info">
                                    <strong><?php echo '' . esc_attr($current_user->display_name) . ''; ?></strong><br/>
                                    <?php echo '' . esc_attr($current_user->user_email) . ''; ?>
                                </div>
                            </div>
                            <a class="dropdown-item"
                               href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="<?php echo wp_logout_url(get_permalink()); ?>">
                                Log Out
                            </a>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"
                           class="nav-link">
                            Sign In</a>
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