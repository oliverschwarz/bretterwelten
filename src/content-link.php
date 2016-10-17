<?php

/**
 * The template part for displaying a link post
 *
 * @package Bretterwelten
 */

?>

  <article id="<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>

    <div class="post-content">
        <?php the_content(); ?>
    </div>

  </article>