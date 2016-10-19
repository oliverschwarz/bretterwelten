<?php

/**
 * Header template
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
    echo ' &raquo; Ein Blog &uuml;ber Brettspiele';

?></title>

  <meta name="description" content="Ein Blog &uuml;ber Brettspiele, Spieleabende, die Spielebranche, Spielregeln und gemütliches Zusammensein. Hier werden Spiele besprochen und diskutiert.">
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
