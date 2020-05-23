<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Blog Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <?php wp_head(); ?>
  <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
      }
  </style>
</head>

<body>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="#">Large</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="text-muted" href="#" aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
              viewBox="0 0 24 24" focusable="false">
              <title>Search</title>
              <circle cx="10.5" cy="10.5" r="7.5" />
              <path d="M21 21l-5.2-5.2" />
            </svg>
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </div>
      </div>
    </header>

    <div class="py-1 mb-2">
      <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav main-blog-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>

<section class="showcase">
  <div class="container">
    <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
    <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
    <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
  </div>
</section>

<section class="boxes">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php if(is_active_sidebar('box1')) :?>
          <?php dynamic_sidebar('box1'); ?>
        <?php endif; ?>
      </div>

      <div class="col-md-4">
        <?php if(is_active_sidebar('box2')) :?>
          <?php dynamic_sidebar('box2'); ?>
        <?php endif; ?>
      </div>

      <div class="col-md-4">
        <?php if(is_active_sidebar('box3')) :?>
          <?php dynamic_sidebar('box3'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<footer class="blog-footer">
  <p>&copy; <?php echo Date('Y'); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.slim.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  
</body>

</html>