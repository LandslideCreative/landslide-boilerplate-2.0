<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<main role="main" aria-label="Content">
		<div class="row columns">
			<?php the_content(); ?>
		</div>
	</main>

<?php endwhile; ?>
<?php else: ?>

	<?php get_template_part('partials/error', 'missing'); ?>

<?php endif; ?>

<?php get_footer(); ?>