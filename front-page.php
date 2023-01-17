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
          <h2>About Hight Vending Services</h2>
          <?php
          $hight_vending_description = get_bloginfo('description', 'display');
          if ($hight_vending_description || is_customize_preview()) :
          ?>
            <p class="site-description"><?php echo $hight_vending_description; ?></p>
          <?php endif; ?>
        </div>
        <div class="vending-machine-graphic-container">
          <div class="vending-machine-graphic"></div>
        </div>
      </section>
      <section class="contact">
        <h2><small>Questions or comments?</small><br>Contact us</h2>
        <form id="contact-form" class="contact-form" method="post" action="#">
          <div class="form-group">
            <div>
              <label for="Name" class="form-label">First name <span class="required"></span></label>
              <input type="text" id="Name" name="Name" required>
            </div>
            <div>
              <label for="Name" class="form-label">Last name</label>
              <input type="text" id="Name" name="Name" required>
            </div>
          </div>
          <div class="form-group">
            <div>
              <label for="Email" class="form-label">Your email</label>
              <input type="email" id="Email" name="Email" class="" required="true">
            </div>
          </div>
          <div class="form-group">
            <div>
              <label for="Business" class="form-label">Business</label>
              <input type="text" id="Business" name="Business">
            </div>
          </div>
          <div class="form-group">
            <div>
              <label for="Phone" class="form-label">Phone</label>
              <input type="text" id="Phone" name="Phone">
            </div>
          </div>
          <div class="form-group">
            <div>
              <label for="Subject" class="form-label">Subject</label>
              <input type="text" id="Subject" name="Subject" class="form-subject" required>
            </div>
          </div>
          <div class="form-group">
            <div>
              <label for="Message" class="form-label">Your message</label>
              <textarea id="Message" name="Message" class="form-message" rows="6" maxlength="3000" required></textarea>
            </div>
          </div>
          <button type="submit" id="fcf-button">Submit</button>

        </form>
      </section>
    </div>
</main><!-- #main -->
<?php
get_footer();
