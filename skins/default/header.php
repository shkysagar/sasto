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

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">CompanyName</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>




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
                                    <?php echo magikCreta_top_navigation(); ?>
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