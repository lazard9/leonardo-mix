<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leonardo Vite
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto flex flex-wrap px-5 xl:px-12 py-24">

        <div class="w-full md:w-3/4 md:pe-8">
            <?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>

        <div class="w-full md:w-1/4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</main><!-- #main -->

<?php
get_footer();
