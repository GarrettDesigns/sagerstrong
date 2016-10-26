<?php
/*
Template Name: Custom Page
*/
get_header(); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			<header>
				<?php get_template_part( 'template-parts/page-header' ); ?>
			</header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>

			<div class="entry-content">
        <div class="page_column--left">
          <?php echo get_field( 'left_column_content' ); ?>
        </div>
        <div class="page_column--right">
          <?php echo get_field( 'right_column_content' ); ?>
        </div>
			</div>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
