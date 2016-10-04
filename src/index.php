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
</head>
<body>
  
  <p>index.php</p>

</body>
</html>