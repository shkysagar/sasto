<!DOCTYPE html>
<html <?php language_attributes(); ?> id="parallax_scrolling">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php
$MagikCreta = new MagikCreta(); ?>
<body <?php body_class(); ?> >
<div id="page" class="page catalog-category-view">

    <nav class="navbar navbar-expand-lg navbar-light ">
        <?php magikCreta_logo_image(); ?>
        <!--        <a class="navbar-brand" href="#">CompanyName</a>-->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php echo magikCreta_main_menu(); ?>

            <ul class="navbar-nav header-user">

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
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                               href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="<?php echo wp_logout_url( get_permalink() ); ?>">
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


    <hr/>

    <!-- Header -->
    <header id="header">
        <div class="header-container">

            <div class="header-top">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6">

                            <div class="welcome-msg">
                                <?php echo magikCreta_msg(); ?>
                            </div>
                            <?php
                            $user = wp_get_current_user();

                            if ($user) :
                                ?>
                                <img src="<?php echo esc_url(get_avatar_url($user->ID)); ?>"/>
                            <?php endif; ?>

                        </div>
                        <div class="col-xs-6 hidden-xs">
                            <div class="toplinks">
                                <div class="links">
                                    <!-- Header Top Links -->
                                    <?php //
                                    //echo magikCreta_top_navigation(); ?>
                                    <!-- End Header Top Links -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">

                        <?php echo magikCreta_search_form(); ?>

                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 logo-block">
                        <!-- Header Logo -->
                        <div class="logo">
                            <?php magikCreta_logo_image(); ?>
                        </div>

                        <!-- End Header Logo -->

                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="top-cart-contain pull-right">
                            <?php
                            if (class_exists('WooCommerce')) :
                                $MagikCreta->magikCreta_mini_cart();
                            endif;
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <div class="mm-toggle-wrap">
                <div class="mm-toggle"><a class="mobile-toggle"><i class="fa fa-reorder"></i></a></div>

            </div>
            <div id="main-menu-new">
                <div class="nav-inner">

                    <?php echo magikCreta_main_menu(); ?>
                </div>

            </div>
        </div>
    </nav>
    <!-- end header -->
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