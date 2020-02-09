<?php
/**
 * Template for displaying all single posts
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

      <div class="row">

        <div class=" blog-main">

          <?php get_template_part( 'loop', 'single' ); ?>

        </div><!-- /.blog-main -->



      </div><!-- /.row -->
      
	<?php get_footer(); ?>