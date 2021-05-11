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

				<!-- our header -->
				<div class="flex">

					<!-- our centred, full height, 60% width BG image -->
					<div class="w-60 min-vh-100 cover bg-center" style="<?php if(get_field('hero_image') ): ?>
    				background-image: url(<?php the_field('hero_image'); ?>);
					<?php endif; ?>"></div>
					<!-- our content -->
					<div class="w-40 flex items-center justify-center ph4">
						
						<div class="tc"><!-- a single div for the flex to work on -->
						<p class="f6 b archivo mt0 mb5 ttu tracked">
						<?php echo date("F Y", strtotime(get_field('date')));?>
						</p>
						<!-- standard wordpress data, not an ACF -->
						<h1 class="f1 archivo mt0 mb3 ttu">
						<?php the_title(); ?>
						</h1>
						<p class="f1 tenor mt0 mb3 ttu">
						<?php the_field('subhead'); ?>
						<!-- specific to this component -->
						</p>
						<p class="f4 cardo i measure center">
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

	<footer class="entry-footer">
		<?php //nomad_sun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
