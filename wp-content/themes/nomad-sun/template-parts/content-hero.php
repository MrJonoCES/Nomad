
        <!-- using permalink gives us a link to the post -->
    <!-- <h1>
        <a href="<?php the_permalink( ); ?>">
		Check out <?php the_title(  ); ?>!
        </a>
	</h1> -->
    
    <!-- here we used an inline style attributed to attach our hero image as a css background directly onto the element. 
	And the section have a min height of 100vh, cover and centre background etc -->
	<a class="db link hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php nice_background('hero_image'); ?>" href="<?php the_permalink(); ?>">
		<!-- make text white and centre it -->
		<div class="hero-content white tc ph3 ph4-l">
		<!-- location title -->

			<h1 class="hero-heading f2 f1-l archivo mt0 mb3 bold ma0 ttu lh-title">
				<?php the_title(); ?>
			</h1>
		<!-- subhead -->

		<?php if(get_field('subhead') ): ?>
    		<p class="hero-subhead f2 f1-l tenor mb5 mb6-l mt0 white ttu lh-title">
				<?php the_field('subhead'); ?>
			</p>
		<?php endif; ?>

		<!-- date -->
		<?php if(get_field('date') ): ?>
			
			<p class="archivo f6 bold white ttu ma0 tracked">
			<?php
			// here we convert date into a format php can work with and then we format it to be readable
			nice_date(get_field('date'));

			?>
			</p>

		<?php endif; ?>


		</div>
	</a>