<?php get_header();
get_template_part('template-parts/page', 'header');
?>

<section id="galerij">
	<div class="container">
		<?php 
		$images = get_field('galerij');
		if( $images ):
			$i = 0;
			$length = count(get_field('galerij')); 
			    foreach( $images as $image_id ):
			    	if($i % 3 == 0)
				    {
				    	?><div class="row"><?php
				    }
				    ?>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="gal-image">
								<a href="<?php echo esc_url(wp_get_attachment_image_src( $image_id, '300x250' )[0]); ?>" data-lightbox="<?php echo get_the_title($image_id)  ?>"><?php echo wp_get_attachment_image( $image_id, '350x200' ); ?></a>
							</div>
						</div>
				    <?php
				    if ($i % 3 == 2 || $i == $length) {
				    	?> </div> <?php
			      	}
				    $i++;	
				    
			    endforeach; ?>
		 	</div> <?php 
		else :
		endif;
		?>
	</div>
</section>


<?php get_footer(); ?>