<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class( 'xbv-preload' ); ?> data-spy="scroll" data-target="#navbar-scroller">
  <div class="xbv-loader"></div>

  <div id="page-top" class="global-wrapper"> 
    <?php wp_body_open(); ?>

    <!-- Header -->
    <header id="global-header" class="xbv-sticky-header">

      <!-- Navbar -->
      <div class="xbv-sticky-header-inner">
        <nav class="navbar navbar-expand-lg navbar-dark container">
          <div class="section-logo navbar-brand mr-auto">
            <div class="logo-simple <?= (is_front_page()) ? 'xbv-smooth-scroll' : ''; ?>">
              <a href="<?=get_home_url();?>/#page-top" class="logo nav-link">Suiko</a>
              <span class="subtitle">Hotel&bull;Resort</span>
            </div>
          </div>

          <div class="collapse navbar-collapse xbv-smooth-scroll" id="navbar-scroller">
            <?= xbv_get_menu('menu-1', 'navbar-nav ml-auto', 'nav-item', 'nav-link'); ?>
          </div>

          <div class="icons-absolute">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-scroller" aria-controls="navbar-scroller" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
          </div>
        </nav>
      </div><!--/ .xbv-sticky-header-inner -->
    </header><!--/ .xbv-sticky-header -->

    <?php if ( $hero_banner = get_field('hero_banner') ) : ?>
      <!-- Masthead Carousel -->
      <div id="xbv-masthead-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <?php if (!empty($hero_banner)) : ?>
          <ol class="carousel-indicators">
            <?php for($x=0; $x<count($hero_banner); $x++) : ?>
              <li data-target="#xbv-masthead-carousel" data-slide-to="<?=$x?>" class="<?=($x==0)?'active':'';?>"></li>
            <?php endfor; ?>
          </ol>
        <?php endif; ?>

        <div class="masthead-booking">
          <div class="masthead-booking-form xbv-opaque tc-white" action="" method="get">
            <a href="<?=get_home_url();?>/search-availability" class="d-inline-flex btn-no-style">
              <span>BOOK</span>
              <img class="img-fluid" src="<?= assets_path('images/arrow-right.svg'); ?>" alt="Book">
            </a>
            </div>
        </div>

        <div class="carousel-inner">
          <?php if ( !empty( $hero_banner ) ) : ?>
            <?php $ctr=0; ?>
            <?php foreach ( $hero_banner as $hero ) : ?>
              <div class="carousel-item <?= ( $ctr==0 ) ? 'active' : ''; ?>" style="background-image: url('<?= $hero['image']['url']; ?>')">
                <div class="xbv-overlay-abs"></div>
                <div class="carousel-caption">
                  <h2 class="header-title"><?= $hero['title']; ?></h2>
                  <p class="lead"><?= $hero['subtitle']; ?></p>
                </div>
              </div>
              <?php $ctr++; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <a class="carousel-control-prev" href="#xbv-masthead-carousel" role="button" data-slide="prev">
          <i class="fas fa-chevron-left"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#xbv-masthead-carousel" role="button" data-slide="next">
          <i class="fas fa-chevron-right"></i>
          <span class="sr-only">Next</span>
        </a>
      </div><!--/ #xbv-masthead-carousel -->

    <?php else: ?>
      <!-- Image Banner -->
      <div class="xbv-image-banner-header bg-black text-white mb-60" style="background-image: none;">
        <!-- <div class="overlay"></div> -->
        <div class="container">
          <h1 class="page-title text-center"><?php the_title(); ?></h1>
        </div>
      </div><!--/ .xbv-image-banner-header -->
    <?php endif; ?>

    <!-- Main Content -->
    <div id="main-content-post-<?= the_ID() ?>" class="main-content-wrapper">