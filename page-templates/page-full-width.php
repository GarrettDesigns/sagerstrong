<?php
/*
Template Name: Full Width
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
				<?php
					// Query posts for top level pages
					$args = array(
						'post_type' => 'page',
					);
					$page_query = new WP_Query( $args );
					$pages = $page_query->posts;

					// Loop through pages and get template partial based on current page
					foreach ( $pages as $page ) :
						if ( is_page( $page->post_name ) ) :
							$page_name = $page->post_name;
							get_template_part( 'template-parts/content', $page_name );
						endif;
					endforeach;
				?>
			</div>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
