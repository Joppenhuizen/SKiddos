<?php get_header();
get_template_part('template-parts/page', 'header');
?>

<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="contact-formulier">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="row">
					<div class="contact-gegevens">
						<div class="contact-item">
							<div class="contact-item-head"><i class="fas fa-map-marker-alt"></i><h4>Adres:</h4></div>
							<span><?php the_field('straat', 'option'); ?></span>
						</div>
						<div class="contact-item">
							<div class="contact-item-head"><i class="fas fa-phone"></i><h4>Telefoonnummer:</h4></div>
							<span><?php the_field('telefoon_nummer', 'option'); ?></span>
						</div>
						<div class="contact-item">
							<div class="contact-item-head"><i class="fas fa-envelope"></i><h4>Email adres:</h4></div>
							<span><?php the_field('email', 'option'); ?></span>
						</div>
						<div class="contact-item">
							<div class="contact-item-head"><i class="fas fa-clock"></i><h4>Openingstijden:</h4></div>
							<span><?php the_field('openingstijden', 'option'); ?></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="contact-maps">
						<div id="maps-container"><iframe src="<?php echo esc_url(get_field('google_maps_link', 'option')); ?>" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
	<?php the_content(); ?>




<?php get_footer(); ?>