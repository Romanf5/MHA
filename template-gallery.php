<?php
/*
 * Template Name: Gallery Template
 */
?>

<?php get_header(); ?>
  <main id="main" class="gallery-page" role="main">

    <section class="gallery">

      <div class="arrow down"></div>

      <div class="gallery-wrapper">
        <h1><?php echo CFS()->get( 'gallery_headline' ); ?></h1>
        <div class="ornament">
          <span class="left"></span>
          <div class="ornament__outer">
            <div class="ornament__inner"></div>
          </div>
          <span class="right"></span>
        </div>

        <div class="target-block">

          <div class="target-block__image"></div>

          <div class="target-block__description">
            <div class="content">
              <h2 id="target-event"></h2>
              <p id="target-date"></p>
            </div>
            <a href="#" id="target-link" class="main-button first-button" download="image">
              <span class="icon-download icon-left"></span><span class="label">Free download</span>
            </a>
          </div>

        </div>

        <div class="slider-wrap">
          <div class="previous"><span class="icon-back"></span></div>

          <div class="images-holder">
              <?php
              $slider = CFS()->get('gallery_loop');
              if ($slider){
                  foreach ($slider as $slider_item) { ?>
                    <div class="slider-image">
                      <div class="outer-square">
                        <div class="inner-square"><span>View</span></div>
                      </div>
                      <img class="image" src="<?php echo $slider_item['gallery_image'] ?>" alt="gallery-image" data-event="<?php echo $slider_item['event']?>" data-date="<?php echo $slider_item['date']?>">
                    </div>
                  <?php }
              }
              ?>
          </div>

          <div class="next-slide"><span class="icon-next"></span></div>
        </div>

      </div>

    </section>

  </main>
<?php get_footer(); ?>