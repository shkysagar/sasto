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
            <div class="col-8 offset-2">
                <?php echo magikCreta_search_form(); ?>
            </div>
            <div class="col-12">
                <?php if (isset($creta_Options['enable_home_new_products']) && !empty($creta_Options['enable_home_new_products']) && !empty($creta_Options['home_newproduct_categories'])) {
                    ?>
                    <nav>
                        <div class="nav justify-content-center nav-tabs browse-by" id="nav-tab" role="tablist">
                            Or browse by category:

                            <?php
                            $catloop = 1;
                            foreach ($creta_Options['home_newproduct_categories'] as $category) {
                                $term = get_term_by('id', $category, 'product_cat', 'ARRAY_A');

                                ?>

                                <a class="nav-item <?php if ($catloop == 1) { ?> active <?php } ?>" id="nav-home-tab"
                                   data-toggle="tab" href="#nav-home-<?php echo esc_html($category) ?>" role=" tab"
                                   aria-controls="nav-home-<?php echo esc_html($category) ?>" aria-selected="true">
                                    <?php echo esc_html($term['name']); ?>
                                </a>
                                <?php
                                $catloop++;
                            } ?>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <?php
                        $contentloop = 1;
                        foreach ($creta_Options['home_newproduct_categories'] as $catcontent) {
                            $term = get_term_by('id', $catcontent, 'product_cat', 'ARRAY_A');
                            ?>
                            <div class="tab-pane fade <?php if ($contentloop == 1) { ?> active show<?php } ?>"
                                 id="nav-home-<?php echo esc_html($catcontent); ?>" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <?php

                                    $args = array(
                                        'post_type' => 'product',
                                        'post_status' => 'publish',
                                        'ignore_sticky_posts' => 1,
                                        'posts_per_page' => 4,

                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                        'tax_query' => array(

                                            array(
                                                'taxonomy' => 'product_cat',
                                                'field' => 'term_id',
                                                'terms' => $catcontent
                                            )
                                        ),


                                    );

                                    $loop = new WP_Query($args);

                                    if ($loop->have_posts()) {
                                        while ($loop->have_posts()) : $loop->the_post();
                                            magikCreta_productitem_template();
                                        endwhile;
                                    } else {
                                        esc_html__('No products found', 'creta');
                                    }

                                    wp_reset_postdata();
                                    $contentloop++;

                                    ?>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php //magikCreta_home_page_banner(); ?>
<?php //magikCreta_hotdeal_product(); ?>
<?php //magikCreta_new_products(); ?>
<?php //magikCreta_bestseller_products(); ?>
<?php //magikCreta_featured_products(); ?>
<?php //magikCreta_recommended_products();?>
<?php //magikCreta_home_sub_banners ();?>
<?php //magikCreta_home_blog_posts();?>
<?php //magikCreta_home_customsection();?>
  
  