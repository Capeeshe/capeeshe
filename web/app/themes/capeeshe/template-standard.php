<?php
/**
 * Template Name: Standard Template
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="flex container mx-auto border-r border-l border-salle-black">
		<div class="min-h-screen w-full">
			<?php get_template_part( 'partials/sections'); ?>
		</div>
	</div>
<?php endwhile; ?>
