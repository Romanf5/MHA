<?php
/*
 * Template Name: Contact Template
 */
?>

<?php get_header(); ?>

<main id="main" class="contact" role="main" style="background: url('<?php echo CFS()->get( 'contact_background' ); ?>') no-repeat; background-size: cover; background-position: 50% 50%">

    <div class="main-container">
      <div class="content">
        <h1><?php echo CFS()->get( 'contact_headline' ); ?></h1>
        <div class="bottom-wrapper">
          <div class="form-wrapper">
              <?php echo do_shortcode('[contact-form-7 id="30" title="Contact"]') ?>
          </div>
        </div>
      </div>
      <div class="content-success">
        <h2>thank you for message</h2>
        <p><a href="/"><span class="icon-left-arrow"></span>Back home</a></p>
      </div>
      <ul class="social-holder">
        <li>
          <a href="/contact/"><span class="icon icon-contact"></span></a>
        </li>
        <li>
          <a href="#"><span class="icon icon-twitter"></span></a>
        </li>
        <li>
          <a href="#"><span class="icon icon-facebook"></span></a>
        </li>
      </ul>
    </div>

</main>
<?php get_footer(); ?>
