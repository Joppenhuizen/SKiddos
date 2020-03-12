<?php 

$args = array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

 $testemonial_array = new WP_Query( $args );

?>
<section id="testemonial-slider-section">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h3>Getuigenissen van ouders</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="testemonial-slider">
			        <?php while($testemonial_array->have_posts()): $testemonial_array->the_post(); ?>
			       		<div class="testemonial-slide">
			       			<div class="testemonial-slide-tekst">
			       				<div class="testemonial-slide-desc"><?php echo get_field('Getuigenis'); ?></div>
			       			</div>
			       			<div class="info">
			       				<img class="port" src="<?php echo esc_url(wp_get_attachment_image_src( get_field('afbeelding'), '100x100' )[0]); ?>"/>
			       				<div class="getuigennaam"><?php the_title(); ?></div>
			       			</div>
			      		</div>
			      	<?php endwhile;
			        wp_reset_query(); ?>
			  	</div>
			</div>	
		</div>
	</div>
</section>