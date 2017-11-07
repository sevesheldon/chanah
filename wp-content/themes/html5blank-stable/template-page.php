<?php /* Template Name: Page Template */ get_header(); ?>

	<main role="main">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<div class="content-box" id="content-box-page">

				<span id="page-header-name">
					<a href="/">
						<h1><strong>Chanah Sheldon, M.S., L.Ac.</strong></h1>
						<h1>Acupuncture - NYC</h1>
					</a>
				</span>

				<h1 id="page-title"><?php the_title(); ?></h1>

				<?php the_content(); ?>

			</div>


		<?php endwhile; ?>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
