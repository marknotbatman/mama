<?php /* Template Name: Template - Home */ get_header(); ?>



	<section class="hero">
		<div class="row">
			<div class="columns large-6 large-offset-3 medium-8 medium-offset-2">
				<div class="logo">
					<h1 class="robot">Mama Film - Media About Moms</h1>
					<img src="<?php the_field('logo') ?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="columns medium-10 medium-offset-1 title">
				<h2 class="h1">Mission: <span><?php the_field('mission_copy'); ?></span></h2>			
			</div>
		</div>
		<?php
			// check if the repeater field has rows of data
			if( have_rows('body_copy') ):
			// loop through the rows of data
			while ( have_rows('body_copy') ) : the_row();
	        // display a sub field value
		?>
		<div class="row">
			<div class="columns medium-10 medium-offset-1">
				<?php the_sub_field('copy_block'); ?>
			</div>
		</div>
		<?php
			endwhile;
			else :
				// no rows found
			endif;
		?>
		<div class="row">
			<div class="columns medium-10 medium-offset-1 center">
				<a class="button circle-btn" href="mailto:<?php the_field('mail_to_link'); ?>">
					<span><?php the_field('button_copy'); ?></span>
					<i class="far fa-envelope"></i>
				</a>
			</div>
		</div>

	</section>





<?php get_footer(); ?>
