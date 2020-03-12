<?php get_header();
get_template_part('template-parts/archive', 'header');
?>

<section id="personeel-archive-header">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="blokken-header"><?php the_field('personeel_titel', 'option'); ?></h2>
				<h4 class="blokken-sub"><?php the_field('personeel_sub_titel', 'option'); ?></h4>
				<span class="blokken-text"><?php the_field('personeel_tekst', 'option'); ?></span>
			</div>
		</div>
	</div>
</section>
<section id="personeel">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center"><h2 class="ons-personeel">Ons personeel</h2></div>
		</div>
		<?php 
		if(have_posts()) :

			$i = 0;
			$length = $GLOBALS['wp_query']->post_count;

			while(have_posts()) : the_post(); 

				if($i % 3 == 0)
			    {
			    	?><div class="row personeel-row"><?php
			    }
				?>

				<div class="col-12 col-md-6 col-lg-4 text-center">
					<a class="personeel-item" href="<?php echo get_permalink(); ?>">
						<div class="personeel-item-img">
							<?php echo wp_get_attachment_image( get_field('foto'), '300x300' ); ?>
						</div>
						<div class="personeel-item-info">
							<div class="personeel-naam"><?php the_title(); ?></div>
							<div class="personeel-functie"><?php the_field('functie'); ?></div>
						</div>
					</a>
				</div>
				<?php 
				if ($i % 3 == 2 || $i == $length) {
					?> </div> <?php
				}
				$i++;	
			endwhile; 
			wp_reset_query(); 
		endif; ?>
	</div>
</section>




<?php get_footer(); ?>