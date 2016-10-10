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

?><!doctype html>
<html>
<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php

    wp_title('&laquo;', true, 'right');
    bloginfo('name');
    echo ' &raquo; ';
    bloginfo('description');

?></title>

  <meta name="viewport" content="width=device-width,minimum-scale=1.0">
  <meta name="referrer" content="no-referrer">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<?php wp_head(); ?>

</head>
<body>

<header role="banner">

    <hgroup>
        <h1><a href="<?php bloginfo('url'); ?>">Bretterwelten</a></h1>
        <h2><?php bloginfo('description'); ?></h2>
    </hgroup>

</header>

<hr>

<?php if (have_posts()): ?>

<main>

<?php while (have_posts()): the_post(); ?>

  <article id="<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><a href="<?php the_permalink(); ?>" title="Artikel lesen: <?php the_title(); ?>"><?php the_title(); ?></a></h1>
    <time pubdate="<?php the_time('c'); ?>"><?php the_time('j. F Y'); ?></time>

<?php if (is_single() || is_page()): ?>

    <div class="post-content">
        <?php the_content(); ?>
    </div>

<?php else: ?>

    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div>

<?php endif; ?>

  </article>

<?php endwhile; ?>

</main>

<?php endif; ?>

<hr>

<aside>
  <ul>
    <li class="cf">
      <h3>Blogroll</h3>
      <ul>
        <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
      </ul>
    </li>
    <li class="cf">
      <h3>Themen</h3>
      <ul>
        <?php wp_list_categories('title_li='); ?>
      </ul>
    </li>
  </ul>
</aside>

<hr class="cf">

<footer>
  <p><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">CC-BY-SA 4.0</a>, Oliver Schwarz, 2016</p>
  <?php wp_nav_menu(array('theme_location' => 'standards', 'container' => '')); ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>