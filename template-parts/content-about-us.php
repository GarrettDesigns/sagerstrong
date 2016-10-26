<div class="about_page_container">
  <div class="page_column--left">
    <?php while ( have_rows( 'videos') ) : the_row(); ?>
      <?php the_sub_field( 'video_embed_code' ); ?>
    <?php endwhile; ?>
    <?php echo get_field( 'left_column_content' ); ?>
  </div>
  <div class="page_column--right">
    <?php echo $post->post_content; ?>
    <img class="page_end_graphic" src="<?php echo get_template_directory_uri(); ?>/assets/images/Ribbon.png" alt="grayscale graphic of a men's tie">
  </div>
</div>
