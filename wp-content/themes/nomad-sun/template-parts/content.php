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

	<!-- hero needs BG image -->
	<section class="hero">
		<div class="hero-content">
		<!-- location title -->

			<h1><?php the_title(); ?></h1>
		<!-- subhead -->

		<?php if( get_field('subhead') ): ?>
    		<p><?php the_field('subhead'); ?></p>
		<?php endif; ?>

		<!-- date -->
		<?php if( get_field('date') ): ?>
    		<p><?php the_field('date'); ?></p>
		<?php endif; ?>


		</div>
	</section>

	<header class="entry-header">
	</header><!-- .entry-header -->


	<div class="entry-content">
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //nomad_sun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
