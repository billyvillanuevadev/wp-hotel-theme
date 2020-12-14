<?php
/**
 * Template part for displaying the Gallery section on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<!-- Section Gallery -->
<div id="section-gallery" class="section bg-gray-light overflow-hidden" data-aos="fade-up"> 
  <div class="container">
    <?php if ( $section_title = get_field('section_title_gallery') ) : ?>
      <div class="row">
        <div class="col text-center">
          <h2 class="section-title mb-0"><?=$section_title?></h2>
          <div class="vline bg-black"></div>
        </div>
      </div>
    <?php endif; ?>
  </div>
  
  <div class="container-fluid container-fluid-max p-0">
    <?php if ( $gallery = get_field('gallery') ) : ?>
      <div class="slick-gallery">
        <?php foreach ( $gallery as $image ) : ?>
          <div class="slick-slide">
            <a class="d-block" href="<?=$image['url']?>" data-lightbox="gallery">
              <img src="<?=$image['sizes']['thumbnail-square']?>" />
            </a>
          </div>
        <?php endforeach; ?>
      </div><!--/ .slick-gallery -->
    <?php endif; ?>
  </div><!--/ .slick-gallery -->
</div><!-- #section-gallery -->