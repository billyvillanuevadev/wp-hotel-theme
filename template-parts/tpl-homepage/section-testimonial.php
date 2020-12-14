<?php
/**
 * Template part for displaying the Testimonial section on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<!-- Section Testimonial -->
<div id="section-testimonial" class="section bg-black tc-white">
  <div class="container" data-aos="fade-up">
    
    <?php if ( $testimonial = get_field('testimonial') ) : ?>
      <div class="row section-content">
        <div class="col">
          <blockquote>
            <h2 class="mb-3">
              &ldquo;<?=$testimonial?>&rdquo;
            </h2>
            <?=( $author = get_field('testimonial_author') ) ? '<cite>— '.$author.'</cite>' : ''; ?>
          </blockquote>
        </div>
      </div><!--/ .section-content .row -->
    <?php endif; ?>
    
  </div>
</div><!-- section-testimonial -->