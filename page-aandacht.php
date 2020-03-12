<?php get_header();
get_template_part('template-parts/page', 'header');
?>

<?php 
if( have_rows('aandacht_voor') ):
    while ( have_rows('aandacht_voor') ) : the_row();
	    ?>
	    <section class="aandacht-single">
	    	<div class="container">
			   	<div class="row">
			   		<div class="col-12 col-md-4 col-lg-4 padding-0 image">
						<div class="aandacht-img"><img src="<?php echo esc_url(wp_get_attachment_image_src( get_sub_field('afbeelding'), '300x250' )[0]); ?>" /></div>
					</div>
					<div class="col-12 col-md-8 col-lg-8 padding-0 my-auto">
						<div class="aandacht-teksten">
							<h4 class="aandacht-titel"><?php the_sub_field('titel') ?></h4>
							<div class="aandacht-tekst"><?php the_sub_field('tekst') ?></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	    <?php
    endwhile;
else :
endif;
?>



<?php get_footer(); ?>