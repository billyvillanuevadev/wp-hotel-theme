<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header();
?>
<section id="content" <?php post_class(); ?>>
  <div class="bg-white pt-5 pb-5">
    <div class="container">
      <div class="row d-block">
        <div class="col-12 col-12 text-center">
          <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'xbv' ); ?></h1>
        </div>
      </div>
    </div>
  </div>
</section><!--/ #content -->
<?php
get_footer();
