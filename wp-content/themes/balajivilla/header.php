<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?> /assets/css/owl.carousel.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet" /> -->

</head>

<body <?php body_class(); ?>>
  <div class="nav-menu-wrapper">
    <?php
    wp_nav_menu(
      array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary',
        'items_wrap'  => '<ul id="%1$s" class="nav-menu">%3$s</ul>'
      )
    );
    ?>
  </div>