<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hight_Vending
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="content-container">
    <div class="content-width">
      <section class="about">
        <div class="site-branding">
          <h2>About the Company</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium neque sit amet hendrerit sagittis. Suspendisse massa est, euismod viverra dapibus in, laoreet consectetur nisi. Aenean aliquam, risus ut dictum eleifend, purus nunc molestie lorem, eget ultricies mi diam et nisi. Nam dignissim orci eu purus feugiat porta. Duis sit amet leo in leo ultricies interdum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque id euismod metus.</p>
        </div>
        <div class="vending-machine-graphic-container">
          <div class="vending-machine-graphic"></div>
        </div>
      </section>
      <section class="locations">
        <h2>Locations</h2>
        <p>Suspendisse massa est, euismod viverra dapibus in, laoreet consectetur nisi. Aenean aliquam, risus ut dictum eleifend, purus nunc molestie lorem, eget ultricies mi diam et nisi. Nam dignissim orci eu purus</p>
        <ul class="location-cards">
          <li class="card">
            <div class="location-img one"></div>
            <div class="card-content">
              <h3>Southwest Church Street<sup>Kansas City, KS</sup></h3>
            </div>
            <a href="#">View on Google Maps</a>
          </li>
          <li class="card">
            <div class="location-img two"></div>
            <div class="card-content">
              <h3>Fifth and Main<sup>Kansas City, KS</sup></h3>
            </div>
            <a href="#">View on Google Maps</a>
          </li>
          <li class="card">
            <div class="location-img three"></div>
            <div class="card-content">
              <h3>Lubbock Traffic Light<sup>Lubbock, TX</sup></h3>
            </div>
            <a href="#">View on Google Maps</a>
          </li>
        </ul>
      </section>
      <section class="contact">
        <h2>Questions or comments?<br>Contact us</h2>
        <form id="contact-form" class="contact-form" method="post" action="#">
          <div>
            <label for="Name" class="form-label">Your name</label>
            <input type="text" id="Name" name="Name" class="fcf-form-control" required>
          </div>
          <div>
            <label for="Email" class="form-label">Your email</label>
            <input type="email" id="Email" name="Email" class="fcf-form-control" required>
          </div>
          <div>
            <label for="Subject" class="form-label">Subject</label>
            <input type="text" id="Subject" name="Subject" class="form-subject" required>
          </div>
          <div>
            <label for="Message" class="form-label">Your message</label>
            <textarea id="Message" name="Message" class="form-message" rows="6" maxlength="3000" required></textarea>
          </div>
          <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>

        </form>
      </section>
    </div>
</main><!-- #main -->
<?php
get_footer();
