<?php
// Query featured entries
$featured = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> absint( get_theme_mod('featured-posts-count','0') ),
		'cat'						=> absint( get_theme_mod('featured-category','') )
	)
);
?>

<?php if ( is_home() && !is_paged() && ( get_theme_mod('featured-posts-count','0') !='0') && $featured->have_posts() ): // Show if posts are not 0 ?>
	
	<div class="page-title group">
		<h2><?php esc_html_e('Featured','noteblock'); ?><i class="fas fa-fire"></i></h2>
	</div>
	
	<?php while ( $featured->have_posts() ): $featured->the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>
