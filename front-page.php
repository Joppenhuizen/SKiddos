<?php get_header(); ?>

<section id="home-header" style="background-image: url(<?php echo esc_url(wp_get_attachment_image_src( get_field('header_afbeelding'), '1920x1080' )[0]); ?>)">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-12 text-center my-auto">
				<h2 class="home-header-header"><?php the_field('header_tekst');?></h2>
				<a id="header-btn" href="<?php echo esc_url(the_field('page_link')); ?>">Lees verder</a>
			</div>		
		</div>	
	</div>
</section>
<section id="blokken">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="blokken-header text-center"><?php the_field('blokken_header'); ?></h2>
				<h4 class="blokken-sub text-center"><?php the_field('blokken_header_onderschrift'); ?></h4>
				<span class="blokken-text"><?php the_field('blokken_header_tekst'); ?></span>
			</div>
		</div>
		<?php 
		if( have_rows('blokken') ):
			$i = 0;
			$length = count(get_field('blokken'));
		    while ( have_rows('blokken') ) : the_row();
		    	if($i % 3 == 0)
			    {
			    	?><div class="row"><?php
			    }
			    ?>
					<div class="col-12 col-md-6 col-lg-4 padding-0">
						<div class="blok">
							<div class="blok-icon"><img src="<?php echo esc_url(wp_get_attachment_image_src( get_sub_field('icoon'), '80x80' )[0]); ?>" /></div>
							<h4 class="blok-titel"><?php the_sub_field('blok_titel') ?></h4>
							<div class="blok-tekst"><?php the_sub_field('blok_tekst') ?></div>
						</div>
					</div>
			    <?php
			    if ($i % 3 == 2 || $i == $length) {
			    	?> </div> <?php
		      	}
			    $i++;	
			    
		    endwhile;
		else :
		endif;
		?>
	</div>
</section>
<section id="fillafb" style="background-image: url(<?php echo esc_url(wp_get_attachment_image_src( get_field('afbeelding_blok'), '1920x500' )[0]); ?>)" ></section>
<?php 

get_template_part('template-parts/page', 'types');
get_template_part('template-parts/page', 'testimonials');

?>





<?php get_footer(); ?>