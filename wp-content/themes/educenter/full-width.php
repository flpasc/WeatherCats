<?php
/**
 * Template Name: Full Width
 *
 * @package Educenter
 */

get_header(); ?>

<div class="content clearfix">
	<section class="ed-about-us layout-1 clearfix">
	<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :

				comments_template();
				
			endif;

		endwhile; // End of the loop.
	?>
	</section>

</div>

<?php get_footer();