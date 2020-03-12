<?php 
$args = array(
        'post_type' => 'type_opvang',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

$type_array = new WP_Query( $args );
?>

<section id="type-slider-section" style="background-image: url(<?php echo esc_url(wp_get_attachment_image_src( get_field('achtergrond_type_slider'), '1920x500' )[0]); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 offset-md-2 text-center">
				<h3>Soorten opvang</h3>
				<div class="type-slider-text">
					<?php echo get_field('type_slider_header_tekst', 'option'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="type-slider">
			        <?php while($type_array->have_posts()): $type_array->the_post(); ?>
			       		<a class="type-slide" href="<?php echo get_the_permalink(); ?>">
			       			<div class="type-item-info">
			       				<div class="type-slide-title"><strong><?php the_title(); ?></strong></div>
			       				<div class="type-slide-desc"><?php echo get_field('korte_omschijving'); ?></div>
			       			</div>
			      		</a>
			      	<?php endwhile;
			        wp_reset_query(); ?>
			  	</div>
			</div>	
		</div>
	</div>
</section>