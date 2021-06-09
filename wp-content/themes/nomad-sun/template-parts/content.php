<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nomad_Sun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<div class="entry-content">

				<!-- if we have some flexible content, let’s loop through it -->
			<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
			// if it’s a header, go through the data
			if( get_row_layout() == 'header' ): ?>

				<!-- our header-->
				<div class="flex-l">

					<!-- header bg have 100% width and then 60% width on large screens as 
					well as 50vh and 100vh height on small and large screens -->
					<div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php nice_background('hero_image'); ?>"></div>

					<!-- our header content -->
					<!-- by default we'll make our header content block have 100% width
					and then we change it to 40% at large screen sizes -->
					<div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative">
						
						<div class="tc"> <!-- here we use absolute positioning for larger screens to put the date in the top centre -->
						<p class="f6 b archivo mt0 mb5 mb0-l ttu tracked absolute-l top-0-l left-0-l w-100-l pt4">
						<?php nice_date(get_field('date')); ?>
						<span class="line mt4"></span>
						</p>
						<!-- standard wordpress data, not an ACF -->
						<!-- we change the type scale for larger screens and squish the line height a bit because of the bigger font size -->
						<h1 class="f2 f1-l archivo mt0 mb4 ttu lh-title">
						<?php the_title(); ?>
						</h1>
						
						<p class="f2 f1-l tenor mt0 mb4 mb5-l ttu lh-title">
						<?php the_field('subhead'); ?>
						<!-- specific to this component -->
						</p>
						<p class="f4 cardo i measure center mv0">
						<?php the_sub_field('header_intro'); ?>
						</p>
						</div>

					</div>

				</div>

				

			<!-- if it’s a text component, show us the data -->
			<?php elseif( get_row_layout() == 'text_block' ): ?>

				<!-- this is the text block -->
				<div class="pv6 measure-wide center text-block f4">
				<?php the_sub_field('text_content'); ?>
				</div>

				
			<?php endif; 
			endwhile; endif; ?>

	</div><!-- .entry-content -->

	<!-- here we get an image by its id and tell it we want the full size version -->
	<div class="gallery-image">
		<?php echo wp_get_attachment_image(28, 'full'); ?>
			<!-- archivo regular at 50% opacity -->
		<p class="caption archivo-regular f5 o-50 pt3 mv0">
			<!-- grabbing the catpion by the image id -->
			<?php echo wp_get_attachment_caption(28); ?>
		</p>

	</div>

	<footer class="entry-footer">
		<?php //nomad_sun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
