<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
  
?>
<?php if (!empty( get_the_content() )) : ?>\
  <!-- Section Content -->
  <div id="section-content" <?php post_class(); ?>>
    <div class="container">
      <div class="row">
        <div class="col-12 col-12 col-lg-10 ml-auto mr-auto">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div><!--/ #content -->
<?php endif; ?>