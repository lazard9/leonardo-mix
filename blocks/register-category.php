<?php

/**
 * Registers a custom block category in the Gutenberg editor.
 *
 * @package Leonardo Vite
 */

add_filter( 'block_categories_all', function( $categories ) {

    // Adding a new category.
    $categories[] = array(
        'slug'  => 'leonardo-mix-mix',
        'title' => 'Leonardo Mix',
    );

    return $categories;
}, 10, 2 );
