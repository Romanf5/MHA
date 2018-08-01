<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="article-wrap">
    <div class="image-holder" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat; background-size: cover; background-position-x: center">
    </div>
    <div class="content-wrapper">
      <a href="<?php echo CFS()->get( 'news_link' ); ?>" class="news-link" target="_blank"><?php the_title(); ?></a>
      <div class="excerpt-wrap">
          <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>