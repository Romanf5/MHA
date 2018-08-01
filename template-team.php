<?php
/*
 * Template Name: Team Template
 */
?>

<?php get_header(); ?>
	<main id="main" class="page-main" role="main">
    <section class="introduction" style="background: url('<?php echo CFS()->get( 'main_background' ); ?>') no-repeat; background-size: cover; background-position-x: center">
      <div class="arrow"></div>
      <h2><?php echo CFS()->get( 'team_headline' ); ?></h2>
    </section>
    <section class="team-section">
      <div class="arrow down"></div>
      <div class="ornament">
        <span class="left"></span>
        <div class="ornament__outer">
          <div class="ornament__inner"></div>
        </div>
        <span class="right"></span>
      </div>
      <div class="team-section-wrap">
        <div class="ornament big">
          <div class="ornament__outer">
            <div class="ornament__inner"></div>
          </div>
        </div>
        <div class="ornament middle">
          <div class="ornament__outer">
            <div class="ornament__inner"></div>
          </div>
        </div>
          <?php
          $args = [
              'post_type' => 'Team',
              'posts_per_page' => 10,
              'order' => 'DESC'
          ];

          query_posts($args);

          while (have_posts()) : the_post();

              get_template_part('template-parts/team', 'posts');

              // If comments are open or we have at least one comment, load up the comment template.
              if (comments_open() || get_comments_number()) :
                  comments_template();
              endif;

          endwhile; // End of the loop.
          ?>
      </div>
      <div class="ornament border">
        <div class="ornament__outer">
        </div>
      </div>
    </section>
	</main>
<?php get_footer(); ?>
