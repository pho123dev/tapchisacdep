<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="description" content="Diva" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="Diva IT Team"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <meta  property="og:image" content="<?php $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large'); echo $post_thumbnail[0]; ?>" />
  <?php get_template_part('templates/out-site/google-tool'); ?>
  <?php get_template_part( 'includes/includes-style' ); ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header pc" id="header">
    <div class="header-main">
      <div class="container">
        <div class="navbar-container-inner clearfix">
          <div class="site-branding">
            <div class="site-logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="">
                <img src="<?php the_field('logo','option'); ?>" class="default-logo" alt="<?php bloginfo( 'name' ); ?>" />
              </a>
            </div>
          </div>
          <nav class="main-nav" id="nav">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'container' => '',
              'link_before'     => '<span>',
              'link_after'      => '</span>',
              'menu_id'         => 'main-navigation',
              'menu_class'        => 'menu-list',
            ) );

            ?>
          </nav>
          <?php pho_search(); ?>
        </div>
      </div>
    </div>
  </header>
  <header id="header-content-mobile" class="clearfix mobile">
    <div class="site-branding">
      <div class="site-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="">
           <img src="<?php the_field('logo','option'); ?>" class="default-logo" alt="<?php bloginfo( 'name' ); ?>" />
        </a>
      </div>
    </div>
    <div class="navbar-container-inner clearfix">
    <?php pho_search(); ?>
      <div class="header-mobile-tools">
        <a title="<?php esc_attr_e('Menu', 'pho') ?>" href="#" id="hamburger-icon" class="">
          <i class="gg-menu"></i>
        </a>
      </div>
      <?php $items_wrap = '';
      printf(
        '<nav id="main-nav-mobile" class="main-nav-mobile">
        <div class="menu_header"><div class="menu_title"><i class="fas fa-bars"></i></div><div class="menu_close"><i class="fa fa-times" ></i></div></div>
        <ul class="menu navigation-mobile">%s</ul>
        </nav><div class="menu_overlay"></div>',
        $items_wrap
      ); ?>
    </div>
  </header>