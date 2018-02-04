<?php

/* Film post type addition */
if ( ! function_exists( 'film_post_type' ) ) {
    function film_post_type() {
        register_post_type( 'Films',
            array(
                'labels' => array(
                'name' => __( 'Films' ),
                'singular_name' => __( 'Films' )
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-video-alt2',
                'taxonomies' => array( 'Genre', 'Country', 'Year', 'Actors' ),
                'supports' => array( 
                    'title', 
                    'editor', 
                    'comments', 
                    'thumbnail', 
                    'custom-fields'
                  )
            )
        );
    }
}

/* Taxonomy registration*/
if ( ! function_exists( 'taxonomy_registration' ) ) {
    function taxonomy_registration() {
    /* Genre taxonomy */
        register_taxonomy(
            'Genre',
            'Films',
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Жанры',
                    'singular_name' => 'Жанр',
                    'all_items' => 'Все жанры',
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'add_new_item' => 'Добавить новый жанр',
                    'menu_name' => 'Жанр'
                ),
                'public' => true, 
                'show_in_nav_menus' => true,
                'show_ui' => true,
                'show_tagcloud' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array(
                    'slug' => 'genre', 
                    'hierarchical' => false 
                ),
            )
        );
/* Country taxonomy */
        register_taxonomy(
            'Country',
            'Films',
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Страна',
                    'singular_name' => 'Страна',
                    'all_items' => 'Все страны',
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'add_new_item' => 'Добавить новую страну',
                    'menu_name' => 'Страна'
                ),
                'public' => true,
                'show_in_nav_menus' => true,
                'show_ui' => true,
                'show_tagcloud' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array(
                    'slug' => 'country',
                    'hierarchical' => false
                ),
            )
        );
/* Year taxonomy */
        register_taxonomy(
            'Year',
            'Films',
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Год',
                    'singular_name' => 'Год',
                    'all_items' => 'Все',
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'add_new_item' => 'Добавить год',
                    'menu_name' => 'Год'
                ),
                'public' => true,
                'show_in_nav_menus' => true,
                'show_ui' => true,
                'show_tagcloud' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array(
                    'slug' => 'year',
                    'hierarchical' => false
                ),
            )
        );
/* Actors taxonomy */
        register_taxonomy(
            'Actors',
            'Films',
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Актеры',
                    'singular_name' => 'Актеры',
                    'all_items' => 'Все актеры',
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'add_new_item' => 'Добавить актера',
                    'menu_name' => 'Актеры'
                ),
                'public' => true,
                'show_in_nav_menus' => true,
                'show_ui' => true,
                'show_tagcloud' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array(
                    'slug' => 'actors',
                    'hierarchical' => false
                ),
            )
        );
    }
}

if ( ! function_exists( 'shortcode_display' ) ) {
    function shortcode_display() {
        $args = array(
            'posts_per_page'   => 5,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'films'
        );
        $film_posts = get_posts( $args );
        foreach ( $film_posts as $value ) {
            setup_postdata( $value );
            ?>
  
            <h2><a href="<?php echo $value->post_name; ?>"><?php echo $value->post_title; ?></a></h2>
            <?php the_content(); ?>
        
            <?php
        }
        wp_reset_postdata(); 
        }
    }


add_shortcode( 'five_films', 'shortcode_display' );
add_action( 'init', 'taxonomy_registration' );
add_action( 'init', 'film_post_type' );