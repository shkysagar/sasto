<?php global $creta_Options; ?>

<!--banner section-->
<section class="homepage-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="banner-content d-flex justify-content-center align-items-center">
                        <div class="">
                            <h2 class="text-center text-white"><?php echo do_shortcode("[product_count]"); ?>+ Premium
                                Website Templates<br/>
                                That Perfectly Fit Your Business</h2>
                            <p class="text-center text-white">WordPress themes, web templates and more. Brought to you
                                by the largest global community of creatives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="searchbox_home">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php echo magikCreta_search_form(); ?>
            </div>

            <div class="col-md-12">
                <nav>
                    <div class="nav justify-content-center nav-tabs browse-by" id="nav-tab" role="tablist">
                        Or browse by category:
                        <?php
                        $get_featured_cats = array(
                            'taxonomy' => 'product_cat',
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'hide_empty' => '1',
                            'include' => $cat_array
                        );
                        $all_categories = get_categories($get_featured_cats);
                        $j = 1;
                        foreach ($all_categories as $cat) {
                            $cat_id = $cat->term_id;
                            $cat_link = get_category_link($cat_id);
                            { ?>

                                <a href="<?php echo esc_url(get_term_link($cat)); ?>" class="nav-item  <?php echo $cat->slug; ?>">
                                    <?php echo $cat->name; ?>
                                </a>
                            <?php }
                            $j++;
                        }
                        // Reset Post Data
                        wp_reset_query();
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php magikCreta_featured_products(); ?>
<?php //magikCreta_home_page_banner(); ?>
<?php //magikCreta_hotdeal_product(); ?>
<?php magikCreta_new_products(); ?>
<?php //magikCreta_bestseller_products(); ?>
<?php //magikCreta_recommended_products();?>
<?php //magikCreta_home_sub_banners ();?>
<?php //magikCreta_home_blog_posts();?>
<?php //magikCreta_home_customsection();?>
  
  