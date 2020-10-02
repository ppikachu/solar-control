<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    /**
     * Primary Nav Menu arguments
     * @return array
     */
    public function primarymenu()
    {
        $args = array(
        'theme_location'    => 'primary_navigation',
        'menu_class'        => 'nav navbar-nav text-center pt-4 pb-5 pb-lg-0 pt-lg-0',
        'depth'             => 2,
        'walker'            => new \App\wp_bootstrap4_navwalker(),
        );
        return $args;
    }

    // mis funciones

    public static function headerpagCorto($size = "large", $post_id = "post")
    {
        global $post;
        if ("post" === $post_id) {
            $post_id = $post->ID;
        }
        $poster = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), $size, false);
        $lineas = \App\asset_path('/images/Header_seccion_lineas.png');
        echo '<div class="header_pag_corto alignfull align-items-center container-header d-flex mb-4 mb-md-5 py-5">';
        echo '<img class="foto_header" src="'.$poster[0].'">';
        echo '<img class="lineas_header" src="'.$lineas.'">';
        echo '<div class="container pt-5 text-white text-shadow mt-n4 animated fadeInUp">';
        echo '<h1 class="">'.get_the_title().'</h1>';
        echo get_field('extracto');
        echo '</div>';
        echo '</div>';
    }
}
