<?php
/**
 * Template Name: sub Page pricing Template
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
   <section class="pricing-page">
   <div class="pages-title">
           <h1>Our Rates</h1>
         </div>
         <div class="rating">
             <div class="container">
                 <div class="main-text">
                 <h3>MovingWithLove Moving Company. Providing every customer with the most affordable rates in town! If it isn't with <span>love</span> it isn't right!</h3>
                 </div>
                
        <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="price-table-layout-1">
                            <div class="price-table-header">
                                <h3 class="heading text-uppercase">2 MEN & TRUCK</h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/truck.png" alt="img" class="pricing-table-img" />
                                <div class="price-value">
                                    <span class="currency">$</span>
                                     95<span class="hours">/hour</span> 
                                </div>
                            </div>
                            <div class="pricing-content">
                                 <p>includes loading, unloading & assembling/ disassembling furniture with 3 hour minimum packing materials added with additional cost.</p>
                            </div>
                            <a href="#" class="price-plan-btn">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="price-table-layout-1">
                            <div class="price-table-header">
                                <h3 class="heading text-uppercase">3 MEN & TRUCK</h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/truck.png" alt="img" class="pricing-table-img"/>
                                <div class="price-value">
                                    <span class="currency">$</span>
                                    142<span class="hours">/hour</span> 
                                </div>
                            </div>
                            <div class="pricing-content">
                                <p>includes loading, unloading & assembling/ disassembling furniture with 3 hour minimum packing materials added with additional cost</p>
                            </div>
                            <a href="#" class="price-plan-btn">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="price-table-layout-1">
                            <div class="price-table-header">
                                <h3 class="heading text-uppercase">4 MEN & TRUCK</h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/truck.png" alt="img" class="pricing-table-img" />
                                <div class="price-value">
                                    <span class="currency">$</span>
                                    190<span class="hours">/hour</span> 
                                </div>
                            </div>
                            <div class="pricing-content">
                                 <p>includes loading, unloading&assembling/ disassembling with 4 hour minimum. packing materials added with additional cost.</p>
                            </div>
                            <a href="#" class="price-plan-btn">Get Started</a>
                        </div>
                    </div>
                    </div>
                    <div class="other-charges">
                        <h4>Other Charges and Rules</h4>
                        <ul>
                            <li>We charge with 15-min increments after first 3 hrs.</li>
                            <li>Time starts when we arrive at a pickup location.</li>
                            <li>Time ends when truck is unloaded at a final location.</li>
                            <li>Double-drive time: it's driving time between pickup and delivery locations doubled when the distance is more than 5 miles.</li>
                            <li>Total time = loading time + double-drive time + unloading time.</li>
                            <li>Total cost = $50 travel fee + hourly rate x time.</li>
                            <li>extra fee for the use of moving blankets and wardrobe boxes.</li>
                            <li>extra fee for the use of shrink-wrap and tape.</li>
                            <li>+ 5% with a card payment.</li>
                            <li>We do not accept any checks.</li>
                            <li>Tips are not included, not required but highly appreciated.</li>
                        </ul>
                    </div>
                    </div>
                    </div>
   </section>
<?php get_footer(); ?>