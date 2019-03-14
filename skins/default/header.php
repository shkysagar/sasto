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
<div id="page" class="page">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid full-col">
            <?php magikCreta_logo_image(); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdowna">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Browse Templates
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php

                            $taxonomy = 'product_cat';
                            $orderby = 'name';
                            $show_count = 0;      // 1 for yes, 0 for no
                            $pad_counts = 0;      // 1 for yes, 0 for no
                            $hierarchical = 1;      // 1 for yes, 0 for no
                            $title = '';
                            $empty = 0;

                            $args = array(
                                'taxonomy' => $taxonomy,
                                'orderby' => $orderby,
                                'show_count' => $show_count,
                                'pad_counts' => $pad_counts,
                                'hierarchical' => $hierarchical,
                                'title_li' => $title,
                                'hide_empty' => $empty
                            );
                            $all_categories = get_categories($args);
                            foreach ($all_categories as $cat) {
                                if ($cat->category_parent == 0) {
                                    $category_id = $cat->term_id;
                                    echo '<a  class="dropdown-item" href="' . get_term_link($cat->slug, 'product_cat') . '">' . $cat->name . '</a>';

                                }
                            }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="btn-group" role="group" aria-label="Basic example">
                <?php
                if (class_exists('WooCommerce')) :
                    $MagikCreta->magikCreta_mini_cart();
                endif;
                ?>

                <?php echo magikCreta_msg(); ?>


            </div>

            <div class=" d-lg-none d-md-none mobile-display">
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <?php

                        $taxonomy = 'product_cat';
                        $orderby = 'name';
                        $show_count = 0;      // 1 for yes, 0 for no
                        $pad_counts = 0;      // 1 for yes, 0 for no
                        $hierarchical = 1;      // 1 for yes, 0 for no
                        $title = '';
                        $empty = 0;

                        $args = array(
                            'taxonomy' => $taxonomy,
                            'orderby' => $orderby,
                            'show_count' => $show_count,
                            'pad_counts' => $pad_counts,
                            'hierarchical' => $hierarchical,
                            'title_li' => $title,
                            'hide_empty' => $empty
                        );
                        $all_categories = get_categories($args);
                        foreach ($all_categories as $cat) {
                            if ($cat->category_parent == 0) {
                                $category_id = $cat->term_id;
                                echo '<li class="nav-item"><a  class="dropdown-item" href="' . get_term_link($cat->slug, 'product_cat') . '">' . $cat->name . '</a></li>';

                            }
                        }
                        ?>
                    </ul>
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
