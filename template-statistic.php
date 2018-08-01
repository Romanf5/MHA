<?php
/*
 * Template Name: Statistics Template
 */
?>

<?php get_header(); ?>
  <main id="main" class="page-main" role="main">
    <section class="banner" style="background: url('<?php echo CFS()->get( 'statistic_background' ); ?>') no-repeat; background-size: cover; background-position-x: center">
      <h1><?php echo CFS()->get( 'statistic_headline' ); ?></h1>
      <div class="arrow"></div>
    </section>
    <section class="content-section">
      <div class="background-block"></div>
      <div class="table-wrap">
        <div class="table__headline table-radius">
          <p><?php echo CFS()->get( 'table_headline_top' ); ?></p>
        </div>
        <table class="main-table border">
          <tr class="head">
            <th class="first">Starts</th><th>Firsts</th><th>Seconds</th><th>Thirds</th><th class="fourth">Earnings</th>
          </tr>
            <?php
            $table_year = CFS()->get('year_statistics');
            if ($table_year){
                foreach ($table_year as $table_item) { ?>
                  <tr>
                    <td><?php echo $table_item['stars'] ?></td>
                    <td><?php echo $table_item['firsts'] ?></td>
                    <td><?php echo $table_item['seconds'] ?></td>
                    <td><?php echo $table_item['thirds'] ?></td>
                    <td><?php echo $table_item['earnings'] ?></td>
                  </tr>
                <?php }
            }
            ?>
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
          <p><?php echo CFS()->get( 'hidden_text' ); ?></p>
        </div>
        <div class="button-wrapper">
          <button id="clicked" class="toggle-button">
            <span class="text">read full bio</span>
            <i class="icon-back"></i>
          </button>
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
  </main>
<?php get_footer(); ?>