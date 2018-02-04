<?php
/*
Plugin Name: Film Plugin
Description: display hook.
Author: Eugene
Text Domain: film-plugin
Domain Path: /languages
Version: 1.0
*/

if ( ! function_exists( 'display_detailed_info' ) ) {
    function display_detailed_info( $content ) {
        $args = array( 
            'before' =>'<div class="detailed-info">',
            'after'  =>'</div>'
        );
        delete_post_meta_by_key( 'post_views_count' );
        $custom_fields = the_meta();
        $tax = get_the_taxonomies();
        $tax_content = "<div class='tax-country'>" . $tax['Country'] . "</div>" . "<div class='tax-genre'>" . $tax['Genre'] . "</div>";
        return $custom_fields . $content . $tax_content;
    }
}

add_action("the_content", "display_detailed_info");
