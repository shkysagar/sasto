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

    <!-- end Slider -->
    <script type='text/javascript'>
        jQuery(document).ready(function () {
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 915,
                startheight: 450,
                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,
                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',
                touchenabled: 'on',
                onHoverStop: 'on',
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                spinner: 'spinner0',
                keyboardNavigation: 'off',
                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',
                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: 'off',
                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
    </script>
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
  
  