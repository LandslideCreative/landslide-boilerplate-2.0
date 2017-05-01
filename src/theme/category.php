<?php get_header(); ?>

<main role="main" aria-label="Content">
	<div class="row">
		<div class="medium-8 columns">
			<h1><?php _e( 'Posts about ', 'html5blank' ); single_cat_title(); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		<div class="medium-4 columns">
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
