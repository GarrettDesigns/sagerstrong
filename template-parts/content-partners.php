<div class="partners_content_container">
  <div class="page_column--left">
    <?php echo $post->post_content; ?>
  </div>
  <div class="page_column--right">
    <?php while ( have_rows( 'partner' ) ) : the_row(); ?>
      <div class="partner">
        <h2 class="partner_name"><?php the_sub_field( 'partner_name' ); ?></h2>
        <div class="partner_description">
          <?php the_sub_field( 'partner_description' ); ?>
            <a class="partner_link" href="<?php the_sub_field( 'partner_link' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
