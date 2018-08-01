<?php
/*
 * Template Name: Home Template
 */
?>

<?php get_header(); ?>

  <main id="main" class="page-main" role="main">
    <!----------------------------------- Home ----------------------------------->
    <section id="home" class="home">
        <?php

        while (have_posts()) : the_post();

            get_template_part('template-parts/slider');

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
      <div class="main-container">
        <ul class="social-holder">
          <li>
            <a href="#contact" class="link-item"><span class="icon icon-contact"></span></a>
          </li>
          <li>
            <a href="#" class="link-item"><span class="icon icon-twitter"></span></a>
          </li>
          <li>
            <a href="#" class="link-item"><span class="icon icon-facebook"></span></a>
          </li>
        </ul>
      </div>
    </section>
    <!-------------------------------- Statistic --------------------------------->
    <section id="statistic" class="home statistic page-template-template-statistic">
        <?php
        $args = [
            'post_type' => 'Statistic',
            'posts_per_page' => 1,
            'order' => 'DESC'
        ];

        query_posts($args);

        while (have_posts()) : the_post();

        endwhile; // End of the loop.
        ?>
      <!--<section class="banner" style="background: url('<?php /*echo CFS()->get( 'statistic_background' ); */?>') no-repeat; background-size: cover; background-position-x: center">
        <h1><?php /*echo CFS()->get( 'statistic_headline' ); */?></h1>
        <div class="arrow"></div>
      </section>-->
      <section class="content-section">
        <div class="background-block"></div>
        <div class="table-wrap">
          <div class="top table__headline table-radius">
            <p><?php echo CFS()->get( 'table_headline_top' ); ?></p>
          </div>
          <table class="main-table border" id="target-table">
            <tr class="head">
              <th class="first">Starts</th><th>Firsts</th><th>Seconds</th><th>Thirds</th><th class="fourth">Earnings</th>
            </tr>
              <?php
/*              $table_year = CFS()->get('year_statistics');
              if ($table_year){
                  foreach ($table_year as $table_item) { */?><!--
                    <tr>
                      <td><?php /*echo $table_item['stars'] */?></td>
                      <td><?php /*echo $table_item['firsts'] */?></td>
                      <td><?php /*echo $table_item['seconds'] */?></td>
                      <td><?php /*echo $table_item['thirds'] */?></td>
                      <td><?php /*echo $table_item['earnings'] */?></td>
                    </tr>
                  --><?php /*}
              }
              */?>
          </table>
          <div class="table bottom">
            <div class="table__headline">
              <p><?php echo CFS()->get( 'table_headline_bottom' ); ?></p>
            </div>
            <table class="main-table">
              <tr class="head">
                <th class="first">Starts</th><th>Firsts</th><th>Seconds</th><th>Thirds</th><th class="fourth">Earnings</th>
              </tr>
                <?php
                $table_statistics = CFS()->get('career_statistics');
                if ($table_statistics){
                    foreach ($table_statistics as $statistics_item) { ?>
                      <td><?php echo $statistics_item['stars'] ?></td>
                      <td><?php echo $statistics_item['firsts'] ?></td>
                      <td><?php echo $statistics_item['seconds'] ?></td>
                      <td><?php echo $statistics_item['thirds'] ?></td>
                      <td><?php echo $statistics_item['earnings'] ?></td>
                    <?php }
                }
                ?>
            </table>
          </div>
        </div>
        <h3 class="headline">bio</h3>
        <div class="biography-wrap">
          <div class="biography-block">
            <div class="ornament">
              <div class="ornament__outer">
                <div class="ornament__inner"></div>
              </div>
            </div>
              <?php
              while ( have_posts() ) : the_post(); ?>
                <div class="entry-content-page">
                    <?php the_content(); ?>
                </div>
              <?php
              endwhile;
              wp_reset_query();
              ?>
            <div class="hidden-block">
                <?php
                $args = [
                    'post_type' => 'Statistic',
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ];

                query_posts($args);

                while (have_posts()) : the_post();

                endwhile; // End of the loop.
                ?>
              <p><?php echo CFS()->get( 'hidden_text' ); ?></p>
            </div>
            <div class="button-wrapper">
              <button id="clicked" class="toggle-button">
                <span class="text">read full bio</span>
                <i class="icon-back"></i>
              </button>
            </div>
          </div>
        </div>
      </section>
      <section class="news">
        <div class="ornament border">
          <div class="ornament__outer">
          </div>
        </div>
        <h3 class="headline"><?php echo CFS()->get( 'news_headline' ); ?></h3>
        <div class="ornament">
          <span class="left"></span>
          <div class="ornament__outer">
            <div class="ornament__inner"></div>
          </div>
          <span class="right"></span>
        </div>
        <div class="news-holder">
          <div class="news-wrapper">
            <h2>The Hennig Team in the News</h2>
            <div class="news-holder__item first">
                <?php
                $args = [
                    'post_type' => 'News',
                    'posts_per_page' => 10,
                    'order' => 'DESC'
                ];

                query_posts($args);

                while (have_posts()) : the_post();

                    get_template_part('template-parts/news', 'posts');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
          </div>
          <div class="news-holder__item">
              <?php echo do_shortcode('[do_widget id=do-etfw-3]') ?>
          </div>
          <!--        <a class="twitter-timeline" href="https://twitter.com/Hennigracing?ref_src=twsrc%5Etfw">Tweets by Hennigracing</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
        </div>
        <div class="ornament middle">
          <div class="ornament__outer">
            <div class="ornament__inner"></div>
          </div>
        </div>
      </section>
    </section>
    <!--------------------------------- Gallery ---------------------------------->
    <section class="gallery page-template-template-gallery">

      <div class="arrow down"></div>

        <?php
        $args = [
            'post_type' => 'Image gallery',
            'posts_per_page' => 1,
            'order' => 'DESC'
        ];

        query_posts($args);

        while (have_posts()) : the_post();

        endwhile; // End of the loop.
        ?>

      <div class="gallery-wrapper">
        <h3><?php echo CFS()->get( 'gallery_headline' ); ?></h3>
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
            <div class="content-block">
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
    <!--------------------------------- Contact ---------------------------------->
      <?php
      $args = [
          'post_type' => 'Contact',
          'posts_per_page' => 1,
          'order' => 'DESC'
      ];

      query_posts($args);

      while (have_posts()) : the_post();

      endwhile; // End of the loop.
      ?>
    <section class="contact" id="contact" style="background: url('<?php echo CFS()->get( 'contact_background' ); ?>') no-repeat; background-size: cover; background-position: 50% 50%">
      <div class="main-container">
        <div class="content">
          <h3><?php echo CFS()->get( 'contact_headline' ); ?></h3>
          <div class="bottom-wrapper">
            <div class="form-wrapper">
                <?php echo do_shortcode('[contact-form-7 id="30" title="Contact"]') ?>
            </div>
          </div>
        </div>
        <div class="content-success">
          <div class="content-holder">
            <h2>thank you for message</h2>
            <p><a href="#home"><span class="icon-left-arrow"></span>Back home</a></p>
          </div>
        </div>
        <ul class="social-holder">
          <li>
            <div id="open-form" class="link-item">
              <span class="icon icon-contact"></span>
            </div>
          </li>
          <li>
            <a href="#" class="link-item"><span class="icon icon-twitter"></span></a>
          </li>
          <li>
            <a href="#" class="link-item"><span class="icon icon-facebook"></span></a>
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php get_footer(); ?>