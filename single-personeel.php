<?php get_header(); 
get_template_part('template-parts/post', 'header');
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-4 text-center">
				<div class="personeel-item-img">
					<?php echo wp_get_attachment_image( get_field('foto'), '300x300' ); ?>
				</div>
			</div>
			<div class="col-12 col-md-8 col-lg-8">
				<div class="personeel-item-info">
					<div class="personeel-naam"><?php the_title(); ?></div>
					<div class="personeel-functie"><?php the_field('functie'); ?></div>
					<div class="personeel-profiel"><?php the_field('profiel'); ?></div>
				</div>
			</div>
		</div>
	</div>

</article>


<?php get_footer(); ?>