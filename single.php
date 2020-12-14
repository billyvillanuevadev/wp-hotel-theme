<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header(); ?>
<?php 
  if ( have_posts() ) :
    /* Start the Loop */
    while ( have_posts() ) :
      the_post();
      // get_template_part( 'template-parts/content', get_post_type() );
    ?>

      <!-- Section Content -->
      <div id="section-content" <?php post_class(); ?>>
        <div class="container">
          <div class="row">
            <div class="col-12 col-12 col-lg-8 ml-auto mr-auto">

              <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                <img src="<?= $image[0]; ?>" class="img-responsive mb-4" />
              <?php endif; ?>

              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div><!--/ #content -->

    <?php endwhile;
  else :
    get_template_part( 'template-parts/content', 'none' );
  endif;
?>

<?php get_footer(); ?>
