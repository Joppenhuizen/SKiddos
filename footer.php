<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<span class="footer-title"><?php echo get_bloginfo('name'); ?></span>
				<p id="footer-desc">
					<?php the_field('korte_beschrijving', 'option'); ?>
				</p>
			</div>
			<div class="col-12 col-md-3">
				<span class="footer-title">Navigatie</span>
				<?php wp_nav_menu( 
						array(
							'theme_location'  => 'menu-top',
							'depth'			  => '1',
							'container'       => 'div',
							'menu_class'      => 'footer-nav',
						) ); ?>		
			</div>
			<div class="col-12 col-md-3">
				<span class="footer-title">Contactgegevens</span>
				<div class="footer-contact">
					<div class="footer-contact-item">
						<i class="fas fa-map-marker-alt"></i><span><?php the_field('straat', 'option'); ?></span>
					</div>
					<div class="footer-contact-item">
						<i class="fas fa-phone"></i><span><?php the_field('telefoon_nummer', 'option'); ?></span>
					</div>
					<div class="footer-contact-item">
						<i class="fas fa-envelope"></i><span><?php the_field('email', 'option'); ?></span>
					</div>
					<div class="footer-contact-item">
						<i class="fas fa-clock"></i><span><?php the_field('openingstijden', 'option'); ?></span>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>
<section class="copy">
	<div class="container">
		<div class="row">
			<div class="col-12"><?php the_field('copyright', 'option'); ?></div>
		</div>
	</div>
</section>

<?php wp_footer(); ?>

</body>
</html>