<?php

/**
 * The template part for displaying content
 *
 * @package Bretterwelten
 */

?>

  <article id="<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><a href="<?php the_permalink(); ?>" title="Artikel lesen: <?php the_title(); ?>"><?php the_title(); ?></a></h1>
    <div class="meta">
      <?php the_author(); ?> am
      <time pubdate="<?php the_time('c'); ?>"><?php the_time('j. F Y'); ?></time>
    </div>

<?php if (is_single() || is_page()): ?>

    <div class="post-content">
        <?php the_content(); ?>
    </div>

    <nav class="nav-page cf">
      <div class="nav-previous"><?php previous_post_link('%link', '%title &#9658;'); ?></div>
      <div class="nav-next"><?php next_post_link('%link', '&#9668; %title'); ?></div>
    </nav>

<?php else: ?>

    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div>

<?php endif; ?>

  </article>
