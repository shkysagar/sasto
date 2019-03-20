<?php global $creta_Options; ?>

<div id="magik-slideshow" class="magik-slideshow">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if (isset($creta_Options['enable_home_gallery']) && $creta_Options['enable_home_gallery'] && isset($creta_Options['home-page-slider']) && !empty($creta_Options['home-page-slider'])) { ?>

                    <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                            <ul>
                                <?php foreach ($creta_Options['home-page-slider'] as $slide) : ?>
                                    <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                                        data-thumb='<?php echo esc_url($slide['thumb']); ?>'>
                                        <img
                                            src="<?php echo esc_url($slide['image']); ?>"
                                            data-bgposition='left top' data-bgfit='cover'
                                            data-bgrepeat='no-repeat'
                                            alt="<?php echo esc_attr($slide['title']); ?>"/> <?php echo htmlspecialchars_decode($slide['description']); ?>
                                    </li>

                                <?php endforeach; ?>


                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>

                <?php } ?>
            </div>
            <div class="col-md-3 hot-deal">

                <?php magikCreta_hotdeal_product(); ?>

            </div>


        </div>
    </div>

</div>

<hr/>

<?php //magikCreta_home_page_banner(); ?>
<?php magikCreta_new_products();?>
<?php magikCreta_bestseller_products(); ?>
<?php magikCreta_featured_products();?>
<?php magikCreta_recommended_products();?>
<?php magikCreta_home_sub_banners ();?>
<?php magikCreta_home_blog_posts();?>
<?php magikCreta_home_customsection();?> 
  
  