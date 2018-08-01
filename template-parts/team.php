<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="article-wrap">
    <div class="image-holder" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat; background-size: cover; background-position-x: center">
    </div>
    <div class="content-wrapper">
      <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
  </div>
</article>