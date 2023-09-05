<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wintint
 */

get_header();
?>

<main id="primary" class="site-main">

  <!-- Start Homepage content -->

  <div id="main-banner">
    <!-- <img src="images/banner.jpg" alt="window-tinting" /> -->
  </div>

  <div class="wrapper">
    <section id="home-about">
      <!-- <img id="blog-one" src="/images/blog2.png" /> -->
      <div id="blog-one"></div>

      <div id="home-about-div">
        <!-- <h1>HERE FOR ALL OF YOUR WINDOW TINTING NEEDS</h1> -->
        <!-- <img id="window-tinting-needs-title" src="images/window-tinting-needs.png" /> -->
        <span id="window-tinting-needs-title"></span>
        <span>Eli's window tinting proudly provides quality window tinting
          services to customers accross central North Carolina. Our tinting
          specialties include automotive and architectural window tinting. We
          understand the desire to have quality tinted windows to both ensure
          your privacy and to help reduce wasted utility costs from heat
          exposure in your home or in your place of business. We proudly
          deliver prompt, five star services
        </span>
        <button class="button">Read More</button>
      </div>
    </section>

    <section id="automotive">
      <div>
        <!-- <h1>AUTOMOTIVE WINDOW TINT</h1> -->
        <!-- <img id="automotive-tint-title" src="images/automotive_window_tint.png" /> -->
        <span id="automotive-tint-title"></span>
        <span>
          Eli's window tinting proudly provides quality window tinting
          services to customers accross central North Carolina. Our tinting
          specialties include automotive and architectural window tinting. We
          understand the desire to have quality tinted windows to both ensure
          your privacy and to help reduce
        </span>
        <button class="button">Read More</button>
      </div>
    </section>

    <section id="architectural">
      <div>
        <!-- <h1>ARCHITECTURAL WINDOW TINT</h1> -->
        <!-- <img id="architectural-window-tint-title" src="/images/architectural_window_tint.png" /> -->
        <span id="architectural-window-tint-title"></span>
        <span>
          Eli's window tinting proudly provides quality window tinting
          services to customers accross central North Carolina. Our tinting
          specialties include automotive and architectural window tinting. We
          understand the desire to have quality tinted windows to both ensure
          your privacy and to help reduce wasted utility costs from heat
          exposure in your home or in your place of business. We proudly
          deliver prompt, five star services
        </span>
        <button class="button">Read More</button>
      </div>
    </section>

    <section id="paint-protection">
      <div>
        <!-- <h1>PAINT PROTECTION FILM</h1> -->
        <!-- <img id="paint-protection-film-title" src="images/paint_protection_flim.png" /> -->
        <span id="paint-protection-film-title"></span>
        <span>
          Eli's window tinting proudly provides quality window tinting
          services to customers accross central North Carolina. Our tinting
          specialties include automotive and architectural window tinting. We
          understand the desire to have quality tinted windows to both ensure
          your privacy and to help reduce wasted utility costs from heat
          exposure in your home or in your place of business. We proudly
          deliver prompt, five star services
        </span>
        <button class="button">Read More</button>
      </div>
    </section>

    <section id="reviews">
      <!-- <h1>CHECK OUT OUR REVIEWS</h1> -->
      <!-- <img id="reviews-title" src="images/check_out_our_reviews.png" /> -->
      <span id="reviews-title"></span>
      <div id="review-container">

        <div class="review-div">
          <div>
            <span>Eli has tinted more than 5 vehicles for me alone, and some of
              those more than once! Outstanding professionalism every time we
              meet and be absolute best in the business. Highly recommend to
              everyone I meet, even some strangers in public ask about his
              work! Couldn't recomment enough!
            </span>
            <span>Austin/ Google Review</span>
            <span class="rating"></span>
          </div>
          <!-- <img class="review-img" src="/images/review-person-one.png" alt="austin-img" /> -->
          <span class="review-img" id="review-person-one"></span>
        </div>

        <div class="review-div">
          <div>
            <span>Eli has tinted more than 5 vehicles for me alone, and some of
              those more than once! Outstanding professionalism every time we
              meet and be absolute best in the business. Highly recommend to
              everyone I meet, even some strangers in public ask about his
              work! Couldn't recomment enough!
            </span>
            <span>Austin/ Google Review</span>
            <span class="rating"></span>
          </div>
          <!-- <img class="review-img" src="images/review-person-two.png" alt="austin-img" /> -->
          <span class="review-img" id="review-person-two"></span>
        </div>

        <!-- <div class="review-div">
            <div>
              <span
                >Eli has tinted more than 5 vehicles for me alone, and some of
                those more than once! Outstanding professionalism every time we
                meet and be absolute best in the business. Highly recommend to
                everyone I meet, even some strangers in public ask about his
                work! Couldn't recomment enough!
              </span>
              <span>Austin/ Google Review</span>
              <span class="rating"></span>
            </div>
            <img src="images/review-person-one.png" alt="austin-img" />
          </div> -->
    </section>
  </div>
  <!-- End Homepage content -->

</main><!-- #main -->

<?php
get_footer();
?>