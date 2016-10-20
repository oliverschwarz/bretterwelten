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

<?php if (is_single() || is_page()): ?>

        <nav class="nav-page cf">
          <div class="nav-previous"><?php previous_post_link('%link', '%title &#9658;'); ?></div>
          <div class="nav-next"><?php next_post_link('%link', '&#9668; %title'); ?></div>
        </nav>

<?php endif; ?>

  </article>
