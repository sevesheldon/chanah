<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<div class="content-box">

				<?php the_content(); ?>

			</div>


		<?php endwhile; ?>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
