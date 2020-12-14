<?php
/**
 * Template part for displaying the Room section on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<!-- Section Rooms -->
<div class="section overflow-hidden" id="section-rooms">
  <div class="container" data-aos="fade-up">

    <?php if ( $section_title = get_field('section_title_rooms') ) : ?>
      <div class="row">
        <div class="col text-center">
          <h2 class="section-title mb-0 "><?= $section_title; ?></h2>
          <div class="vline bg-black text-center"></div>
        </div>
      </div>
    <?php endif; ?>

    <div class="row section-content" data-aos="fade-up" data-aos-delay="100">
      <?php if ( $rooms = get_field('rooms') ) : ?>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="slick-leaf">
            <?php foreach ( $rooms as $room ) : ?>
              <?php $room_image = get_field('room_image', $room->ID); ?>
              <div class="slick-slide">
                <a href="<?=get_home_url()?>/accommodation/<?=$room->post_name?>" class="img-link bg-center" style="background-image: url(<?=$room_image['sizes']['thumbnail-common'];?>)"></a>
              </div>
            <?php endforeach; ?>
          </div><!--/ .slick-leaf -->
        </div><!--/ .col -->

        <div class="col-lg-4">
          <div class="slick-leaf-desc">

            <?php foreach ( $rooms as $post ) : 
              setup_postdata($post);
              ?>
              
              <div class="slick-desc">
                <h3><a class="tc-black" href="<?=get_home_url()?>/accommodation/<?=$post->post_name?>"><?php the_title(); ?></a></h3>
                <?= ( $room_description = get_field('room_description') ) ? $room_description : ''; ?>
                <h4>Features & Amenities</h4>
                <?php if ( $features_amenities = get_field('features_amenities') ) : ?>
                  <ul class="list-fa">
                    <?php foreach ( $features_amenities as $fa ) : ?>
                      <li><i class="<?=$fa['fa_icon']?>"></i><?=$fa['feature']?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            
          </div><!--/ .slick-leaf-desc -->
        </div><!--/ .col -->
      <?php endif; ?>
    </div><!--/ .row.section-content -->
  </div>
</div><!--/ #section-rooms -->