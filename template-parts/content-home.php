<div class="orbit" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
	<ul class="orbit-container">
		<?php while ( have_rows( 'homepage_slides' ) ) : the_row(); ?>
			<li class="orbit-slide">
				<a href="<?php the_sub_field( 'slide_link' ); ?>"><img src="<?php the_sub_field( 'slide' ); ?>"></a>
			</li>
		<?php endwhile; ?>
	</ul>
</div>

<p class="tagline_container">
	<span class="tagline">"Time is simply how you <span class='red_emphasis'>live</span> your life" | <img class="signature" src="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/images/SignatureSagerRed.png" alt="Craig Sager's Signature"></span>
</p>

<div class="featured_tiles">
	<?php while ( have_rows( 'featured_tiles' ) ) : the_row(); ?>
		<div class="featured_tile">
			<a href="<?php the_sub_field( 'tile_link' ); ?>"><img src="<?php the_sub_field( 'tile_image' ); ?>" alt=""></a>
      <h3 class="tile_heading"><a href="<?php the_sub_field( 'tile_link' ); ?>"><?php the_sub_field( 'tile_heading' ); ?></a></h3>
			<p class="tile_text"><?php the_sub_field( 'tile_text' ); ?></p>
		</div>
	<?php endwhile; ?>
</div>

<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="page_end_logo" alt="large 'S' logo">
