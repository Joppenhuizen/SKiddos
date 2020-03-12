<?php
 	
 	$headerimg = wp_get_attachment_image_src( get_field('post_header_afbeelding', 'option'), '1920x500' )[0];

?>

<section id="page-header" style="background-image: url(<?php echo esc_url($headerimg); ?>)">
	<div class="overlay"></div>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-9 my-auto">
				<h1 class="page-header-tekst">Personeel</h1>
			</div>	
			<div class="col-3 my-auto">
				<div class="breadcrumbs"><?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb();
					}
					?>
				</div>
			</div>	
		</div>	
	</div>
</section>