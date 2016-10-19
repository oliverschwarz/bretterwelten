<?php

/**
 * Sidebar
 *
 * @package Bretterwelten
 */

?>

<aside>
  <ul>
    <li class="cf">
      <h3>Blogroll</h3>
      <ul>
        <?php wp_list_bookmarks('title_li=&categorize=0&category=2'); ?>
      </ul>
    </li>
    <li class="cf">
      <h3>Themen</h3>
      <ul>
        <?php wp_list_categories('title_li='); ?>
      </ul>
    </li>
    <li class="cf">
      <h3>Archiv</h3>
      <ul>
        <?php wp_get_archives('title_li='); ?>
      </ul>
    </li>
  </ul>
</aside>

<hr class="cf">
