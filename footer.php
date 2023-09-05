<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wintint
 */

?>

<footer>
  <div id="footer-wrapper" class="wrapper">
    <!-- <img id="footer-logo" src="images/footer-logo.png" /> -->
    <span id="footer-logo"></span>
    <div id="email-div">
      <input placeholder="E-mail">
      <button class="button">Let's Talk</button>
    </div>
    <div id="footer-info">
      <div>
        <h2>Contact</h2>
        <p>(252) 373-0523</p>
        <p>Hitek@gmail.com</p>
        <p>www.hitekflim.com</p>
      </div>
      <div>
        <h2>Us</h2>
        <p>1433-A thorne Ave S. Wilson,</p>
        <p>NC 27896</p>
      </div>
      <div>
        <h2>WinTint</h2>
        <p>Monday - Thursday: 10:00am - 7:00pm</p>
        <p>Friday: Closed</p>
        <p>Saturday: 10:00am - 7:00pm</p>
        <p>Sunday: 1:00pm - 9:00pm</p>
      </div>
    </div>
    <div id="socials-div">
      <a href="#" class="fa fa-facebook socials-icons"></a>
      <a href="#" class="fa fa-instagram socials-icons"></a>
      <a href="#" class="fa fa-youtube socials-icons"></a>
    </div>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>