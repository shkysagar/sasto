<?php


if (!function_exists('magikCreta_main_menu')) {
    function magikCreta_main_menu()
    {
        global $creta_Options;

        $html = '';
        ob_start();
        if (has_nav_menu('main_menu')) :
            $args = array(
                'container' => '',
                'menu_class' => 'navbar-nav mr-auto' . $mcls,
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'fallback_cb' => false,
                'walker' => new MagikCreta_top_navwalker
            );

            $args['theme_location'] = 'main_menu';

            wp_nav_menu($args);
        endif;

        $output = str_replace('&nbsp;', '', ob_get_clean());

        if ($output && $html) {

            $output = preg_replace('/<\/ul>$/', $html . '</ul>', $output, 1);
        }

        return $output;
    }
}



?>