<?php

/**
 * Main index file
 *
 * This is the main index file for the Wordpress engine.
 * Later on (according to the Wordpress template routing
 * rules) this file should never be called.
 *
 * @package Bretterwelten
 */

get_header();

if (have_posts()): ?>

<main>

<?php while (have_posts()): the_post();

  get_template_part('content', get_post_format());

endwhile; ?>

</main>

<?php endif; ?>

<hr>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
