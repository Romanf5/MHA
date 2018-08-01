<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>
<?php $classes = get_body_class();?>

<header class="page-header">

  <div class="main-container">
    <div class="responsive-image">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link" rel="home">
          <?php if (in_array('page-template-template-gallery',$classes)): ?>
            <img src="<?php echo get_theme_mod('logo-dark'); ?>" alt="mha">
          <?php else : ?>
            <img src="<?php echo get_theme_mod('logo'); ?>" alt="mha">
          <?php endif; ?>
      </a>
    </div>

    <nav class="main-nav" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'left-menu', 'container' => false ) ); ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link" rel="home">
          <?php if (in_array('page-template-template-gallery',$classes)): ?>
            <img src="<?php echo get_theme_mod('logo-dark'); ?>" alt="mha">
          <?php else : ?>
            <img src="<?php echo get_theme_mod('logo'); ?>" alt="mha">
          <?php endif; ?>
      </a>
        <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_class' => 'right-menu', 'container' => false ) ); ?>
    </nav>

<!--    <button class="responsive-button">Menu</button>-->
    <div class="responsive-button">
      <div class="responsive-button__item"></div>
      <div class="responsive-button__item"></div>
      <div class="responsive-button__item"></div>
    </div>
  </div>

  <div id="overlay" class="overlay"></div>

</header>