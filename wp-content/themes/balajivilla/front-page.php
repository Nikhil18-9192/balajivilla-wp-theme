<?php

/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div id="home">
  <div class="overlay"></div>
  <div class="center-text">
    <div class="logo-img">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="">
      <h2>BALAJI VILLA</h2>
    </div>
    <h4>Balaji Villa is one of the famous luxurious 4 bedrooms bunglow in Panhala, Kolhapur. We provide Luxurious Bunglow Booking On Rent For Events , Functions ,Celebrations , Family Holiday. 4 A/C Master Bedrooms With Attach Toilets can accommodate up-to 25 people with Extra beds. Fully Equipped kitchen available. Provision for Party up-to 200 people in Garden area. </h4>
    <div class="contact-us">
      <h4>:: Contact Us ::</h4>
      <p>+91 93 7373 1717 | +91 89 7598 8689</p>
    </div>
    <div class="gallery-btn">
      <a href="#">VIEW GALLERY</a>
    </div>
  </div>


</div>
<div id="nearby"></div>
<?php get_footer(); ?>