<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<div class="content-box">

				<span id="page-header-name"><h1><strong>Chanah Sheldon, M.S., L.Ac.</strong></h1><h1>Acupuncture - NYC</h1></span>

				<?php the_content(); ?>

			</div>


		<?php endwhile; ?>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
